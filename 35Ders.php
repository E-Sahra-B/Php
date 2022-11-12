<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ve MySQL ile Veritabani işlemleri</title>
</head>

<body>
    <h3>PHP ve MySQL ile Veritabani işlemleri</h3>
    <br>✯ SQL Dili
    <br>✯ PHP ile MySQL İşlemleri (Procedural - Yordamsal)
    <br>✯ PHP ile MySQL İşlemleri (Object Oriented - Nesne Yönelimli)
    <br>✯ PHP ile MySQL Veritabanı Bağlantısı Kurma
    <br>✯ PHP ile MySQL Veritabanına Kayıt Ekleme
    <br>✯ PHP ile MySQL Veritabanında Kayıt Güncelleme
    <br>✯ PHP ile MySQL Veritabanından Kayıt Silme
    <br>✯ PHP ile MySQL Veritabanındaki Kayıtları Listeleme
    <hr>
    <h3>Yordamsal(Procedural)</h3>
    <br>mysqli_connect fonksiyonu = sunucu adresi, veritabanı kullanıcı adı, veritabanı şifresi , veritabanı adı
    <br>başarısız olması durumunda , ekrana hata mesajı çıktısı göndermek için ise <b>die</b> fonksiyonu kullanılabilir
    <hr>
    <h3>VERİTABANINDAN KAYIT SEÇME</h3>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>mysqli_fetch_row()</td>
            <td>Sonuçlar dizi tipinde bir değişkende saklanır ve indis değeri sıra numarasıdır</td>
        </tr>
        <tr>
            <td>mysqli_fetch_assoc()</td>
            <td>Sonuçlar dizi tipinde bir değişkende saklanır ve indis değeri alan adıdır</td>
        </tr>
        <tr>
            <td>mysqli_fetch_object()</td>
            <td>Sonuçlar nesne tipinde bir değişkende saklanır ve indis değeri alan adıdır</td>
        </tr>
        <tr>
            <td>mysqli_fetch_array()</td>
            <td>Sonuçlar dizi tipinde bir değişkende saklanır ve indis değeri özelleştirilebilir</td>
        </tr>

    </table>
    <?php
    // $baglan = mysqli_connect("localhost", "Sahra", "1234", "deneme") or die(mysqli_error());
    // $baglan = mysqli_connect("localhost", "Sahra", "1234") or die("Veritabanına Bağlanılamadı!");
    // mysqli_set_charset($baglan, "utf8");
    // mysqli_query($baglan, "set names 'utf8'");
    // mysqli_query($baglan, "set character set 'utf8_turkish_ci'");
    // mysqli_select_db($baglan, "deneme") or die("Veritabanı Seçilemedi");

    // $eklemeSorgusu = mysqli_query($baglan, "insert into ogrenciler values('','esma','1234','12345678901')");
    // if ($eklemeSorgusu) {
    //     echo "<br>Kayıt İşlemi Başarılı!";
    // } else {
    //     echo "<br>İşlem Başarısız!";
    // }

    // $guncellemeSorgusu = mysqli_query($baglan, "update ogrenciler set adSoyad='Esma Sahra BALCI',tc='0000' where(id=2)"); // Sorgu
    // if ($guncellemeSorgusu) {
    //     echo "<br>Güncelleme İşlemi Başarılı!";
    // } else {
    //     echo "<br>İşlem Başarısız!";
    // }

    // mysqli_query($baglan,"delete from ogrenciler"); // SQL sorgusu çalıştırma
    // $silmeSorgusu = mysqli_query($baglan, "delete from ogrenciler where (id=1)"); // Sorgu
    // if ($silmeSorgusu) {
    //     echo "<br>Silme İşlemi Başarılı!";
    // } else {
    //     echo "<br>İşlem Başarısız!";
    // }

    // $guncellemeSorgusu = mysqli_query($baglan, "update ogrenciler set tc='0000'"); // Sorgu
    // $etkilenen = mysqli_affected_rows($baglan); // Etkilenen kayıt sayısını bulma
    // echo "<br>Toplam $etkilenen adet kayıt güncellenmiştir.";

    //$sorgu = mysqli_query($baglan, "select * from ogrenciler");
    //$satir = mysqli_fetch_row($sorgu); // Sonuçların dizi değişkene aktarılması
    //echo "Adı Soyadı : $satir[1] Telefon : $satir[3]";//1 satır getiriyor while ileberaber kullanılmalı

    // while ($satir = mysqli_fetch_row($sorgu)) { //indis numaraları
    //     echo "Adı Soyadı : $satir[1] | Telefon : $satir[3]<br>";
    // }

    // while ($satir = mysqli_fetch_assoc($sorgu)) { //alan adları dizi halınde
    //     echo "Adı Soyadı : $satir[adSoyad] | Telefon : $satir[telefon]<br>";
    // }

    // while ($satir = mysqli_fetch_array($sorgu)) { //özelleştirilebilir
    //     echo "Adı Soyadı : $satir[adSoyad] | Telefon : $satir[3]<br>";
    // }

    // while ($satir = mysqli_fetch_object($sorgu)) { //Nesne alan adları dizi halınde
    //     echo "Adı Soyadı : $satir->adSoyad | Telefon : $satir->telefon<br>";
    // }

    // $toplam = mysqli_num_rows($sorgu);
    // echo "Toplam : $toplam Kayıt Bulundu";

    // mysqli_free_result($sorgu);//Hafıza Boşaltma komutu

    // mysqli_close($baglan);

    //OBJECT ORIENTED(Nesne Yönelimli) BAĞLANTI
    $baglan = new mysqli("localhost", "Sahra", "1234", "deneme"); // or die("Veritabanına Bağlanılamadı!");
    $baglan->set_charset("utf8");
    // // $baglan->query("set names 'utf8'");
    // // $baglan->query("set character set 'utf8_turkish_ci'");
    // // $baglan->select_db("deneme") or die("Veritabanı Seçilemedi");
    // $sorgu = $baglan->query("insert into ogrenciler....");
    // $sorgu = $baglan->query("update ogrenciler set....");
    // $sorgu = $baglan->query("delete from ogrenciler....");

    // $sorgu = $baglan->query("select * from ogrenciler");
    // while ($satir = $sorgu->fetch_object()) {
    //     echo "Adı Soyadı : $satir->adSoyad | Telefon : $satir->telefon<br>";
    // }
    // //$baglan->free_result($sorgu);
    // $baglan_stmt->free_result($sorgu);

    $sorgu = $baglan->prepare("insert into ogrenciler (adSoyad,tc,telefon) values(?, ?, ?)");
    $sorgu->bind_param("sss", $adSoyad, $tc, $telefon); //string s , integer i, double d
    $adSoyad = "Sahra";
    $tc = "09876543211";
    $telefon = "12345678901";
    $sorgu->execute();

    $adSoyad = "Sahra Balcı";
    $tc = "19876543211";
    $telefon = "012345678901";
    $sorgu->execute();

    $sorgu->close();
    $baglan->close();
    ?>
</body>

</html>