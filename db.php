<?php
	$sunucu='127.0.0.1';
	$veritabani='dersler';
	$kullaniciAdi='root';
	$sifre=''; 
	//$baglantiNo= mysqli_connect($sunucu, $kullaniciAdi, $sifre, $veritabani);
	$baglantiNo = new mysqli($sunucu, $kullaniciAdi, $sifre, $veritabani);
	$baglantiNo->set_charset("utf8");
	mysqli_select_db($baglantiNo,$veritabani);
    if($baglantiNo)
	{
		//echo "Veritabanı bağlantısı başarılı.";
	}
	else 
	{
		//echo "Veritabanı bağlantısı başarısız.";
	}
?>