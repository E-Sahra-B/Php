<?php

    try {
        $baglan = new PDO("mysql:host=localhost;dbname=eii_phpatolye;charset=utf8", "mehmet", "12345");
        $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $baglan->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
        die("Sunucu Hatası: " . $e->getMessage());
    }

?>