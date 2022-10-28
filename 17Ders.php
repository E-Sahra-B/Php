<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Dosya Ekleme Fonksiyonlari</h3>
    <p><b>Include</b> fonksiyonu ile aynı dosya bir sayfa içerisinde istenilen sayıda eklenebilir.</p>
    <p><b>Include_once</b> fonksiyonu, belirtilen dosyanın sayfaya yalnızca bir sefer eklenmesini sağlar.</p>
    <p><b>Require</b> fonksiyonu ile belirtilen dosyanın içeriği çağırılan bölgeye eklenir ve içerisindeki kodlar işletilir.</p>
    <p><b>Require_once</b> fonksiyonu, belirtilen dosyanın sayfaya yalnızca bir sefer eklenmesini sağlar</p>
    <hr>
    <?php
    //include("deneme.php");
    //include_once("deneme.php");
    //require("deneme.php");//mevcut dosya yoksa gerisideki kodlar işlemez
    //require_once("deneme.php");//bir sefer çağılıp eğer mevcut dosya yoksa gerisideki kodlar işlemez
    echo $degisken;
    ?>
</body>

</html>