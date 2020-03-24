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

$msg1 ="Науковий ступінь: $ttl\r\nПрізвище: $l_name\r\nІм'я: $f_name\r\nПо-батькові: $m_name\r\nУстанова (місце роботи): $aff1\r\nДодаткова установа: $aff2\r\nПоштова адреса: $post_addr\r\nE-mail: $eml1\r\nДодатковий E-mail: $eml2\r\nФакс: $fax\r\nПерсональна веб-сторінка: $pwp\r\nСекція: $sec\r\nНазва доповіді: $ttatile\r\nАбстракт: $abstract\r\nДодаткова інформація та коментарі: 
$info\r\n\r\n-----------------------------------\r\n\r\n<p>\r\n<i>$f_name $l_name</i> ($aff1)\r\n<br>$ttatile\r\n</p>\r\n\r\n-----------------------------------\r\n\r\n$f_name $m_name $l_name <$eml1>\r\n\r\n$f_name $m_name $l_name <$eml2>\r\n\r\n-----------------------------------\r\n\r\n
\item {\bf $l_name $f_name $m_name} ($aff1)\r\n    \\\\ \r\n     E-mail: $eml1, $eml2
\r\n\r\n-----------------------------------\r\n\r\n
$l_name $f_name $m_name  \r\n    \\\\ \r\n $aff1 \r\n    \\\\ \r\n $post_addr";

$msg2 ="Шановний(на) колего!\r\n\r\nДякуємо за Ваше бажання взяти участь в Українському математичному конгресі. Нижче Ви знайдете дані, які Ви внесли в реєстраційну форму: будь ласка, уважно перевірте їх.\r\nПодальша інформація буде надсилатися на вказану Вами електронну адресу.\r\n\r\nЗ повагою,\r\nоргкомітет.\r\nhttp://www.imath.kiev.ua/~congress2009/\r\n\r\n\r\nНауковий ступінь: $ttl\r\nПрізвище: $l_name\r\nІм'я: $f_name\r\nПо-батькові: $m_name\r\nУстанова (місце роботи): $aff1\r\nДодаткова установа: $aff2\r\nПоштова адреса: $post_addr\r\nE-mail: $eml1\r\nДодатковий E-mail: $eml2\r\nФакс: $fax\r\nПерсональна веб-сторінка: $pwp\r\nСекція: $sec\r\nНазва доповіді: $ttatile\r\nАбстракт: $abstract\r\nДодаткова інформація та коментарі: $info";

mail("congress2009@imath.kiev.ua", "Реєстраційна форма $f_name $l_name", $msg1, "From: $l_name $f_name $m_name <$eml1>\r\n");

mail($eml1, "Дякуємо за реєстрацію", $msg2, "From: Ukr Math Congress <congress2009@imath.kiev.ua>\r\n"."Reply-To: congress2009@imath.kiev.ua\r\n");?>
-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <meta name="Author" content="Інститут математики НАН України">
    <title>Реєстраційну форму надіслано</title>
</head>

<body>
<p>Ми отримали Вашу реєстраційну форму. Будь ласка, перевірте Ваші дані в повідомленні, яке щойно було надіслано на Вашу адресу <?php echo($eml1);?></p>
<a href="index.html" target="_top">Повернутись до головної сторінки конгресу</a>
</body>
</html>
