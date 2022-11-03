<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çerez (Cookie) işlemleri</title>
</head>

<body>
    <h3>Çerez (Cookie) işlemleri</h3>
    <br>✯ PHP'de Çerez (Cookie) İşlemleri
    <br>✯ Setcookie, Isset, Empty Komutları
    <hr>
    <?php
    //cookie ismi, bilgi,süre imha suandan itibaren sn, kök kayıtlar, alan adı, https=true,javascript=true ulaşılabilir
    //setcookie("adSoyad", "E.Sahra", time() + 3600, "/", "phpmysqlegitimi.com", false, true); //açıldığında değil yenilenince okuyor
    setcookie("adSoyad", "E.Sahra", time() + 3600);
    echo "Çerez içeriği : " . $_COOKIE["adSoyad"];

    if (isset($_COOKIE["adSoyad"])) { // Bir çerez dosyasının daha önceden oluşturulup oluşturulmadığı, yani var olup olmadığı isset fonksiyonu ile kontrol edilebilir
        echo "<br>Çerez dosyası var.";
    } else { // Çerez dosyası yoksa
        echo "<br>Çerez dosyası yok ve oluşturulacak.";
        setcookie("adSoyad"); // Çerez oluşturma
    }

    setcookie("ziyaretci", "esb"); //Empty fonksiyonu, çerez dosyasını kontrol eder; "true" veya "false" değerini sonuç olarak döndürür
    if (empty($_COOKIE["ziyaretci"])) { // Çerez dosyasının içerisi boşsa
        echo "<br>Çerez içerisi boş."; // Ekran çıktısı
    } else {
        echo "<br>çerez içi dolu";
    }

    setcookie("sureOnceSil", "E.Sahra.B", time() + 3600);
    echo "<br>Çerez içi : " . $_COOKIE["sureOnceSil"];
    //setcookie("sureOnceSil", "", time() - 1);

    $adSoyadSifreli = sha1(md5("Esma Sahra Balcı"));
    setcookie("sifresliCookie", $adSoyadSifreli, time() + 3600);
    echo "<br>Şireli Çerez içi : " . $_COOKIE["sifresliCookie"];
    ?>
</body>

</html>