<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Parametresiz ve Parametreli Fonksiyonlar</h3>
    <?php
    function yazdir()
    {
        echo "Esma Sahra Balcı";
    }
    yazdir();
    echo "-------------------------";
    yazdir();
    echo "-------------------------";
    yazdir();

    function yazdir1()
    {
        for ($i = 1; $i <= 5; $i++) {
            echo "$i - Esma Sahra Balcı <br>";
        }
    }
    echo "<hr>";
    yazdir1();
    echo "<hr>";
    yazdir1();
    echo "<hr>";

    function yazdir2($gelenSayi)
    {
        for ($i = 1; $i <= $gelenSayi; $i++) {
            echo "$i - Esma Sahra Balcı <br>";
        }
    }
    yazdir2(4);
    echo "<hr>";

    function yazdir3($gelenSayi, $isim)
    {
        for ($i = 1; $i <= $gelenSayi; $i++) {
            echo "$i - $isim  <br>";
        }
    }
    yazdir3(3, "Esma Sahra Balcı");
    echo "<hr>";

    function yazdir4($gelenSayi = 0, $isim = "")
    {
        for ($i = 1; $i <= $gelenSayi; $i++) {
            echo "$i - $isim  <br>";
        }
    }
    yazdir4(2);
    echo "<hr>";

    function yazdir5()
    {
        global $globalDegisken;
        echo $globalDegisken;
    }
    $globalDegisken = "Merhaba Dünya";
    yazdir5();
    echo "<hr>";

    function topla($sayi1 = 0, $sayi2 = 0)
    {
        $toplama = $sayi1 + $sayi2;
        return $toplama;
    }
    $islemSonucu = topla(15, 25);
    echo "İşlem Sonucu: " . $islemSonucu . "<hr>";

    function icToplama()
    {
        $toplama = 20 + 50;
        return $toplama;
    }
    $icToplamaSonucu = icToplama();
    echo "İşlem Sonucu: " . $icToplamaSonucu . "<hr>";
    ?>
</body>

</html>