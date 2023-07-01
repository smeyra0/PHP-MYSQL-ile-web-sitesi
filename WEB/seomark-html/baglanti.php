<?php
$baglanti=@mysqli_connect("localhost","","","");
if($baglanti)
{
//echo "veri tabanına bağlandı";
}
else
{
echo "veri tabanına bağlanamadı";
}

?>
