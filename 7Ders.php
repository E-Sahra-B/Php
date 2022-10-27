<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Örnek: En Küçük ve En Büyük Sayiyi Bulma</h3>
    <?php

    $sayi1 = 10;
    $sayi2 = 7;
    $sayi3 = 21;
    echo "Sayılar : $sayi1 - $sayi2 - $sayi3 <br><br>";
    if ($sayi1 >= $sayi2 && $sayi1 >= $sayi3) {
        echo "En büyük Sayı1 = $sayi1 <br>";
    } elseif ($sayi2 >= $sayi1 && $sayi2 >= $sayi3) {
        echo "En büyük Sayı2 = $sayi2 <br>";
    } else {
        echo "En büyük Sayı3 = $sayi3 <br>";
    }

    if ($sayi1 <= $sayi2 && $sayi1 <= $sayi3) {
        echo "En küçük Sayı1 = $sayi1 <br>";
    } elseif ($sayi2 <= $sayi1 && $sayi2 <= $sayi3) {
        echo "En küçük Sayı2 = $sayi2 <br>";
    } else {
        echo "En küçük Sayı3 = $sayi3 <br>";
    }

    ?>
</body>

</html>