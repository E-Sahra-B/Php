<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ile CURL işlemleri</title>
</head>

<body>
    <h3>PHP ile CURL işlemleri</h3>
    <br>✯ PHP Curl Eklenti Kontrolü
    <br>✯ Curl ile Bir Web Sayfasını Kopyalama
    <br>✯ Curl ile Bir Web Sayfasını Kaydetme
    <br>✯ Curl Metotları (Get, Post, Put, Delete)
    <br>✯ Curl ile Get Metotunu Kullanarak Veri Gönderimi
    <br>✯ Curl ile Post Metotunu Kullanarak Veri Gönderimi
    <hr>
    <?php
    // if (extension_loaded('curl')) {
    //     echo "Aktif";
    // } else {
    //     echo "Pasif";
    // }

    // $curl = curl_init("https://google.com.tr"); //Başlat
    // $sonuc = curl_exec($curl); //Çalıştır
    // curl_close($curl); //Kapat
    // echo $sonuc;

    // $curl = curl_init(); //Başlat
    // curl_setopt($curl, CURLOPT_URL, "https://google.com.tr"); //Ayar1
    // $sonuc = curl_exec($curl); //Çalıştır
    // curl_close($curl); //Kapat
    // echo $sonuc;

    // //dosya içerisine yazdırmak
    // $dosya = fopen("test.html", "w");
    // $curl = curl_init(); //Başlat
    // curl_setopt($curl, CURLOPT_URL, "https://google.com.tr"); //Ayar1
    // curl_setopt($curl, CURLOPT_FILE, $dosya); //Ayar2
    // curl_exec($curl); //Çalıştır
    // curl_close($curl); //Kapat
    // fclose($dosya); //Dosya Kapat

    // //değişken veya dosya aktarmak 
    // $dosya = fopen("test.html", "w");
    // $curl = curl_init(); //Başlat
    // curl_setopt($curl, CURLOPT_URL, "https://google.com.tr"); //Ayar1
    // curl_setopt($curl, CURLOPT_FILE, $dosya); //Ayar2
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //Ayar3 1 tranfer edilsin anlamında
    // curl_setopt($curl, CURLOPT_HEADER, 0); //Ayar4 Header Bilgisi görünümüne karar verme 0 görünmesin
    // curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 0); //Ayar5 çekilen sayfadaki yönlendirmelere gitsin mi
    // //curl_setopt($curl, CURLOPT_USERAGENT, "spiderman"); //Ayar6 yönlendirme yaptığımız siteye bizi tanıtma
    // curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]); //Ayar6
    // curl_setopt($curl, CURLOPT_TIMEOUT, 10); //Ayar7 10 sn Yanıt verme süresini belirleme
    // curl_setopt($curl, CURLOPT_REFERER, "https://google.com.tr"); //Ayar8 belirli formları kabul etme
    // curl_exec($curl); //Çalıştır
    // curl_close($curl); //Kapat
    // fclose($dosya); //Dosya Kapat

    //veri gönderme get post put delete
    //google da esb arama $adres = "https://google.com.tr/search?q=EsmaSahraBALCI";
    //Get ile gönderim $adres = "http:localhost:8888/php/kontrol.php?adsoyad=EsmaSahraBALCI";
    $adres = "http:localhost:8888/php/kontrol.php"; //post ile gönderim
    $curl = curl_init(); //Başlat

    // curl_setopt($curl, CURLOPT_URL, $adres); //Ayar1
    curl_setopt($curl, CURLOPT_URL, urlencode($adres)); //Ayar1
    curl_setopt($curl, CURLOPT_FILE, $dosya); //Ayar2
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //Ayar3
    curl_setopt($curl, CURLOPT_POST, 1); //Post ile gönderim için kullanılıyor
    curl_setopt($curl, CURLOPT_POSTFIELDS, "ad=esma sahra&soyad=balci"); //post ile veri gönderimi

    $sonuc = curl_exec($curl); //Çalıştır
    curl_close($curl); //Kapat
    echo $sonuc;

    ?>
</body>

</html>