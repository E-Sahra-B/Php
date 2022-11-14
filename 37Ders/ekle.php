<?php
$baglan = new mysqli("localhost", "Sahra", "1234", "deneme");
if ($baglan->connect_errno) {
    echo "Hata : " . $baglan->connect_error;
}
$baglan->set_charset("utf8");

$kayitNo = $_POST["id"];
if ($kayitNo > 0) {
    $adSoyad = $_POST["adSoyad"];
    $tc = $_POST["tcKimlik"];
    $telefon = $_POST["telefon"];
    $sorgu = $baglan->query("update ogrenciler set adSoyad ='$adSoyad',tc='$tc',telefon='$telefon' where id=$kayitNo");
    $toplam = $baglan->affected_rows;
    if ($toplam > 0) {
        header("Location:liste.php");
    } else {
        echo "Düzenlemede Hata Oluştu";
    }
} else { //Yeni kayıt
    $sorgu = $baglan->prepare("insert into ogrenciler (adSoyad,tc,telefon) values(?, ?, ?)");
    $sorgu->bind_param("sss", $adSoyad, $tc, $telefon);
    $adSoyad = $_POST["adSoyad"];
    $tc = $_POST["tcKimlik"];
    $telefon = $_POST["telefon"];
    $sorgu->execute();
    $toplam = $baglan->affected_rows;
    $sorgu->close();
    $baglan->close();
    if ($toplam > 0) {
        header("Location:yeni.php");
    } else {
        echo "Kayıt Eklenemedi";
    }
}
