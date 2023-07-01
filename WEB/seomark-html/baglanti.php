<?php
$baglanti=@mysqli_connect("localhost","root","24143242","web");
if($baglanti)
{
//echo "veri tabanına bağlandı";
}
else
{
echo "veri tabanına bağlanamadı";
}

?>