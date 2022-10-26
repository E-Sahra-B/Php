<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h3>Veri Türleri, Değişkenler ve Sabitler</h3>
        <hr>
        <h4>Veri Türleri</h4>
        INTEGER (Tam Sayı)
        <br>FLOAT , DOUBLE(Ondalıklı sayılar) . ile ayrılıyor
        <br>STRING(Metin)
        <br>BOOLEAN(Mantıksal) true false
        <br>ARRAY(Dizi)
        <br>OBJECT(Nesne)
        <hr>
        <h4>Değişkenler</h4>
        $ ile başlar
        <br>Türkçe karakter, boşluk ve php özel isimler kullanılmaz.
        <br>Sayı ile başlayamaz
        <br>veri türünü belirtmeye gerek yoktur
        <br>Tür dönüşümlerine gerek yoktur.
        <br>Metin string türü için ("")tırnak kullanılmalıdır.
        <br>double ve float için virgul değil nokta kullanılmaktadır.
        <hr>
        <h4>Sabitler</h4>
        Sabitler bir kere tanımlanır ve değiştirilemezler.
        <br>define("pi","3.14");
        <br>echo (pi);
        <?php
        $degisken1 = 33;
        $degisken2 = 11.11;
        $degisken3 = "Esma Sahra Balcı";
        echo "<hr><br>$degisken1 - $degisken2 - $degisken3<br>";
        echo '$degisken1 - $degisken2 - $degisken3 <br> Tek tırnak kullanılınca değişken içeri okunmaz';
        define("AdSoyad", "Esma Sahra Balcı");
        echo "
        <br>
        Sayı 1 : $degisken1 <br>
        Sayı 2 : $degisken2 <br>
        İsim   :" . (AdSoyad) . "<br>";
        ?>
    </center>
</body>

</html>