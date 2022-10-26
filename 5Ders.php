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
        <h3>PHP'de Kullanilan Operatörler</h3>
        <h5>Aritmetik, Atama, Bileşik Atama, Birleştirme, Artırma, Azaltma, Karşılaştırma, Mantıksal</h5>
        <br>Aritmetik : Toplama + ,Çıkarma - , Çarpma *, Bölme /, Mod Alma %,
        <br>Atama : Eşittir =
        <br>Bileşik Atama : Birleştir ata.= , Topla ata +=, Çıkar ata -=, Çarp ata *=, Böl ata /=, Mod Al ata %=
        <br>Birleştirme : Nokta.
        <br>Artırma : ++ , +=1 , $degisken=$degisken+1, ++$degisken
        <br>Azaltma : -- , -=1 , $degisken=$degisken-1, --$degisken
        <br>Karşılaştırma : Eşittir ==, Denktir ===, Eşit Değildir !=, Farklıdır <>, Küçüktür <, Büyüktür> , Küçük veya Eşit <=, Büyük veya Eşit>=
                    <br>
                    Mantıksal : && AND, || OR, ! NOT
                    <br>Değişkenin değerini taşımak için cift tırnak("") kullanılmalıdır.
                    <br>Matematik önceği geçerlidir Parantez Çarpma Bölme Toplama Çıkarma
                    <?php
                    $metin = "esma sahra balcı";
                    $bul = strstr($metin, "at");
                    echo $bul == true ? "Bulundu" : "Metin Bulunamadı";
                    ?>
    </div>
</body>

</html>