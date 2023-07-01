<?php

include("baglanti.php");
session_start();

if (!isset($_SESSION['user']))
{
$_SESSION['user'] = $_POST["user"];
}
if (!isset($_SESSION['pass']))
{
$_SESSION['pass'] = $_POST["pass"];
}

$sql="select * FROM kisiler where eposta='$_SESSION[user]' and sifre='$_SESSION[pass]';";
$sorgu= @mysqli_query($baglanti,$sql);
if (@$sonuc=mysqli_fetch_array($sorgu))

{
$_SESSION["login"] = "true";
$_SESSION["user_id"] = $sonuc[kisi_id];

header("Location:giris.php");
}
else
{
echo "Kullanıcı Adı veya Şifre Hatalı!";
header("Refresh: 2; url=logout.php");
}

?>