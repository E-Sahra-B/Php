<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Örnek: Matematik 4 işlem Uygulamasi</h3>
    <?php
    function hesap($sayi1 = 0, $sayi2 = 0, $islem = "")
    {
        switch ($islem) {
            case "+":
                $sonuc = $sayi1 + $sayi2;
                $mesaj = "Toplama Sonucu ($sayi1 + $sayi2) = " . $sonuc;
                break;
            case "-":
                $sonuc = $sayi1 - $sayi2;
                $mesaj = "Çıkarma Sonucu ($sayi1 - $sayi2) = " . $sonuc;
                break;
            case "*":
                $sonuc = $sayi1 * $sayi2;
                $mesaj = "Çarpma Sonucu ($sayi1 * $sayi2) = " . $sonuc;

                break;
            case "/":
                $sonuc = $sayi1 / $sayi2;
                $mesaj = "Bölme Sonucu ($sayi1 / $sayi2) = " . $sonuc;

                break;
            default:
                $mesaj = "Hatalı İşlem";
                break;
        }
        return $mesaj;
    }
    echo hesap(10, 6, "/");
    ?>
</body>

</html>