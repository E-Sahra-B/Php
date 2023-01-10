<?php
    require_once 'filtre.php';

    $deger = " ahmet@/ mehmet . com "; // Gelen Veri
    $islem = new Guvenlik($deger, 'email'); // Nesne Oluştur

    echo "Orijinal Veri: $deger<br><br>"; // Gelen Veri Ekrana Yazdır

    // Sadece Temizleme İşlemi
    echo "Temizleme İşlemi: ";
    echo $islem->sanitize()->result();
    echo "<br><br>";

    // Sadece Doğrulama İşlemi
    $islem = new Guvenlik($deger, 'email');
    echo "Doğrulama İşlemi: ";
    if ( $islem->validate()->result() == true ) {
        echo "Veri Doğru!";
    } else {
        echo "Veri Yanlış!";
    }
    echo "<br><br>";

    // Hem Temizleme Hem Doğrulama İşlemi
    $islem = new Guvenlik($deger, 'email');
    echo "Temizleme & Doğrulama: ";
    if ( $islem->sanitize()->validate()->result() == true ) {
        echo "Veri Doğru!";
    } else {
        echo "Veri Yanlış!";
    }
?>