<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritabanina Giriş, Veritabanlari, Tablolar, Alanlar </title>
</head>

<body>
    <h3>Veritabanina Giriş, Veritabanlari, Tablolar, Alanlar </h3>
    <br>✯ Veritabanına Giriş
    <br>✯ Veritabanı, Tablo ve Alan Yapıları
    <br>✯ MySQL Veri Türleri (Metin, Tam Sayı, Ondalık Sayı, Zaman)
    <hr>
    <h4>Metin Veri Tipleri</h4>
    <table>
        <tr>
            <th>Veri Tipi</th>
            <th> Açıklama</th>
        </tr>
        <tr>
            <td>char</td>
            <td>(n) 0 - 255 arasında karakter saklar ve n karakter sayısına göre hafızada yer kaplar</td>
        </tr>
        <tr>
            <td>varchar</td>
            <td>(n) 0 - 255 arasında karakter saklar ve n karakter sayısına göre hafızada yer kaplar</td>
        </tr>
        <tr>
            <td>tinytext</td>
            <td>En fazla 256 karakter saklar</td>
        </tr>
        <tr>
            <td>text</td>
            <td>En fazla 65536 karakter saklar</td>
        </tr>
        <tr>
            <td>mediumtext</td>
            <td>En fazla 16777216 karakter saklar</td>
        </tr>
        <tr>
            <td>longtext</td>
            <td>En fazla 4294967296 karakter saklar</td>
        </tr>
    </table>
    <hr>
    <h4>Tam Sayı Veri Tipleri</h4>
    <table>
        <tr>
            <th>Veri Tipi</th>
            <th> Açıklama</th>
        </tr>
        <tr>
            <td>tinyint</td>
            <td>-128 - 255 arasında değer alır ve hafızada 1 byte yer kaplar</td>
        </tr>
        <tr>
            <td>smallint</td>
            <td>-32768 - 65535 arasında değer alır ve hafızada 2 byte yer kaplar</td>
        </tr>
        <tr>
            <td>mediumint</td>
            <td>-8388608 - 16777215 arasında değer alır ve hafızada 3 byte yer kaplar</td>
        </tr>
        <tr>
            <td>int</td>
            <td>-2.147.483.648 - 4294967295 arasında değer alır ve hafızada 4 byte yer kaplar</td>
        </tr>
        <tr>
            <td>bigint</td>
            <td>-9223372036854775808 - 18446744073709551615 arasında değer alır, 8 byte</td>
        </tr>
    </table>
    <hr>
    <h4>Ondalık Sayı Veri Tipleri</h4>
    <table>
        <tr>
            <th>Veri Tipi</th>
            <th> Açıklama</th>
        </tr>
        <tr>
            <td>float (n,d)</td>
            <td>Tam kısmı (n) 1 - 255, Ondalık kısmı (d) 0-30 arasında değer alır, hafızada 4 byte</td>
        </tr>
        <tr>
            <td>double (n,d)</td>
            <td>Tam kısmı (n) 1 - 255, Ondalık kısmı (d) 0-30 arasında değer alır, hafızada 8 byte</td>
        </tr>
        <tr>
            <td>real (n,d)</td>
            <td>Tam kısmı (n) 1 - 255, Ondalık kısmı (d) 0-30 arasında değer alır, hafızada 8 byte</td>
        </tr>
        <tr>
            <td>decimal (n,d)</td>
            <td>Tam kısmı (n) 1 - 65, Ondalık kısmı (d) 0-30 arasında değer alır</td>
        </tr>
    </table>
    <hr>
    <h4>Zaman Veri Tipleri</h4>
    <table>
        <tr>
            <th>Veri Tipi</th>
            <th> Açıklama</th>
        </tr>
        <tr>
            <td>date</td>
            <td>yyyy-mm-dd formatında tarih bilgisi, hafızada 3 byte yer kaplar</td>
        </tr>
        <tr>
            <td>datetime</td>
            <td>yyyy-mm-dd hh:mm:ss formatında tarih ve saat bilgisi,hafızada 8 byte yer kaplar</td>
        </tr>
        <tr>
            <td>timestamp</td>
            <td>yyyymmddhhmmss formatında tarih ve saat bilgisi, hafızada 4 byte yer kaplar</td>
        </tr>
        <tr>
            <td>time</td>
            <td>hh:mm:ss formatında saat bilgisi, hafızada 3 byte yer kap</td>
        </tr>
        <tr>
            <td>year</td>
            <td>yyyy formatında yıl bilgisi, hafızada 1 byte yer kaplar</td>
        </tr>

    </table>
    <?php
    ?>
</body>

</html>