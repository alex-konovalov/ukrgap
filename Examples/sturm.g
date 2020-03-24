######################################################################
#
# We declare an attribute to store the Sturm system of a polynomial
#
SturmSystem:=NewAttribute("SturmSystem",IsUnivariatePolynomial);


######################################################################
#
# SturmSystem(f)
#
InstallMethod( SturmSystem,
               "for univariate polynomial",
               true,
               [ IsUnivariatePolynomial ],
               0,
function ( f )
local d, r, t, x, sturm;
x:=IndeterminateOfUnivariateRationalFunction(f);
d:=Derivative(f);
sturm := [ f, d ];
Print("f(x) = ", f, "\n", "f'(x) = ", d,"\n");
r := - EuclideanRemainder(f,d);
t := EuclideanQuotient(f,d);
Print(f, " = ", d, " * ", t, " - ", r, "\n");
while DegreeIndeterminate(f,x)>1 do
   Add( sturm, r );
   f:=d;
   d:=r;
   r := -EuclideanRemainder(f,d);
   t := EuclideanQuotient(f,d);
   Print(f, " = ", d," * ", t, " - ",r,"\n");
od;
return sturm;
end);


######################################################################
#
# ChangeSignsInList(v)
#
# Counts the number of changes of the sign of an element in the list v
#
ChangeSignsInList:=function(v)
local s,c,sign,i;
c:=0;
i:=1;
while i <= Length(v) do
   if v[i]<>0 then
     sign:=v[i];
     repeat
       i:=i+1;
       if i > Length(v) then
         return c;
       fi;
     until v[i]<>0;
     if sign<>v[i] then
       c:=c+1;
     fi;
   else
     i:=i+1;
   fi;
od;
return c;
end;


######################################################################
#
# ChangeSigns(sturm,a)
#
# Counts the number of sign changes in the sturm series in the point a
#
ChangeSigns:=function(sturm,a)
local v,s,c,sign,i;
v:=List(sturm, s -> SignInt(Value(s,a)));
return ChangeSignsInList(v);
end;


######################################################################
#
# NrRoots(f,a,b);
#
# Counts the number of roots of the polynomial f(x) on (a,b]
#
NrRoots:=function(f,a,b)
local sturm,sa,sb;
sturm:=SturmSystem(f);
sa:=ChangeSigns(sturm,a);
sb:=ChangeSigns(sturm,b);
return sa-sb;
end;


######################################################################
#
# ChangeSignsMinusInfinity(sturm)
#
# Counts sign changes in the sturm series on minus infinity
#
ChangeSignsMinusInfinity:=function(sturm)
local x,v,s;
x:=IndeterminateOfUnivariateRationalFunction(sturm[1]);
v:=List(sturm, s ->
       (-1)^(DegreeIndeterminate(s,x))*SignInt(LeadingCoefficient(s)) );
return ChangeSignsInList(v);
end;


######################################################################
#
# ChangeSignsPlusInfinity(sturm)
#
# Counts sign changes in the sturm series on plus infinity
#
ChangeSignsPlusInfinity:=function(sturm)
local x,v,s;
x:=IndeterminateOfUnivariateRationalFunction(sturm[1]);
v:=List(sturm, s -> SignInt(LeadingCoefficient(s)) );
return ChangeSignsInList(v);
end;


######################################################################
#
# NrOfRealRoots(f)
#
# Returns the number of real roots of the polynomial f
#
NrOfRealRoots:=function(f)
local sturm;
sturm:=SturmSystem(f);
return ChangeSignsMinusInfinity(sturm)-ChangeSignsPlusInfinity(sturm);
end;


######################################################################
#
# NrOfPositiveRealRoots(f)
#
# Returns the number of positive real roots of the polynomial f
#
NrOfPositiveRealRoots:=function(f)
local sturm;
sturm:=SturmSystem(f);
return ChangeSigns(sturm,0)-ChangeSignsPlusInfinity(sturm);
end;


######################################################################
#
# NrOfNonPositiveRealRoots(f)
#
# Returns the number of non-positive real roots of the polynomial f
#
NrOfNonPositiveRealRoots:=function(f)
local sturm;
sturm:=SturmSystem(f);
return ChangeSignsMinusInfinity(sturm)-ChangeSigns(sturm,0);
end;


######################################################################
#
# UpperRootsLimit(f)
#
# Returns the upper limit of real roots of the polynomial
#
UpperRootsLimit:=function(f)
local coeffs,A,N;
coeffs :=CoefficientsOfUnivariatePolynomial( f );
A := Maximum( List( coeffs{[1..Length(coeffs)-1]}, a -> AbsoluteValue(a) ) );
N := 1 + A / AbsoluteValue( LeadingCoefficient(f) );
return N;
end;


######################################################################
#
# IntervalsOfRoots(f,eps)
#
# Returns the intervals for real roots of the polynomial (including
# rational ones) with the exactness eps
#
IntervalsOfRoots:=function(f,eps)
local N,roots,rootsn,r,M,c;
N:=UpperRootsLimit(f);
roots:=[ [-N,N] ];
c:=0;
repeat
  rootsn:=[];
  for r in roots do
    M:=(r[1]+r[2])/2;
    if NrRoots(f,r[1],M) > 0 then
      Add( rootsn, [ r[1], M ] );
    fi;
    if NrRoots(f,M,r[2]) > 0 then
      Add( rootsn, [ M, r[2] ] );
    fi;
  od;
  c:=c+1;
  Print(c,"\r");
  roots:=ShallowCopy(rootsn);
until ForAll(roots, r -> r[2]-r[1] <= eps);
Print("\n");
return roots;
end;