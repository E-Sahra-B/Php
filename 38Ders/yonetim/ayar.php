<?php
$baglan = new mysqli("localhost", "Sahra", "1234", "admin");
if ($baglan->connect_errno) {
    echo "Hata : " . $baglan->connect_error;
}
$baglan->set_charset("utf8");
