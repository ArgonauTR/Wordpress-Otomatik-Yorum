<?php

//Sistem Şifresi Burada Tanımlanıyor.

$sifre="12345";

//Veritabanı bağlantısı yapılıyor.
$veri_tabani_adi="wordpress";
$veri_tabani_kullanicisi="root";
$veri_tabani_sifresi="";

try {
	$db=new PDO("mysql:host=localhost;dbname=$veri_tabani_adi;charset=utf8",$veri_tabani_kullanicisi,$veri_tabani_sifresi);
}catch(PDOException $e){
	echo $e->getMessage();
}
// Veritabanı bağlandı


?>