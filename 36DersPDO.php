<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ile PDO Yapisinin Kullanilmasi</title>
</head>

<body>
    <h3>PHP ile PDO Yapisinin Kullanilmasi</h3>
    <br>✯ PHP ile PDO İşlemleri
    <br>✯ PHP PDO ile Veritabanı Bağlantısı Kurma
    <br>✯ PHP PDO ile Veritabanına Kayıt Ekleme
    <br>✯ PHP PDO ile Veritabanında Kayıt Güncelleme
    <br>✯ PHP PDO ile Veritabanından Kayıt Silme
    <br>✯ PHP PDO ile Veritabanındaki Kayıtları Listeleme
    <hr>
    <?php

    //$baglan = new PDO("mysql:host=localhost;dbname=deneme", "Sahra", "1234");
    //$baglan->query("set charset set utf8"); //karakter seti tanımlaması
    //$baglan->exec("set names utf8");//başka bir karakter seti tanımlaması
    $baglan = new PDO("mysql:host=localhost;dbname=deneme;charset=utf8", "Sahra", "1234");
    $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Hata kontrol 

    try {
        $baglan = new PDO("mysql:host=localhost;dbname=deneme;charset=utf8", "Sahra", "1234");
        $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $baglan->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Sunucu Hatası: " . $e->getMessage());
    }


    //$sorgu = $baglan->query("select * from ogrenciler where id=2")->fetch(PDO::FETCH_ASSOC);

    //$sorgu = $baglan->query("select * from ogrenciler where id=2");
    //$satir = $sorgu->fetch(PDO::FETCH_ASSOC);//dizi olarak geri döndürme
    // if ($sorgu) {
    //     print_r($sorgu);
    // }
    //echo $sorgu["adSoyad"];
    //echo $satir["adSoyad"];
    // foreach ($satir as $veri) {
    //     echo $veri;
    // }

    // $satir = $sorgu->fetch(PDO::FETCH_NUM); //indise göre geri döndürme
    // echo $satir[1];

    // $satir = $sorgu->fetch(PDO::FETCH_OBJ); //nesne olarak geri döndürme
    // echo $satir->adSoyad;

    // $sorgu = $baglan->query("select * from ogrenciler", PDO::FETCH_ASSOC); //bütün diziyi getirme
    // foreach ($sorgu as $satir) {
    //     echo $satir["adSoyad"] . "<br>";
    // }

    //Kayıt sorgulama
    // $sorgu = $baglan->prepare("select * from ogrenciler where Durum=?"); //->fetch(PDO::FETCH_ASSOC);
    // $sorgu->fetch(PDO::FETCH_ASSOC);
    // $sorgu->execute(array("aktif"));
    // foreach ($sorgu as $satir) {
    //     echo $satir["adSoyad"] . "<br>"; //dizi sutun içinden durumu aktif olanların isimleri
    // }
    // echo $sorgu->rowCount(); //kaç kayıt geldiğini görmek için kullanılır

    // $cek = $baglan->prepare("SELECT * FROM kullanici WHERE kullaniciAdi =:kAdi");
    // $cek->execute(array('kAdi' => $_SESSION['adSoyad']));
    // $satir = $cek->fetch(PDO::FETCH_ASSOC);
    // extract($satir);
    //<?php echo $kullaniciAdi; ? >

    // $kAdi = $_SESSION['adSoyad'];
    // $cek = $baglan->prepare("SELECT * FROM kullanici WHERE kullaniciAdi =:kAdi");
    // $cek->execute(array('kAdi' => $kAdi));
    // $satir = $cek->fetch(PDO::FETCH_ASSOC);
    // extract($satir); //<?php echo $kullaniciAdi; ? >

    //kayıt Ekleme
    // $sorgu = $baglan->prepare("insert into ogrenciler values(?,?,?,?,?)");
    // $ekle = $sorgu->execute(array(NULL, "Esma Sahra Balcı", "12345678901", "12345678901", "aktif"));
    // if ($ekle) {
    //     $kayitNo = $baglan->lastInsertId();
    //     echo "$kayitNo Numarasıyla Kayıt eklendi";
    // }

    //Kayıt Güncelleme
    // $sorgu=$baglan->prepare("update ogrenciler set adSoyad='Esma Sahra Balcı' where id='2'");
    // $sorgu = $baglan->prepare("update ogrenciler set adSoyad=? where id=?");
    // $guncelle = $sorgu->execute(array("Esma Sahra Balcı", "2"));
    // if ($guncelle) {
    //     echo "Güncelleme Başarılı";
    // }
    // $sorgu = $baglan->prepare("update ogrenciler set adSoyad=?, telefon=? where id=?");
    // $guncelle = $sorgu->execute(array("Esma Sahra Balcı","1234567890", "2"));
    // if ($guncelle) {
    //     echo "Güncelleme Başarılı";
    // }


    //Kayıt Silme
    // $sorgu = $baglan->prepare("delete from ogrenciler where id=?");
    // $sil = $sorgu->execute(array(4));
    // if ($sil) {
    //     echo "Silme Başarılı";
    // }

    //veri tabanındakileri toplu olarak silme
    // $silHepsi = $baglan->exec("delete from ogrenciler");
    // echo "Toplam $silHepsi Kayıt silindi";

    ?>
</body>

</html>