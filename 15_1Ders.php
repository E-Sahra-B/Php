<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Hesap Fonksiyonları</h3>
    <h4>RASTGELE SAYI ÜRETME FONKSİYONLARI</h4>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>rand</td>
            <td>Rastgele sayı üretme. Parametre olarak en küçük, en büyük değerler verilebilir</td>
        </tr>
        <tr>
            <td>getrandmax</td>
            <td>Rand fonksiyonu ile üretilebilecek en büyük olası değeri gösterme</td>
        </tr>
        <tr>
            <td>mt_rand</td>
            <td>Rand fonksiyonuna göre daha kısa sürede rastgele sayı üretme</td>
        </tr>
        <tr>
            <td>mt_getrandmax</td>
            <td>Mt_rand fonksiyonu ile üretilebilecek en büyük olası değeri gösterme</td>
        </tr>

    </table>
    <hr>
    <h4>KIRPMA VE YUVARLAMA FONKSİYONLARI</h4>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>ceil</td>
            <td>Ondalık kısmı siler ve sayıyı bir üst tam sayıya yuvarlar</td>
        </tr>
        <tr>
            <td>floor</td>
            <td>Ondalık kısmı siler ve sayıyı bir alt tam sayıya yuvarlar</td>
        </tr>
        <tr>
            <td>round</td>
            <td>Ondalık kısma göre bir üst veya alt tam sayıya yuvarlar, parametre varsa kırpar</td>
        </tr>
    </table>
    <hr>
    <h4>EN KÜÇÜK VE EN BÜYÜK SAYI BULMA FONKSİYONLARI</h4>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>min</td>
            <td>En küçük sayıyı bulur</td>
        </tr>
        <tr>
            <td>max</td>
            <td>En büyük sayıyı bulur</td>
        </tr>
    </table>
    <hr>
    <h4>GELİŞMİŞ HESAPLAMA FONKSİYONLARI</h4>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>abs</td>
            <td>Sayının mutlak değerini hesaplar</td>
        </tr>
        <tr>
            <td>sqrt</td>
            <td>Sayının karekökünü hesaplar</td>
        </tr>
        <tr>
            <td>pow</td>
            <td>Sayının parametreyle bildirilen üssünü hesaplar</td>
        </tr>
        <tr>
            <td>fmod</td>
            <td>Sayının parametreyle bildirilen sayıya bölümünden kalanını hesaplar</td>
        </tr>
        <tr>
            <td>log</td>
            <td>Doğal logaritma hesabı yapar</td>
        </tr>
        <tr>
            <td>log10</td>
            <td>10'luk sayı tabanında logaritma hesabı yapar</td>
        </tr>
        <tr>
            <td>exp</td>
            <td>Parametreyle bildirilen sayının exponansiyel değerini hesaplar</td>
        </tr>
        <tr>
            <td>hypot</td>
            <td>Dik üçgenin hipotenüsünü hesaplar</td>
        </tr>

    </table>
    <?php
    echo "<hr>";
    echo "Rastgele Sayı : " . mt_rand(10, 99);

    echo "<hr>";
    $degisken = 150.755478523;
    echo "Kırpılmış: " . round($degisken, 2); // Yuv. sayıyı 2 basamaklı yazdırma
    echo "<hr>";

    $enkucuk = min(10, 28, 5, 3, 17, 76); // En küçük sayıyı bulma
    echo "En Küçük: " . $enkucuk; // En küçük sayıyı ekrana yazdırma
    echo "<br>En Büyük: " . max(10, 28, 5, 3, 17, 76); // En büyük sayıyı bulup yazdırma

    echo "<hr>";
    $degisken = 85;
    echo "$degisken'in Mutlak Değeri: " . abs($degisken); // Mutlak değer
    echo "<br>$degisken'in Karekökü: " . sqrt($degisken); // Karekök
    echo "<br>$degisken'in 4. Üssü: " . pow($degisken, 4); // Üs
    echo "<br>$degisken'in 3'ten Kalanı: " . fmod($degisken, 3); // Kalan
    echo "<br>$degisken'in Logaritması: " . log($degisken); // Doğal logaritma
    echo "<br>$degisken'in 10'luk Tab. Logaritması: " . log10($degisken); // 10'luk Log.
    echo "<br>E üssü -5 (e^-5): " . exp(-5); // Exponansiyel
    echo "<br>9-16'lık Dik Üçgenin Hipotenüsü: " . hypot(9, 16); // Hipotenüs
    ?>
</body>

</html>