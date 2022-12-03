<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Saniye Hesaplama</title>
</head>

<body>
    <h3>Zaman Hesaplama</h3>
    <form action="saniye" method="post">
        Lütfen Saniye olarak zamanı giriniz :
        <br><input type="text" name="saniye" id=""><br><br>
        <input type="submit" value="Süre Hesapla">
    </form>
    <?php
    error_reporting(0);
    $zaman = $_POST["saniye"];
    $saat = floor($zaman / 3600);
    $dakika = floor(($zaman / 60) % 60);
    $saniye = $zaman % 60;
    echo "<br><b>$saat:$dakika:$saniye</b>";
    ?>
</body>

</html>