<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ile JSON işlemleri</title>
</head>

<body>
    <h3>PHP ile JSON işlemleri</h3>
    <br>✯ JSON Dosya ve Kod Yapısı
    <br>✯ JSON Sınıf ve Dizi Formatları
    <br>✯ PHP ile JSON Dosyası Oluşturma
    <br>✯ PHP ile JSON Dosyasını Okuma
    <br>✯ JSON İçeriğini Ekrana Yazdırma
    <br>✯ JSON İçeriğini PHP Nesnesine Çevirme
    <br>✯ JSON İçeriğini PHP Dizisine Çevirme
    <hr>
    <?php
    //Nesne Yapısı anahtar ve deger eşleşmesi 
    // {
    //     "no" :1,
    //     "ad" :"Esma Sahra",
    //     "soyad" :"Balcı"
    // }

    //Array (Dizi) yapısı
    // ["esma", "sahra", "balcı"]

    //Array ve object yapısı
    // {
    //     "no" :1,
    //     "ad" :"Esma Sahra",
    //     "soyad" :"Balcı",
    //     "durum" :true,
    //     "adresler" : [
    //         {"tur" : "Ev 1", "adres" : "üsküdar/istanbul"},
    //         {"tur" : "Ev 2", "adres" : "ümraniye/istanbul"},
    //         {"tur" : "Ev 3", "adres" : "beşiktaş/istanbul"}
    //     ]
    // }

    //encode json formatında dönüştürücüsü
    //decode json formatı çözücüsü

    ////dizi den json yapısı oluşturma
    // $dizi = array("no" => "1", "ad" => "Esma Sahra", "soyad" => "Balcı");
    // $json = json_encode($dizi, JSON_UNESCAPED_UNICODE); //json formati yapma ve türkçe karakter desteği
    // echo $json;//{"no":"1","ad":"Esma Sahra","soyad":"Balcı"}

    ////Nesneden json yapısı oluşturma
    // $nesne->no = "1";
    // $nesne->ad = "Esma Sahra";
    // $nesne->soyad = "Balcı";
    // $json = json_encode($nesne, JSON_UNESCAPED_UNICODE);
    // echo $json; //{"no":"1","ad":"Esma Sahra","soyad":"Balcı"}

    ////json yapısını php ye dönüştürme
    // $json = '{"no":"1","ad":"Esma Sahra","soyad":"Balcı"}';
    // $veri = json_decode($json);
    // // var_dump($veri);
    // // object(stdClass)[1]
    // // public 'no' => string '1' (length=1)
    // // public 'ad' => string 'Esma Sahra' (length=10)
    // // public 'soyad' => string 'Balcı' (length=6)
    // echo $veri->no . "<br>";// 1
    // echo $veri->ad . "<br>";//Esma Sahra
    // echo $veri->soyad . "<br>";//Balcı

    ////json yapısını dizi dönüştürme
    // $json = '{"no":"1","ad":"Esma Sahra","soyad":"Balcı"}';
    // $veri = json_decode($json, true);
    // // var_dump($veri);
    // // array (size=3)
    // // 'no' => string '1' (length=1)
    // // 'ad' => string 'Esma Sahra' (length=10)
    // // 'soyad' => string 'Balcı' (length=6)
    // echo $veri["no"] . "<br>"; // 1
    // echo $veri["ad"] . "<br>"; //Esma Sahra
    // echo $veri["soyad"] . "<br>"; //Balcı

    // //önce dizi yapısına gönüştürme sonra Döngüyle yazdırma
    // $json = '{"no":"1","ad":"Esma Sahra","soyad":"Balcı"}';
    // $veri = json_decode($json, true);
    // foreach ($veri as $anahtar => $deger) {
    //     echo "$anahtar = $deger<br>";
    // }
    // // no = 1
    // // ad = Esma Sahra
    // // soyad = Balcı

    // //önce nesne yapısına gönüştürme sonra Döngüyle yazdırma
    $json = '{"no":"1","ad":"Esma Sahra","soyad":"Balcı"}';
    $veri = json_decode($json, false);
    foreach ($veri as $anahtar => $deger) {
        echo "$anahtar = $deger<br>";
    }
    // no = 1
    // ad = Esma Sahra
    // soyad = Balcı

    ?>
</body>

</html>