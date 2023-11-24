<?php

include("baglan.php");

$adsoyad=$_POST["adsoyad"];
$mail=$_POST["mail"];
$kullaniciadi=$_POST["kullaniciadi"];
$sifre=$_POST["sifre"];

$ekle= "INSERT INTO uyeler ( adsoyad,mail,kullaniciadi,sifre )  VALUES ('$adsoyad','$mail','$kullaniciadi','$sifre')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Kayıt gerçekleştirildi.";
    echo "<meta http-equiv ='refresh' content = '2; url = ../uyegiris.php'/>";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}


?>