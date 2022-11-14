<?php
$kayitNo = $_GET["id"];
$baglan = new mysqli("localhost", "Sahra", "1234", "deneme");
if ($baglan->connect_errno) {
    echo "Hata : " . $baglan->connect_error;
}
$baglan->set_charset("utf8");
$sorgu = $baglan->query("delete from ogrenciler where id=$kayitNo");

if ($sorgu) {
    echo "<script>
    alert('Kayıt Silindi');
    window.location.href='liste.php';
    </script>";
} else {
    echo "Kayıt Silinemedi";
}
