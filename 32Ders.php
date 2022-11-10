<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Dili, Kayit Ekleme, Güncelleme, Silme Komutlari</title>
</head>

<body>
    <h3>SQL Dili, Kayit Ekleme, Güncelleme, Silme Komutlari</h3>
    <br>✯ SQL Dili
    <br>✯ Temel SQL Komutları
    <br>✯ SQL ile Kayıt Ekleme (Insert Into)
    <br>✯ SQL ile Kayıt Güncelleme (Update Set)
    <br>✯ SQL ile Kayıt Silme (Delete From)
    <hr>
    <h4>KAYIT EKLEME</h4>
    <br>INSERT INTO egitim (no,tckimlik,adsoyad) VALUES (‘’, 12345678900, ‘Esma Sahra Balcı’);
    <h4>BİRDEN FAZLA KAYIT EKLEME</h4>
    <p>INSERT INTO egitim (no,tckimlik,adsoyad) VALUES (‘’, 12345678900, ‘Esma Sahra’),
        (‘’, 12345678902, ‘Sahra Balcı’);</p>
    <hr>
    <h4>KAYIT GÜNCELLEME</h4>
    <br>UPDATE egitim SET adsoyad= ‘Esma Balcı’ WHERE no=1;
    <h4>BİRDEN FAZLA KAYIT GÜNCELLEME</h4>
    <p>UPDATE egitim SET adsoyad= ‘Sahra Balcı’ , tckimlik=‘00000000000’ WHERE no=1;</p>
    <hr>
    <h4>KAYIT SİLME</h4>
    <br>DELETE FROM egitim WHERE no=1;
    <hr>
</body>

</html>