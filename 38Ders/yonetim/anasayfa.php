<?php
    session_start();
    include("ayar.php");

    // if ($_SESSION["giris"] = sha1(md5("var")) || $_COOKIE["kullanici"] != "msb"){
    //     header ("Location: cikis.php");
    // }
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim paneli Ana Sayfa</title>
</head>
<body>
    
    <div style="text-align:center;">
        <a href= "anasayfa.php">ANA SAYFA<a> -
        <a href= "portfolyo.php">PORTFOLYO<a> -
        <a href= "hakkimizda.php">HAKKIMIZDA<a> -
        <a href= "hizmetlerimiz.php">HİZMETLERİMİZ<a> -
        <a href= "projelerimiz.php">PROJELERİMİZ<a> -
        <a href= "cikis.php" onclick="if (!comfirm 
        ('Çıkış Yapmak İstediğinize Eminmisiniz ?')) return false;">ÇIKIŞ<a>
        <br><hr><br><br>

    </div>

    <h2 style="text-align:center;">Menüden Seçim Yapınız</h2>

</body>
</html>