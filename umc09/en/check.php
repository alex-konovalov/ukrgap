<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">






<!--
<?php
$ttl=$_POST["ttl"];
$f_name=$_POST["f_name"];
$m_name=$_POST["m_name"];
$l_name=$_POST["l_name"];
$aff1=$_POST["aff1"];
$aff2=$_POST["aff2"];
$post_addr=$_POST["post_addr"];
$eml1=$_POST["eml1"];
$eml2=$_POST["eml2"];
$fax=$_POST["fax"];
$pwp=$_POST["pwp"];
$sec=$_POST["sec"];
$ttatile=$_POST["ttatile"];
$abstract=$_POST["abstract"];
$info=$_POST["info"];

$msg1 ="Title: $ttl\r\nFirst Name: $f_name\r\nMiddle Name(s): $m_name\r\nLast Name: $l_name\r\nAffiliation 1: $aff1\r\nAffiliation 2: $aff2\r\nPostal address: $post_addr\r\nE-mail 1: $eml1\r\nE-mail 2: $eml2\r\nFax: $fax\r\nPersonal Web Page: $pwp\r\nSection: $sec\r\nTitle of suggested talk: $ttatile\r\nAbstract: $abstract\r\nAdditional information and comments: $info\r\n\r\n-----------------------------------\r\n\r\n<p>\r\n<i>$f_name $m_name $l_name</i> ($aff1)\r\n<br>$ttatile\r\n</p>\r\n\r\n-----------------------------------\r\n\r\n$f_name $m_name $l_name <$eml1>\r\n\r\n$f_name $m_name $l_name <$eml2>\r\n\r\n-----------------------------------\r\n\r\n
\item {\bf $l_name $f_name $m_name} ($aff1)\r\n    \\\\ \r\n     E-mail: $eml1, $eml2
\r\n\r\n-----------------------------------\r\n\r\n
$ttl $f_name $m_name $l_name \r\n    \\\\ \r\n $aff1 \r\n    \\\\ \r\n $post_addr";

$msg2 ="Dear $ttl $l_name,\r\n\r\nThank you very much for your interest in Ukrainian Mathematical Congress.
Please find below and carefully check your personal details filled into the registration form.\r\n\r\nSincerely yours,\r\nOrganizing Committee\r\nhttp://www.imath.kiev.ua/~congress2009/en/\r\n\r\n\r\n
Title: $ttl\r\nFirst Name: $f_name\r\nMiddle Name(s): $m_name\r\nLast Name: $l_name\r\nAffiliation 1: $aff1\r\nAffiliation 2: $aff2\r\nPostal address: $post_addr\r\nE-mail 1: $eml1\r\nE-mail 2: $eml2\r\nFax: $fax\r\nPersonal Web Page: $pwp\r\nSection: $sec\r\nTitle of suggested talk: $ttatile\r\nAbstract: $abstract\r\nAdditional information and comments: $info";

mail("congress2009@imath.kiev.ua", "congress-2009, Registration form of $ttl $l_name", 
$msg1, "From: $f_name $l_name <$eml1>\r\n");

mail($eml1, "Thank you for the registration", $msg2, "From: Ukr Math Congress <congress2009@imath.kiev.ua>\r\n"."Reply-To: congress2009@imath.kiev.ua\r\n");?>
-->


<html>
<head>
    <title>Form sent</title>
</head>

<body>
<p>Your registration is accepted. Please check your personal details in the e-mail, that was sent to your address <?php echo($eml1);?></p>
<a href="index.html" target="_top">Back to congress page</a>
</body>
</html>
