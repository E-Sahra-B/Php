<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Örnek: Öğrenci Geçti/Kaldi Uygulamasi</h3>
    <?php
    $ogrenciler = array(
        array("adSoyad" => "Mehmet", "not1" => "60", "not2" => "70"),
        array("adSoyad" => "Ahmet", "not1" => "80", "not2" => "50"),
        array("adSoyad" => "Zeynep", "not1" => "40", "not2" => "50")
    );
    foreach ($ogrenciler as $ogrenci) {
        $ortalama = ($ogrenci['not1'] + $ogrenci['not2']) / 2;
        if ($ortalama >= 50) {
            $sonuc = "Geçti";
        } else {
            $sonuc = "kaldi";
        }
        echo "Adı Soyadı : " . $ogrenci["adSoyad"] . "<br>";
        echo "Vize : " . $ogrenci["not1"] . "<br>";
        echo "Final : " . $ogrenci["not2"] . "<br>";
        echo "Ortalama : " . $ortalama . "<br>";
        echo "Sonuç : " . $sonuc . "<br>";
        echo "<br><hr>";
    }
    ?>
</body>

</html>