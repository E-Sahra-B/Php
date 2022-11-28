<?php
session_start();
include("ayar.php");

// if ($_SESSION["giris"] = sha1(md5("var")) || $_COOKIE["kullanici"] != "msb"){
//     header ("Location: cikis.php");
// }


if ($_POST) {
    $aciklama = $_POST["aciklama"];
    $sorgu = $baglan->query("delete from hizmetlerimiz");
    $sorgu = $baglan->query("insert into hizmetlerimiz (aciklama) values ('$aciklama')");
    if ($sorgu) {
        echo "<script>window.location.href='hizmetlerimiz.php';</script>";
    } else {
        echo "<script>
            alert('HATA: KAYIT YAPILAMADI !');
            window.location.href='hizmetlerimiz.php';
            </script>";
    }
}

$sorgu = $baglan->query("select * from hizmetlerimiz");
$satir = $sorgu->fetch_object();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli Hizmetlerimiz</title>
</head>

<body>

    <div style="text-align:center;">
        <a href="anasayfa.php">ANA SAYFA<a> -
                <a href="portfolyo.php">PORTFOLYO<a> -
                        <a href="hakkimizda.php">HAKKIMIZDA<a> -
                                <a href="hizmetlerimiz.php">HİZMETLERİMİZ<a> -
                                        <a href="projelerimiz.php">PROJELERİMİZ<a> -
                                                <a href="cikis.php" onclick="if (!comfirm 
        ('Çıkış Yapmak İstediğinize Eminmisiniz ?')) return false;">ÇIKIŞ<a>
                                                        <br>
                                                        <hr><br><br>

    </div>

    <form action="" method="post">
        <b>İçerik</b><br><br>
        <textarea style="width:50%;height:200px;" name="aciklama"><?php echo $satir->aciklama; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

</body>

</html>