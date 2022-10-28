<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Metin işleme Fonksiyonlari</h3>
    <h4>KARAKTER SAYISINI ÖĞRENME</h4>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>strlen</td>
            <td>Karakter sayısını bulur</td>
        </tr>
        <tr>
            <td>mb_strlen</td>
            <td>Karakter sayısını bulur (Türkçe destekli)</td>
        </tr>
    </table>
    <hr>
    <h4>BOŞLUK VEYA KARAKTER TEMİZLEME</h4>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>ltrim</td>
            <td>Metnin solundaki boşlukları temizler</td>
        </tr>
        <tr>
            <td>rtrim</td>
            <td>Metnin sağındaki boşlukları temizler</td>
        </tr>
        <tr>
            <td>trim</td>
            <td>Metnin hem solundaki, hem de sağındaki boşlukları temizler</td>
        </tr>
    </table>
    <hr>
    <h4>HARF BÜYÜKLÜKLERİNİ DEĞİŞTİRME</h4>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>strtolower</td>
            <td>Tüm harfleri küçük harfe dönüştürür</td>
        </tr>
        <tr>
            <td>strtoupper</td>
            <td>Tüm harfleri büyük harfe dönüştürür</td>
        </tr>
        <tr>
            <td>ucfirst</td>
            <td>Sadece ilk harfi büyük harfe dönüştürür</td>
        </tr>
        <tr>
            <td>lcfirst</td>
            <td>Sadece ilk harfi küçük harfe dönüştürür</td>
        </tr>
        <tr>
            <td>ucwords</td>
            <td>Tüm kelimelerin ilk harflerini büyük harfe dönüştürür</td>
        </tr>
        <tr>
            <td>mb_strtolower</td>
            <td>Tüm harfleri küçük harfe dönüştürür (Türkçe destekli)</td>
        </tr>
        <tr>
            <td>mb_strtoupper</td>
            <td>Tüm harfleri büyük harfe dönüştürür (Türkçe destekli)</td>
        </tr>
    </table>
    <hr>
    <h4>METİN İÇİNDE ARAMA VE KONUM BULMA</h4>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>strpos</td>
            <td>Metin içerisinde arama ve konum bulma (Küçük-büyük harf duyarlı)</td>
        </tr>
        <tr>
            <td>stripos</td>
            <td>Metin içerisinde arama ve konum bulma (Küçük-büyük harf duyarsız)</td>
        </tr>
        <tr>
            <td>strrpos</td>
            <td>Metin içerisinde arama ve son konumu bulma (Küçük-büyük harf duyarlı)</td>
        </tr>
        <tr>
            <td>strripos</td>
            <td>Metin içerisinde arama ve son konumu bulma (Küçük-büyük harf duyarsız)</td>
        </tr>
        <tr>
            <td>mb_strpos</td>
            <td>Metin içerisinde arama ve konum bulma (Türkçe destekli)</td>
        </tr>
        <tr>
            <td>mb_stripos</td>
            <td>Metin içerisinde arama ve konum bulma (Türkçe destekli)</td>
        </tr>
        <tr>
            <td>strstr</td>
            <td>Metin içerisinde arama ve sonraki kısmı bulma (Küçük-büyük harf duyarlı)</td>
        </tr>
        <tr>
            <td>substr_count</td>
            <td>Metin içerisinde arama ve kaç defa kullanıldığını hesaplama</td>
        </tr>
    </table>
    <hr>
    <h4>HTML İŞARETLERİNİ TEMİZLEME</h4>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>htmlentities</td>
            <td>HTML işaretlerini ASCII koduna dönüştürür</td>
        </tr>
        <tr>
            <td>htmlspecialchars</td>
            <td>HTML işaretlerini ASCII koduna dönüştürür</td>
        </tr>
    </table>
    <hr>
    <?php
    $metin = "esma Sahra Balcı";
    $turkceUzunluk = mb_strlen($metin, "utf-8");
    echo $turkceUzunluk . "<br>";

    $parcaAl = mb_substr($metin, 5, 5, "utf-8");
    echo $parcaAl . "<br>";

    $ilkHarfBuyuk = ucwords($metin);
    echo $ilkHarfBuyuk . "<br>";

    $bul = strstr($metin, "at");
    echo $bul == true ? "Bulundu" : "Metin Bulunamadı";
    echo "<br>";

    $bulDegistir = str_replace("Balcı", "Soyadı Değişti", $metin);
    $butunBosluklariSil = str_replace(" ", "", $metin);
    echo $bulDegistir . "<br>";

    $metin2 = "<b>Esma Sahra Balcı</b>";
    $htmlKodAsciiCevir = htmlentities($metin2);
    echo $htmlKodAsciiCevir . "<br>";

    $etiketleriTemizle = strip_tags($metin2);
    echo $etiketleriTemizle . "<br>";

    $metin3 = "Esma Sahra'nın";
    $tirnakEtkisiz = addslashes($metin3);
    $tirnakEtkili = stripslashes($metin3);
    echo $tirnakEtkisiz . "<br>" . $tirnakEtkili . "<br>";

    $metin4 = "Esma\nSahra\nBalcı";
    $lnBrDonusturme = nl2br($metin4);
    echo $lnBrDonusturme . "<br>";

    $bosluklardanBolDiziYap = explode(" ", $metin);
    foreach ($bosluklardanBolDiziYap as $eleman) {
        echo  $eleman . "<br>";
    }

    $diziBirlestir = implode("-", $bosluklardanBolDiziYap);
    echo $diziBirlestir;





    ?>
</body>

</html>