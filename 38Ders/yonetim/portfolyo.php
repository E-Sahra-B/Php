<?php
session_start();
include("ayar.php");

// if ($_SESSION["giris"] = sha1(md5("var")) || $_COOKIE["kullanici"] != "msb"){
//     header ("Location: cikis.php");
// }


$islem = $_GET["islem"];

if ($islem == "sil") {
    $id = $_GET["id"];
    $sorgu = $baglan->query("delete from portfolyo where (id='$id')");
    echo "<script>window.location.href='portfolyo.php';</script>";
}

if ($islem == "ekle") {
    $baslik = $_POST["baslik"];
    $resim = "img/" . $_FILES["resim"][name];
    move_uploaded_file($_FILES["resim"][tmp_name], $resim);
    $sorgu = $baglan->query("insert into portfolyo (baslik,resim) values ('$baslik','$resim')");
    echo "<script>window.location.href='portfolyo.php';</script>";
}

if ($_POST) {
    $aciklama = $_POST["aciklama"];
    $sorgu = $baglan->query("delete from projelerimiz");
    $sorgu = $baglan->query("insert into projelerimiz (aciklama) values ('$aciklama')");
    echo "<script>window.location.href='projelerimiz.php';</script>";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli Portfolyo</title>
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

    <table width="100%" border="1">
        <tr>
            <th>S.No</th>
            <th>Başlık</th>
            <th>Sil</th>
        </tr>
        <?php
        $sirano = 0;
        $sorgu = $baglan->query("select * from portfolyo");
        while ($satir = $sorgu->fetch_object()) {
            $sirano++;
            echo "<tr>
                    <td>$sirano</td>
                    <td>$satir->baslik </td>
                    <td><a href='portfolyo.php?islem=sil&id=$satir->id'>Sil</td>
                    </tr>";
        }

        ?>
    </table>

    <br><br>

    <form action="portfolyo.php?islem=ekle" enctype="multipart/form-data" method="post">
        <b>Başlık:</b><input type="text" size="20" name="baslik"><br><br>
        <b>Resim:</b><input type="file" name="resim"><br><br>
        <input type="submit" value="Kaydet">
    </form>


</body>

</html>