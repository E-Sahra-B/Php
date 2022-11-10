<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Dili, Veritabani ve Tablo işlem Komutlari</title>
</head>

<body>
    <h3>SQL Dili, Veritabani ve Tablo işlem Komutlari</h3>
    <br>✯ SQL Dili
    <br>✯ Temel SQL Komutları
    <br>✯ SQL ile Veritabanı Oluşturma (Create Database)
    <br>✯ SQL ile Veritabanı Seçme (Use)
    <br>✯ SQL ile Veritabanı Silme (Drop Database)
    <br>✯ SQL ile Tablo Oluşturma (Create Table)
    <br>✯ SQL ile Tablo Adını Değiştirme (Rename Table)
    <br>✯ SQL ile Tablolarda Yapısal Değişiklikler (Alter Table)
    <br>✯ SQL ile Tablo İçini Boşaltma (Truncate Table)
    <br>✯ SQL ile Tablo Sorunlarını Giderme (Repair Table)
    <br>✯ SQL ile Tablo Silme (Drop Table)
    <hr>
    <h4>VERİTABANI OLUŞTURMA</h4>
    <br>CREATE DATABASE egitim
    <br>DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
    <hr>
    <h4>VERİTABANI SEÇME</h4>
    <br>USE egitim;
    <hr>
    <h4>VERİTABANI SİLME</h4>
    <br>DROP DATABASE egitim;
    <hr>
    <h4>TABLO OLUŞTURMA</h4>
    <table>
        <tr>
            <th>Özellik</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>null</td>
            <td>Alan boş bırakılabilir</td>
        </tr>
        <tr>
            <td>not</td>
            <td>null Alan boş bırakılamaz</td>
        </tr>
        <tr>
            <td>signed</td>
            <td>Alan içerisinde negatif (işaretli) sayı saklanabilir</td>
        </tr>
        <tr>
            <td>unsigned</td>
            <td>Alan içerisinde negatif (işaretli) sayı saklanamaz</td>
        </tr>
        <tr>
            <td>default</td>
            <td>Alanın boş bırakılması halinde atanacak varsayılan değer</td>
        </tr>
        <tr>
            <td>unique</td>
            <td>Alan içerisindeki değer benzersiz olmalıdır</td>
        </tr>
        <tr>
            <td>auto_increment</td>
            <td>Her yeni veride otomatik olarak sırayla artan bir değer alabilir</td>
        </tr>
        <tr>
            <td>primary key</td>
            <td>Alan birincil anahtardır, benzersiz olmalıdır</td>
        </tr>
        <tr>
            <td>foreign key</td>
            <td>Alan başka bir tablodaki alan ile ilişkilidir</td>
        </tr>
    </table>
    <br>
    <br>CREATE TABLE ogrenciler (
    <br>no tinyint primary key auto_increment,
    <br>tckimlikno int(11) unique not null,
    <br>adsoyad varchar(250) not null,
    <br>egitimaciklama text not null default ‘Açıklama Yok!’
    <br>kayittarih date not null default ‘0000-00-00’
    <br>);
    <br>
    <table>
        <tr>
            <th>Alan Adı</th>
            <th>Veri Tipi</th>
            <th>Özellikler</th>
        </tr>
        <tr>
            <td>no</td>
            <td>tinyint</td>
            <td>Birincil Anahtar, Otomatik Sayı</td>
        </tr>
        <tr>
            <td>tckimlikno</td>
            <td>int(11)</td>
            <td>Boş Bırakılamaz, Benzersiz Kayıt</td>
        </tr>
        <tr>
            <td>adsoyad</td>
            <td>varchar(250)</td>
            <td>Boş Bırakılamaz</td>
        </tr>
        <tr>
            <td>egitimaciklama</td>
            <td>text</td>
            <td>Boş Bırakılamaz, Varsayılan “Açıklama Yok!”</td>
        </tr>
        <tr>
            <td>kayittarih</td>
            <td>date</td>
            <td>Boş Bırakılamaz, Varsayılan “0000-00-00”</td>
        </tr>
    </table><br>
    <hr>
    <h4>TABLO ADINI DEĞİŞTİRME</h4>
    <br>RENAME TABLE egitimler TO egitim;
    <hr>

    <h4>TABLO ALANLARINI GÜNCELLEME</h4>
    <br>ALTER TABLE egitim CHANGE adsoyad ogr_adsoyad varchar(250);
    <p>Alter Table komutu aracılığıyla egitim isimli tabloda bulunan adsoyad alanının adı
        ogr_adsoyad olarak değiştirilmiştir.</p>
    <br>
    <br>ALTER TABLE egitim MODIFY ogr_adsoyad varchar(100) not null;
    <p>Alter Table komutu aracılığıyla egitim isimli tabloda bulunan ogr_adsoyad
        alanının saklayabileceği karakter sayısı “100” olarak değiştirilmiş ve boş bırakılamama özelliği
        eklenmiştir.</p>
    <br>
    <br>ALTER TABLE egitim ADD (
    <br>sinav1 tinyint not null default ‘0’,
    <br>sinav2 tinyint not null default ‘0’,
    <br>ortalama tinyint not null default ‘0’
    <br>);
    <p>Alter Table komutu aracılığıyla egitim isimli tabloya tinyint veri tipinde, boş
        bırakılamayan ve varsayılan değeri “0” olan sinav1, sinav2 ve ortalama isimli alanlar eklenmiştir</p>
    <br>
    <br>ALTER TABLE egitim DROP ogr_adsoyad;
    <p>Alter Table komutu aracılığıyla egitim isimli tablonun ogr_adsoyad adlı alanı ve
        bu alanın içerdiği tüm veriler silinmiştir.</p>
    <br>
    <hr>
    <h4>TABLO İÇERİĞİNİ BOŞALTMA</h4>
    <br>TRUNCATE TABLE egitim;
    <hr>
    <h4>TABLO ONARMA</h4>
    <br>REPAIR TABLE egitim;
    <hr>
    <h4>TABLO SİLME</h4>
    <br>DROP TABLE egitim;
    <hr>
</body>

</html>