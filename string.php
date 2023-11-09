<?php 
//$mesaj= ' my name\'s Nurcan çek';
$ad="Nurcan";
$soyad="Çek";
$yas=23;
$mesaj="Merhaba ben $ad $soyad $yas yaşındayım";

echo $mesaj."<br>";
echo $mesaj[0]."<br>"; #m
echo $mesaj[1]."<br>"; #n

echo strlen($mesaj)."<br>";
#40 karakter
echo str_word_count($mesaj)."<br>"; # 8 kelime
echo strtolower($mesaj)."<br>"; # küçük harfe çevirir
echo strtoupper($mesaj)."<br>"; # büyük harfe çevirir
echo ucfirst($mesaj)."<br>"; # ilk harfi büyük yapar

echo  str_replace(["Nurcan", "38"], ["Selim", "23"], $mesaj)."<br>"; # BAŞ HARFİ BÜYÜK HARFE ÇEVİRİR
?>
 