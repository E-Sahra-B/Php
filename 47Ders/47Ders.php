<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çoklu Sinif Dosyalari ve Otomatik Yükleme</title>
</head>

<body>
    <h3>Çoklu Sinif Dosyalari ve Otomatik Yükleme</h3>

    <hr>
    <?php
    // require_once("ogrenci.php");
    // require_once("ogretmenler.php");
    require_once("siniflar.php");


    $ogrenciler = new Ogrenci;
    echo $ogrenciler->adSoyad . "<br>";

    $ogretmenler = new Ogretmenler;
    echo $ogretmenler->adSoyad . "<br>";

    $calisanlar = new Calisanlar;;
    echo $calisanlar->adSoyad . "<br>";

    ?>
</body>

</html>