<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oturum (Session) işlemleri</title>
</head>

<body>
    <h3>Oturum (Session) işlemleri</h3>
    <br>✯ PHP'de Oturum (Session) İşlemleri
    <br>✯ Session_start, Session_destroy Komutları
    <br>✯ Unset, Isset, Empty Komutları
    <br>
    <hr>
    <?php
    session_start(); // Oturum başlatma mutlaka olmalı
    $_SESSION["kitap"] = "Atatürk";
    $_SESSION["yil"] = "2022";

    echo "Kitap adı : " . $_SESSION["kitap"] . "<br>";
    echo "Basım Yılı : " . $_SESSION["yil"] . "<br>";

    if (isset($_SESSION["kitap"])) { // Oturum dosyası varsa
        echo "isset Oturum dosyası bulundu " . $_SESSION["kitap"] . "<br>";
    }

    if (empty($_SESSION["kitap"])) { // Oturum değişkeninin içi boşsa
        echo "Oturum dosyası oluşturuldu =>" . $_SESSION["kitap"] . "<br>";
    } //session içerik dolu olduğu için else kısmı çalışır

    unset($_SESSION["kitap"]); // Tek oturum silme
    unset($_SESSION["kitap"], $_SESSION["yil"]); // Çoklu oturum silme

    session_destroy(); // Tüm oturumları toplu silme
    ?>
</body>

</html>