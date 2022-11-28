<?php

$baglan =  new mysqli("localhost", "Sahra", "1234", "deneme");
$baglan->set_charset("utf8");

// try {
//     $baglan = new PDO("mysql:host=localhost;dbname=deneme;charset=utf8", "Sahra", "1234");
//     $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo "Bağlantı Hatası : " . $e->getMessage() . "<br>";
// }
