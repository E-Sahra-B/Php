<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ile XML işlemleri</title>
</head>

<body>
    <h3>PHP ile XML işlemleri</h3>
    <br>✯ XML Dosya ve Kod Yapısı
    <br>✯ Manuel XML Dosyası Oluşturma
    <br>✯ PHP ile XML Dosyası Oluşturma
    <br>✯ PHP ile XML Dosyasını Okuma
    <br>✯ XML İçeriğini Ekrana Yazdırma
    <br>✯ XML İçeriğini PHP Dizisine Çevirme
    <hr>

    <?php
    // $xml = new DOMDocument("1.0", "UTF-8"); //<?xml version="1.0" encoding="UTF-8" ? >
    // $ogrenciler = $xml->createElement("ogrenciler"); //<ogrenciler></ogrenciler>
    // $xml->appendChild($ogrenciler); //sayfaya ekleme

    // // $ogrenci = $xml->createElement("ogrenci"); //<ogrenci></ogrenci>
    // // $no = $xml->createElement("no", "1"); //ogrenci içerisine veri etiket ve veri ekleme
    // // $ad = $xml->createElement("ad", "esma");
    // // $soyad = $xml->createElement("soyad", "balcı");//<ogrenciler><ogrenci><no>1</no><ad>esma</ad><soyad>balcı</soyad></ogrenci></ogrenciler>
    // // $ogrenci->appendChild($no);
    // // $ogrenci->appendChild($ad);
    // // $ogrenci->appendChild($soyad);

    // // $ogrenci = $xml->createElement("ogrenci");
    // // $no = $xml->createAttribute("no");
    // // $no->value = "1";
    // // $ad = $xml->createAttribute("ad");
    // // $ad->value = "esma";
    // // $soyad = $xml->createAttribute("soyad");
    // // $soyad->value = "balcı"; //<ogrenciler><ogrenci no="1" ad="esma" soyad="balcı"/></ogrenciler>
    // // $ogrenci->appendChild($no);
    // // $ogrenci->appendChild($ad);
    // // $ogrenci->appendChild($soyad);


    // for ($i = 1; $i <= 20; $i++) {
    //     $ogrenci = $xml->createElement("ogrenci");
    //     $no = $xml->createAttribute("no");
    //     $no->value = $i;
    //     $ad = $xml->createAttribute("ad");
    //     $ad->value = "esma $i";
    //     $soyad = $xml->createAttribute("soyad");
    //     $soyad->value = "balcı $i"; //<ogrenciler><ogrenci no="1" ad="esma" soyad="balcı"/></ogrenciler>
    //     $ogrenci->appendChild($no);
    //     $ogrenci->appendChild($ad);
    //     $ogrenci->appendChild($soyad);
    //     $ogrenciler->appendChild($ogrenci);   //kök etiket ekleme
    // }

    // $xml->formatOutput = true; //kod okunaklığı alt alta

    // $xml->save("ogrenciler.xml"); //ogrenciler isimli xml kaydet
    // //<ogrenciler><ogrenci><no>1</no><ad>esma</ad><soyad>balcı</soyad></ogrenci></ogrenciler>

    // echo $xml->saveXML(); //php de görünlemek için
    // //1esmabalcı

    $xml = new DOMDocument();
    $xml->load("ogrenciler.xml");
    echo $xml->saveHTML();
    ?>
</body>

</html>