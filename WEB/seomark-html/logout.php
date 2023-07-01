<?php
session_start();

session_destroy();

echo "Ana Sayfaya Yönlendiriliyorsunuz";

header("Refresh: 2; url=giris.php");

?>