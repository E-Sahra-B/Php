<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Diziler, Tek Boyutlu ve Çok Boyutlu Diziler</h3>
    <code>
        <h4>Çok Boyutlu Diziler</h4>
        <br>$ogrenciler3 = array();
        <br>$ogrenciler3[0] = array("adSoyad" => "Fatih3", "not" => "60"); //Anahtar değerler aynı olmalı
        <br>$ogrenciler3[1] = array("adSoyad" => "Mehmet3", "not" => "70");
        <br>$ogrenciler3[2] = array("adSoyad" => "Zehra3", "not" => "80");
        <hr>
        <br>$ogrenciler4 = array(
        <br> array("adSoyad" => "Fatih4", "not" => "60"),
        <br> array("adSoyad" => "Mehmet4", "not" => "70"),
        <br> array("adSoyad" => "Zehra4", "not" => "80") //Son dizi elemanına virgül eklenmiyor
        <br>);
        <hr>
        <br>$ogrenciler5 = array();
        <br>$ogrenciler5[0]["adSoyad"] = "Fatih5";
        <br>$ogrenciler5[0]["not"] = "60";
        <br>$ogrenciler5[1]["adSoyad"] = "Mehmet5";
        <br>$ogrenciler5[1]["not"] = "70";
        <br>$ogrenciler5[2]["adSoyad"] = "Zehra5";
        <br>$ogrenciler5[2]["not"] = "80";
    </code>
    <hr>
    <?php
    $ogrenciler = array(4, 6, 7, 8, 9, "ali", "ahmet", "seda");

    $ogrenciler2 = array();
    $ogrenciler2[] = 45;
    $ogrenciler2[] = "ali";

    echo $ogrenciler2[1] . "<br>"; //Ali
    print_r($ogrenciler2); //Array ( [0] => 45 [1] => ali )
    echo "<br>";
    foreach ($ogrenciler as $ogrenci) {
        echo "$ogrenci - "; //4 - 6 - 7 - 8 - 9 - ali - ahmet - seda -
    }

    //Çok Boyutlu Diziler
    $ogrenciler3 = array();
    $ogrenciler3[0] = array("adSoyad" => "Fatih3", "not" => "60");
    $ogrenciler3[1] = array("adSoyad" => "Mehmet3", "not" => "70");
    $ogrenciler3[2] = array("adSoyad" => "Zehra3", "not" => "80");

    $ogrenciler4 = array(
        array("adSoyad" => "Fatih4", "not" => "60"),
        array("adSoyad" => "Mehmet4", "not" => "70"),
        array("adSoyad" => "Zehra4", "not" => "80")
    );

    $ogrenciler5 = array();
    $ogrenciler5[0]["adSoyad"] = "Fatih5";
    $ogrenciler5[0]["not"] = "60";
    $ogrenciler5[1]["adSoyad"] = "Mehmet5";
    $ogrenciler5[1]["not"] = "70";
    $ogrenciler5[2]["adSoyad"] = "Zehra5";
    $ogrenciler5[2]["not"] = "80";

    echo "<br>" . $ogrenciler5[0]["adSoyad"]; //Fatih5
    echo "<hr>";

    foreach ($ogrenciler4 as $ogrenci4) {
        echo "<br>" . $ogrenci4["adSoyad"] . " - " . $ogrenci4["not"];
        echo "<br>";
    }

    ?>
</body>

</html>