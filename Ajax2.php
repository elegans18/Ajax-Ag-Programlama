<?php
require "db.php";

$ders_kod=$_POST['ders_kod'];
$ders_ad=$_POST['ders_ad'];
$ders_icerik=$_POST['ders_icerik'];

$sql = mysqli_query($baglantiNo,"UPDATE ders SET ders_kodu = '$ders_kod', ders_adi = '$ders_ad',dersicerik = '$ders_icerik' WHERE id='3'");

?>