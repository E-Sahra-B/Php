<?php
session_start();
include("ayar.php");

if ($_POST) {
    $kullanici = $_POST["kullanici"];
    $sifre = $_POST["sifre"];

    $sorgu = $baglan->query("select * from kullanici where (kullanici ='$kullanici' && 
        sifre = '$sifre')");
    $kayitsay = $sorgu->num_rows;

    if ($kayitsay > 0) {
        setcookie("kullanici", "msb", time() * 60 * 60);
        $_SESSION["giris"] = sha1(md5("var"));
        echo "
            <script>
            window.location.href='anasayfa.php';
            </script>";
    } else {
        echo "
            <script>
            alert('HATALI KULLANICI BİLGİSİ!');
            window.location.href='index.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim paneli Giriş</title>
</head>

<body style="text-align:center;padding-top:50px;">

    <form action="" method="post">
        <b> Kullanici Adı:</b><br>
        <input type="text" name="kullanici" required><br>
        <b>Parola:</b><br>
        <input type="password" name="sifre" required><br><br>
        <input type="submit" value="Giriş Yap">
    </form>


</body>

</html>