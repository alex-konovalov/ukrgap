<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">






<!--
<?php
$ttl=$_POST["ttl"];
$l_name=$_POST["l_name"];
$f_name=$_POST["f_name"];
$m_name=$_POST["m_name"];
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

$msg1 ="�������� ������: $ttl\r\n�������: $l_name\r\n��'�: $f_name\r\n��-�������: $m_name\r\n�������� (���� ������): $aff1\r\n��������� ��������: $aff2\r\n������� ������: $post_addr\r\nE-mail: $eml1\r\n���������� E-mail: $eml2\r\n����: $fax\r\n����������� ���-�������: $pwp\r\n������: $sec\r\n����� ������: $ttatile\r\n��������: $abstract\r\n��������� ���������� �� ��������: 
$info\r\n\r\n-----------------------------------\r\n\r\n<p>\r\n<i>$f_name $l_name</i> ($aff1)\r\n<br>$ttatile\r\n</p>\r\n\r\n-----------------------------------\r\n\r\n$f_name $m_name $l_name <$eml1>\r\n\r\n$f_name $m_name $l_name <$eml2>\r\n\r\n-----------------------------------\r\n\r\n
\item {\bf $l_name $f_name $m_name} ($aff1)\r\n    \\\\ \r\n     E-mail: $eml1, $eml2
\r\n\r\n-----------------------------------\r\n\r\n
$l_name $f_name $m_name  \r\n    \\\\ \r\n $aff1 \r\n    \\\\ \r\n $post_addr";

$msg2 ="��������(��) ������!\r\n\r\n������ �� ���� ������� ����� ������ � ����������� ������������� �������. ����� �� �������� ���, �� �� ������ � ����������� �����: ���� �����, ������ �������� ��.\r\n�������� ���������� ���� ����������� �� ������� ���� ���������� ������.\r\n\r\n� �������,\r\n���������.\r\nhttp://www.imath.kiev.ua/~congress2009/\r\n\r\n\r\n�������� ������: $ttl\r\n�������: $l_name\r\n��'�: $f_name\r\n��-�������: $m_name\r\n�������� (���� ������): $aff1\r\n��������� ��������: $aff2\r\n������� ������: $post_addr\r\nE-mail: $eml1\r\n���������� E-mail: $eml2\r\n����: $fax\r\n����������� ���-�������: $pwp\r\n������: $sec\r\n����� ������: $ttatile\r\n��������: $abstract\r\n��������� ���������� �� ��������: $info";

mail("congress2009@imath.kiev.ua", "����������� ����� $f_name $l_name", $msg1, "From: $l_name $f_name $m_name <$eml1>\r\n");

mail($eml1, "������ �� ���������", $msg2, "From: Ukr Math Congress <congress2009@imath.kiev.ua>\r\n"."Reply-To: congress2009@imath.kiev.ua\r\n");?>
-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <meta name="Author" content="�������� ���������� ��� ������">
    <title>����������� ����� ��������</title>
</head>

<body>
<p>�� �������� ���� ����������� �����. ���� �����, �������� ���� ��� � ����������, ��� ����� ���� �������� �� ���� ������ <?php echo($eml1);?></p>
<a href="index.html" target="_top">����������� �� ������� ������� ��������</a>
</body>
</html>
