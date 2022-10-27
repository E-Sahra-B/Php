<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 1202px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>If - Else ve Switch - Case Kontrol Yapilari</h3>
        <code>
            <br>if (Şart1) {
            <br>Şart1 geçerliyse
            <br>}elseif(Şart2){
            <br>Şart2 geçerliyse
            <br>}else{
            <br>Şartların hiçbiri geçerli değilse
            <br>}
        </code>
        <hr>
        <code>
            echo $değişken == Kontrol ? "Doğruysa" : "Yanlışsa";
        </code>
        <hr>
        <code>
            <br>switch (Kontrol edilecek değişken) {
            <br> case Karşılaştırma1:
            <br> echo "Karşılaştırma1 dogruysa çalışacak alan";
            <br> break;
            <br> default:
            <br> echo "Hiçbiri değilse çalışacak alan";
            <br> break;
            <br>}
        </code>
        <?php
        echo "<hr><br><br>";
        $cinsiyet = "Erkek";
        $yas = 17;
        echo "Cinsiyet : $cinsiyet <br>Yaş : $yas<br>";
        if ($cinsiyet == "Erkek" && $yas >= 18) {
            echo "İçeri girebilirsiniz";
        } elseif ($cinsiyet == "Erkek" && $yas < 18) {
            echo "Yaş kriteri sağlanamadı";
        } elseif ($cinsiyet != "Erkek") {
            echo "Sadece Erkekler";
        } else {
            echo "Hata oluştu";
        }
        echo "<hr><br>";
        $sayi1 = 20;
        $sayi2 = 30;
        $islem = "topla";
        echo "Sayı 1 : $sayi1 <br>Sayı 2 : $sayi2<br>İşlem : $islem<br>";
        switch ($islem) {
            case "topla":
                $sonuc = $sayi1 + $sayi2;
                echo "İşlem sonucu : $sonuc";
                break;
            case "cikar":
                $sonuc = $sayi1 - $sayi2;
                echo "İşlem sonucu : $sonuc";
                break;
            default:
                echo "Hatalı islem";
                break;
        }
        ?>
    </div>
</body>

</html>