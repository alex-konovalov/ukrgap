InstallGlobalFunction( SystematicNumberObj, 
function( Fam, digits )return Objectify( NewType( Fam, 
                           IsSystematicNumberObj and IsSystematicNumberRep ), 
                  [ digits ] );end );InstallGlobalFunction( SystematicNumbersRing, 
function( b )local F, R;if not IsPosInt( b ) then  Error( " must be a positive integer" );fi;F := NewFamily( Concatenation( String( b ), "-base numbers"),                IsSystematicNumberObj );F!.base := b;R := RingWithOneByGenerators( [ SystematicNumberObj( F, [ 1 ] ) ] );SetIsWholeFamily( R, true );SetName( R, Concatenation( "Integers base ", String( b ) ) );return R;end );

InstallMethod( Digits, 
    [ IsPosInt, IsPosInt ],function( n, b )local digits, d, i;digits := [ ];i := 1;d := n;while true do  if d < b then    digits[ i ] := d;    break;  fi;  digits[ i ] := d mod b;  d := ( d - digits[ i ] ) / b;  i := i + 1;od;return Reversed( digits );end );

InstallGlobalFunction( SystematicNumber, 
function( R, n )local digits, b, F;b := FamilyObj( GeneratorsOfRingWithOne( R )[ 1 ] )!.base;digits := Digits( n, b );F := FamilyObj( GeneratorsOfRingWithOne( R )[ 1 ] );return SystematicNumberObj( F, digits );end );

InstallMethod( PrintObj, 
    [ IsSystematicNumberObj and IsSystematicNumberRep ],function( x )local i, d;d := x![ 1 ];for i in d do  if i > 9 then    Print( "(", i, ")" );  else    Print( i );  fi;od;end );

InstallGlobalFunction( TransformNumber,function( x )local d, b, i, n, L;d := x![ 1 ];b := FamilyObj( x )!.base;n := 0;L := Length( d );for i in [ 1..L ] do  n := n + d[ i ] * ( b^( L - i ) );od;return n;end );

InstallMethod( \=, IsIdenticalObj,    [ IsSystematicNumberObj and IsSystematicNumberRep,      IsSystematicNumberObj and IsSystematicNumberRep ],function( x, y )return x![ 1 ] = y![ 1 ];end );

InstallMethod( \+, 
    IsIdenticalObj, 
    [ IsSystematicNumberObj and IsSystematicNumberRep,      IsSystematicNumberObj and IsSystematicNumberRep ],function( x, y )return SystematicNumberObj( FamilyObj(x), 
                            Digits( TransformNumber(x)+TransformNumber(y), 
                                    FamilyObj( x )!.base ) );end );
InstallMethod( \*, 
    IsIdenticalObj, 
    [ IsSystematicNumberObj and IsSystematicNumberRep,      IsSystematicNumberObj and IsSystematicNumberRep ],function( x, y )return SystematicNumberObj( FamilyObj(x), 
                            Digits( TransformNumber(x)*TransformNumber(y), 
                                    FamilyObj(x)!.base ) );end );

InstallMethod( \<, 
    IsIdenticalObj, 
    [ IsSystematicNumberObj and IsSystematicNumberRep,      IsSystematicNumberObj and IsSystematicNumberRep ],function( x, y )return TransformNumber( x ) < TransformNumber( y );end );

InstallMethod( \^, 
    IsIdenticalObj, 
    [ IsSystematicNumberObj and IsSystematicNumberRep,      IsSystematicNumberObj and IsSystematicNumberRep ],function( x, y )return SystematicNumberObj( FamilyObj( x ), 
                            Digits( TransformNumber(x)^TransformNumber(y), 
                                    FamilyObj( x )!.base ) );end );