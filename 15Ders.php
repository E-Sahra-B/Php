<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Başlık, Tarih, Zaman Fonksiyonları</h3>
    <h4>GETDATE FONKSİYONU</h4>
    <table>
        <tr>
            <th>Dizi İndisleri</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>seconds</td>
            <td>Saniye bilgisi</td>
        </tr>
        <tr>
            <td>minutes</td>
            <td>Dakika bilgisi</td>
        </tr>
        <tr>
            <td>hours</td>
            <td>Saat bilgisi</td>
        </tr>
        <tr>
            <td>mday</td>
            <td>Ayın kaçıncı günü olduğu bilgisi</td>
        </tr>
        <tr>
            <td>wday</td>
            <td>Haftanın kaçıncı günü olduğu bilgisi</td>
        </tr>
        <tr>
            <td>mon</td>
            <td>Ay bilgisi (Rakamla)</td>
        </tr>
        <tr>
            <td>year</td>
            <td>Yıl bilgisi</td>
        </tr>
        <tr>
            <td>yday</td>
            <td>Yılın kaçıncı günü olduğu bilgisi</td>
        </tr>
        <tr>
            <td>weekday</td>
            <td>Haftanın kaçıncı günü olduğu bilgisi</td>
        </tr>
        <tr>
            <td>month</td>
            <td>Ay bilgisi (Yazıyla)</td>
        </tr>
    </table>
    <hr>
    <h4>DATE FONKSİYONU</h4>
    <table>
        <tr>
            <th>Parametre</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>d</td>
            <td>Ayın kaçıncı günü olduğu bilgisi (2 haneli)</td>
        </tr>
        <tr>
            <td>j</td>
            <td>Ayın kaçıncı günü olduğu bilgisi</td>
        </tr>
        <tr>
            <td>m</td>
            <td>Yılın kaçıncı ayı olduğu bilgisi (2 haneli)</td>
        </tr>
        <tr>
            <td>n</td>
            <td>Yılın kaçıncı ayı olduğu bilgisi</td>
        </tr>
        <tr>
            <td>y</td>
            <td>Yıl bilgisi (2 haneli)</td>
        </tr>
        <tr>
            <td>Y</td>
            <td>Yıl bilgisi (4 haneli)</td>
        </tr>
        <tr>
            <td>w</td>
            <td>Haftanın kaçıncı günü olduğu bilgisi</td>
        </tr>
        <tr>
            <td>W</td>
            <td>Yılın kaçıncı haftası olduğu bilgisi</td>
        </tr>
        <tr>
            <td>N</td>
            <td>Haftanın kaçıncı günü olduğu bilgisi</td>
        </tr>
        <tr>
            <td>H</td>
            <td>Saat bilgisi (2 haneli)</td>
        </tr>
        <tr>
            <td>i</td>
            <td>Dakika bilgisi (2 haneli)</td>
        </tr>
        <tr>
            <td>s</td>
            <td>Saniye bilgisi (2 haneli)</td>
        </tr>
        <tr>
            <td>z</td>
            <td>Yılın kaçıncı günü olduğu bilgisi</td>
        </tr>
        <tr>
            <td>t</td>
            <td>Ayın kaç güne sahip olduğu bilgisi (Rakamla)</td>
        </tr>
    </table>
    <hr>

    <?php
    header("Content-Type:text/html; Charset=UTF-8"); // Html içinde kullanılmıyorsa karakter seti tanımlanması
    header("Cache-Control: no-cache, must-revalidate"); // Önbellek tanımlaması Cache silinir ve birdaha tutmaz
    header("Expires: Sun, 28 Nov 1993 00:00:00 GMT"); // Geçmiş tarih tanımlaması
    //header("Location: https://www.google.com/"); // Sayfa Açıldığı zaman Yönlendirme
    //header("Refresh: 10; Url= https://www.google.com/"); // Yönlendirme
    //die("10 Saniye Sonra Yönlendiriliyorsunuz…"); // Yönlendirme mesajı budan sonraki kodları işletmez

    $bugun = getdate(); // Bugüne ait zaman bilgilerini dizi değişkenine aktarma
    echo "<pre>";
    print_r($bugun); // Dizi elemanlarını yazdırma
    echo "</pre><hr>";

    date_default_timezone_set('Europe/Istanbul'); //Bulunduğumuz zaman dilimini ayarlamak

    echo "Bugün: " . date("d-m-Y H:i:s"); // gün-ay-yıl ve saat-dakika-saniye
    echo "<br>Bugün yılın " . date("z") . ". günüdür."; // Yılın gün sayısı
    echo "<br>Bu hafta yılın " . date("W") . ". haftasıdır."; // Yılın kaçıncı haftası
    echo "<br>Bu ay toplam " . date("t") . " gün çekmektedir."; // Ayın gün sayısı
    echo "<hr>";

    $gun = array("", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi", "Pazar"); // Gün isimlerini içeren dizi oluşturma
    $ay = array("", "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"); // Ay isimlerini içeren dizi oluşturma
    echo "Bugün: " . $gun[date("w")];
    echo "<br>Bu Ay: " . $ay[date("n")];
    echo "<br>Şimdi: " . date("d ") . $ay[date("n")] . date(" Y ") . $gun[date("w")];
    echo "<br>Zaman: " . date("H:i:s");

    echo "<hr>";
    $dun = getdate(time() - 24 * 60 * 60); // 24*60*60=86.400 Saniye (1 Gün öncesi)
    $bugun = getdate(time());
    $yarin = getdate(time() + 24 * 60 * 60);
    print_r($dun["mday"] . "-" . $dun["mon"] . "-" . $dun["year"]);
    print_r("<br>" . $bugun["mday"] . "-" . $bugun["mon"] . "-" . $bugun["year"]);
    print_r("<br>" . $yarin["mday"] . "-" . $yarin["mon"] . "-" . $yarin["year"]);
    echo "<hr>";

    $zaman = mktime(0, 0, 0, date("m") - 9, date("d"), date("Y") - 5); // 5 Yıl 9 Ay öncesi
    echo "Tarih: " . date("d-m-Y", $zaman); // Tarih bilgisini formatlama
    ?>
</body>

</html>