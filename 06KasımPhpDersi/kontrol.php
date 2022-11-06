<?php
//require_once ('');
require_once 'fonksiyon.php';

//$adSoyad = $_POST["adsoyad"];
//$adSoyad = strip_tags($_POST["adsoyad"]);
//$email = $_POST["email"];
//$telefon = $_POST["telefon"];
$adSoyad = guvenlik($_POST["adsoyad"]);
$email = guvenlik($_POST["email"]);
$telefon = guvenlik($_POST["telefon"]);

//echo "$adSoyad - $email - $telefon";
//var_dump($_POST);//post ile gelenleri göster
//if (is_empty()) boş mu

//echo mb_strlen($adSoyad);
//is_empty($adSoyad)
//strlen($adSoyad)<=0 ;
//$adSoyad=="";

if ($adSoyad == '' || $email == '' || strlen($telefon) < 10) {
    echo "<script>
alert('Ad Soyad, Email veya Telefon Hatalı!');
window.top.location='index.php';
</script>";
    die();
}

$dosya = fopen("rehber.txt", "abt");
//fwrite($dosya, "$adSoyad | $email | $telefon");
$sonuc = fwrite($dosya, "$adSoyad | $email | $telefon\n");
fclose($dosya);

//if ($sonuc==true) {
if ($sonuc) {
    echo "<script>
    alert('Başarılı : $adSoyad Kayıt edildi');
    window.top.location='index.php';
    </script>";
} else {
    echo "<script>
    alert('Hata : $adSoyad eklenmedi');
    window.top.location='index.php';
    </script>";
}
