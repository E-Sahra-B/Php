<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Metin şifreleme Fonksiyonlari </h3>
    <?php
    $metin = "Esma Sahra Balcı"; //Şifrelenecek metin
    echo $metin . "<br>";
    echo "Md5 ile şifrelenmiş yazı : " . md5($metin); //32 hane 16'lık taban
    echo "<br>Sha1 ile şifrelenmiş yazı : " . sha1($metin); //40 hane 16'lık taban
    echo "<br>Md5 ve Sha1 ile 2 kere şifrelenmiş yazı : " . sha1(md5($metin)); //önce md5 sonra sha1 ile
    echo "<br>Crc32 ile şifrelenmiş yazı : " . crc32($metin);
    echo "<br>Base64 ile şifrelenmiş yazı : " . base64_encode($metin);
    $sifre = base64_encode($metin);
    echo "<br>Base64 ile şifrelenmiş yazının çözümü : " . base64_decode($sifre);
    ?>
</body>

</html>