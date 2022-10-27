<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Diziler, Dizi işlemleri ve Dizi Fonksiyonlari</h3>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Sıralama Açıklama</th>
        </tr>
        <tr>
            <td>unset</td>
            <td>Dizilerden eleman silmek</td>
        </tr>
        <tr>
            <td>array_reverse</td>
            <td>Dizi içerisindeki elemanları tersine çevirme</td>
        </tr>
        <tr>
            <td>array_unshift</td>
            <td>Dizinin başına eleman ekler</td>
        </tr>
        <tr>
            <td>array_shift</td>
            <td>Dizinin ilk elemanını siler</td>
        </tr>
        <tr>
            <td>array_push</td>
            <td>Dizinin sonuna eleman ekler</td>
        </tr>
        <tr>
            <td>array_pop</td>
            <td>Dizinin sonuncu elemanını siler</td>
        </tr>
        <tr>
            <td>asort</td>
            <td>Değere göre, Küçükten büyüğe Anahtar - Değer ilişkisi korunur</td>
        </tr>
        <tr>
            <td>arsort</td>
            <td>Değere göre, Büyükten küçüğe Anahtar - Değer ilişkisi korunur</td>
        </tr>
        <tr>
            <td>natcasesort</td>
            <td>Değere göre, Doğal (Harf duyarsız) Anahtar - Değer ilişkisi korunur</td>
        </tr>
        <tr>
            <td>natsort</td>
            <td>Değere göre, Doğal Anahtar - Değer ilişkisi korunur</td>
        </tr>
        <tr>
            <td>sort</td>
            <td>Değere göre, Büyükten küçüğe Anahtar - Değer ilişkisi bozulur</td>
        </tr>
        <tr>
            <td>rsort</td>
            <td>Değere göre, Küçükten büyüğe Anahtar - Değer ilişkisi bozulur</td>
        </tr>
        <tr>
            <td>shuffle</td>
            <td>Değere göre, Rastgele Anahtar - Değer ilişkisi bozulur</td>
        </tr>
        <tr>
            <td>ksort</td>
            <td>Anahtara göre, Küçükten büyüğe Anahtar - Değer ilişkisi korunur</td>
        </tr>
        <tr>
            <td>krsort</td>
            <td>Anahtara göre, Büyükten küçüğe Anahtar - Değer ilişkisi korunur</td>
        </tr>
        <tr>
            <td>array_multisort</td>
            <td>Anahtara göre, Çok boyutlu diziler Anahtar - Değer ilişkisi korunur</td>
        </tr>
        <tr>
            <td>uasort</td>
            <td>Değere göre, Kullanıcı tanımlı Anahtar - Değer ilişkisi korunur</td>
        </tr>
        <tr>
            <td>uksort</td>
            <td>Anahtara göre, Kullanıcı tanımlı Anahtar - Değer ilişkisi korunur</td>
        </tr>
        <tr>
            <td>usort</td>
            <td>Değere göre, Kullanıcı tanımlı Anahtar - Değer ilişkisi bozulur</td>
        </tr>
        <tr>
            <td>count</td>
            <td>Dizideki toplam eleman sayısını hesaplar</td>
        </tr>
        <tr>
            <td>sizeof</td>
            <td>Dizideki toplam eleman sayısını hesaplar</td>
        </tr>
        <tr>
            <td>array_count_values</td>
            <td>Dizideki değerlerin rastlanma sıklığını hesaplar</td>
        </tr>
        <tr>
            <td>array_product</td>
            <td>Dizideki nümerik değerlerin çarpımını hesaplar</td>
        </tr>
        <tr>
            <td>array_sum</td>
            <td>Dizideki nümerik değerlerin toplamını hesaplar</td>
        </tr>
        <tr>
            <td>array_merge</td>
            <td>Birden fazla sayıda diziyi birleştirerek yeni bir dizi oluşturmak</td>
        </tr>
        <tr>
            <td>array_intersect</td>
            <td>Birden fazla sayıda diziyi karşılaştırarak ortak olan elemanları bulmak</td>
        </tr>
        <tr>
            <td>array_search</td>
            <td>Dizide değer araması yapar ve varsa ilk indis değerini bulur</td>
        </tr>
        <tr>
            <td>in_array</td>
            <td>Dizide bir değerin olup olmadığını bulur </td>
        </tr>
        <tr>
            <td>array_keys</td>
            <td>Dizide değer araması yapar ve varsa tüm indis değerlerini bulur</td>
        </tr>
        <tr>
            <td>array_key_exists</td>
            <td>Dizide anahtar araması yapar ve varsa indis değerini bulur </td>
        </tr>
        <tr>
            <td>array_diff</td>
            <td>DİZİLERİN FARKLI ELEMANLARINI BULMA</td>
        </tr>
        <tr>
            <td>array_unique</td>
            <td>DİZİDEKİ TEKRAR EDEN ELEMANLARI SİLME</td>
        </tr>
        <tr>
            <td>array_rand</td>
            <td>DİZİDEN RASTGELE ELEMAN ALMA</td>
        </tr>
        <tr>
            <td>array_slice</td>
            <td>DİZİDEN KESİT ALMA</td>
        </tr>
    </table>
    <?php
    $ogrenciler = array("Ali", "Ahmet", "Ayşe", "Seda");
    echo "<pre>";
    print_r($ogrenciler);
    echo "</pre>";
    // unset($ogrenciler[1]); //1.nolu indisdeki ahmet'i siler
    // unset($ogrenciler[1], $ogrenciler[3]); //1.nolu ve3.nolu indisdeki ahmet'i ve seda'yı siler
    foreach ($ogrenciler as $ogrenci) {
        echo $ogrenci . "<br>";
    }
    //$ogrenciler = array(); //Aynı isimli boş dizi tanımlamlanırsa içerdekilerin tamamı silinir
    // $ogrenciler2 = array_reverse($ogrenciler); //Diziyi ters çevirir
    // $basaEkle = array_unshift($ogrenciler, "Mehmet", "zeynep");
    // $sonaEkle = array_push($ogrenciler, "Mehmet", "zeynep");
    // $ilkElemanSil = array_shift($ogrenciler);
    // $sonElemanSil = array_pop($ogrenciler);

    $notlar = array("Türkçe" => "60", "Matematik" => "40", "Fizik" => "90");
    asort($notlar); //Değere Göre Küçükten Büyüğe sıralar
    echo "<pre>";
    print_r($notlar);
    echo "</pre>";

    if (in_array("ahmet", $ogrenciler)) {
        echo "Bulundu.";
    } else {
        echo "Aranılan değer bulunamadı.";
    }

    $rastgeleElemanAl = array_rand($ogrenciler); //Dizi içinden rastgele indis numarası
    echo "<br>Sonuç : " . $ogrenciler[$rastgeleElemanAl];

    $kesitAl = array_slice($ogrenciler, 1, 2);
    echo "<pre>";
    print_r($kesitAl);
    echo "</pre>";
    ?>
</body>

</html>