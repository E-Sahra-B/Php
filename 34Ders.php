<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Dili, Tablo Birleştirme ve Kayit Seçme Komutlari</title>
</head>

<body>
    <h3>SQL Dili, Tablo Birleştirme ve Kayit Seçme Komutlari</h3>
    <br>✯ SQL Dili
    <br>✯ Temel SQL Komutları
    <br>✯ SQL ile Tablo Birleştirme (Left Join, Right Join, Inner Join)
    <hr>
    <br>SELECT o.adsoyad , e.egitim FROM ogrenciler AS o
    <br>LEFT JOIN egitimler AS e ON o.no = e.ogrenci;
    <p>Left Join ifadesi aracılığıyla ogrenciler ve egitimler tablosu birleştirilmiştir.
        Birleştirme işlemi yapılırken ogrenciler tablosunun no alanı ile egitimler tablosunun ogrenci alanı
        ilişkilendirilmiştir.</p>
    <br>
    <br>SELECT o.adsoyad , e.egitim FROM ogrenciler AS o
    <br>INNER JOIN egitimler AS e ON o.no = e.ogrenci;
    <p>Inner Join ifadesi aracılığıyla ogrenciler ve egitimler tablosu birleştirilmiştir.
        Birleştirme işlemi yapılırken ogrenciler tablosunun no alanı ile egitimler tablosunun ogrenci alanı
        ilişkilendirilmiştir.</p>
    <br>
    <br>SELECT o.adsoyad , e.egitim FROM ogrenciler AS o
    <br>RIGHT JOIN egitimler AS e ON o.no = e.ogrenci;
    <p>Right Join ifadesi aracılığıyla ogrenciler ve egitimler tablosu birleştirilmiştir.
        Birleştirme işlemi yapılırken ogrenciler tablosunun no alanı ile egitimler tablosunun ogrenci alanı
        ilişkilendirilmiştir.</p>
    <br>
    <?php
    ?>
</body>

</html>