<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Örnek: CSV Dosyasi Oluşturma ve Okuma</title>
</head>

<body>
    <h3>Örnek: CSV Dosyasi Oluşturma ve Okuma</h3>

    <?php
    //csv dosya oluşturma
    // $dosya = "isimler.csv";
    // touch($dosya);

    ////CSV DOSYASI OLUŞTURUP İÇİNE VERİ EKLEME
    $isimler = array("Mehmet", "Fatih", "Zehra", "Metehan");
    touch("isimler1.csv");
    $dosya1 = fopen("isimler1.csv", "wbt");
    foreach ($isimler as $isim) {
        fwrite($dosya1, "$isim;");
    }
    fclose($dosya1);

    ////CSV DOSYASI ÇAĞIRIP İÇİNDEKİ VERİ LİSTELEME
    $dosya1 = fopen("isimler1.csv", "rbt");
    while (!feof($dosya1)) {
        // $satir = fgetcsv($dosya1, filesize("isimler1.csv"), ";"); //Çalışmadı
        //$satir = fgetcsv($dosya1, 4096, ";"); // çalıştı
        $satir = fgetcsv($dosya1, 0, ";");
    }
    foreach ($satir as $icerik) {
        echo "$icerik<br>";
    }
    fclose($dosya1);
    ?>
</body>

</html>