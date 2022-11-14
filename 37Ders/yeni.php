<?php
error_reporting(0);
$kayitNo = $_GET["id"];
if ($kayitNo > 0) {
    $baglan = new mysqli("localhost", "Sahra", "1234", "deneme");
    if ($baglan->connect_errno) {
        echo "Hata : " . $baglan->connect_error;
    }
    $baglan->set_charset("utf8");

    $sorgu = $baglan->query("select * from ogrenciler where id=$kayitNo");
    $satir = $sorgu->fetch_object();
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uygulama: PHP ile Veritabani Uygulamasi</title>
</head>

<body>
    <div style="text-align:center;">
        <a href="index.html">ANASAYFA</a> -
        <a href="liste.php">KAYIT LİSTESİ</a> -
        <a href="yeni.php">YENİ KAYIT</a>
        <br>
        <hr><br><br>
    </div>
    <form action="ekle.php" method="post" style="text-align:center;">
        <strong>Adı Soyadı : </strong><input type="text" name="adSoyad" value="<?php echo $kayitNo > 0 ? $satir->adSoyad : ""; ?>" size="30">
        <br><br>
        <strong>TC Kimlik : </strong><input type="text" name="tcKimlik" value="<?php echo $kayitNo > 0 ? $satir->tc : ""; ?>" size="30">
        <br><br>
        <strong>Telefon No : </strong><input type="text" name="telefon" value="<?php echo $kayitNo > 0 ? $satir->telefon : ""; ?>" size="30">
        <br><br>
        <input type="hidden" name="id" value="<?php echo $kayitNo > 0 ? $satir->id : ""; ?>">
        <input type="submit" value="Kaydet">
    </form>
</body>

</html>