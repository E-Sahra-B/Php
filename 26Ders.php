<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizin işlemleri</title>
</head>

<body>
    <h3>Dizin işlemleri</h3>
    <br>✯ PHP ile Dizin Oluşturma (Mkdir)
    <br>✯ PHP ile Dizin İzinleri (Chmod)
    <br>✯ PHP ile Dizin İzinleri (Opendir, Closedir)
    <br>✯ PHP ile Dizin Listeleme (Readdir, Scandir)
    <br>✯ PHP ile Dizin Silme (Rmdir)
    <br>✯ PHP ile Dizin Kopyalama (Rename)
    <br>✯ PHP ile Dizin Adı Değiştirme (Rename)
    <br>✯ PHP ile Dizin İçerik Kontrolü (Is_file, Is_dir)
    <hr>
    <h4>KULLANICI YETKİLERİ (İZİNLER)</h4>
    <table>
        <tr>
            <th>Kip</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>0</td>
            <td>Etkisiz, Hiçbir izin yok</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Yalnızca çalıştırma izni</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Yalnızca yazma izni</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Çalıştırma ve yazma izni</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Yalnızca okuma izni</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Çalıştırma ve okuma izni</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Yazma ve okuma izni</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Tüm izinler, Tam yetkili</td>
        </tr>

    </table>
    <?php
    // 0 birincisi sekizlik sayı sistemini, 
    // 7 ikincisi sahip (user) yetkisini,
    // 5 üçüncüsü grup (group) yetkisini ve 
    // 5 dördüncüsü ise herkes (world) yetkisini simgelemektedir.
    //mkdir("deneme", 0755);

    //DİZİN AÇMA VE KAPATMA
    //$dizin = opendir("deneme1"); //dizin açma işlemi
    //chmod($dizin, 0755); //yetki tanımlama
    //closedir($dizin); //dizin kapatma işlemi


    //DİZİN İÇERİĞİNİ LİSTELEME
    //if ($dizin = opendir("deneme")) { // Dizin mevcutsa dizini açma
    //    while (($dosya = readdir($dizin))) { // Döngü ile dizin listeleme
    //        echo "$dosya <br>"; // Ekrana yazdırma
    //    }
    //    closedir($dizin); // Dizin kapatma
    //}

    //$dizin = scandir("deneme"); // Dizin listeleme
    //foreach ($dizin as $icerik) { // Dizin içeriği için döngü oluşturma
    //    echo "$icerik <br>"; // Ekrana yazdırma
    //}

    //$dizin = "deneme/";
    //$listele = scandir("deneme"); // Dizin listeleme
    //foreach ($listele as $icerik) { // Dizin içeriği için döngü oluşturma
    //    if (is_file($dizin . $icerik)) { // Eğer dosya ise
    //        echo "Dosya: $icerik <br>"; // Ekrana yazdırma
    //    }
    //    if (is_dir($dizin . $icerik)) { // Eğer dizin ise
    //        echo "Dizin: $icerik <br>"; // Ekrana yazdırma
    //    }
    //}

    //DİZİN ADINI DEĞİŞTİRME
    //rename("deneme", "denemeDegis"); // Dizin adını değiştirme
    //rename("deneme/Yeni klasör", "deneme/deneme2");

    //rename("deneme/deneme2/Yeni klasör", "deneme/tasi/Yeni klasör"); // Dizin taşıma

    //DİZİN SİLME
    //rmdir("deneme/tasi/Yeni klasör"); // Dizin silme
    //if (rmdir("deneme/tasi/Yeni klasör")) {
    //    echo "test dizini silindi";
    //}
    ?>
</body>

</html>