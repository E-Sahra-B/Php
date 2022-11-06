<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hata Mesajlarini Yakalama ve Raporlama</title>
</head>

<body>
    <h3>Hata Mesajlarini Yakalama ve Raporlama</h3>
    <br>✯ PHP Hata Mesajları (E_Error)
    <br>✯ PHP Uyarı Mesajları (E_Warning, E_Notice)
    <br>✯ PHP ile Hata Mesajlarını Yakalama (Exception)
    <br>✯ PHP ile Hata Mesajlarını Raporlama (Try - Catch)
    <hr>
    <br>Ölümcül hatalar (E_Error) çalışma tamamen durur
    <br>Çalışma anı uyarıları(E_Warning) çalışma etkilemez ekranda hata bildirimi
    <br>Çalışma anı bildirimleri (E_Notice) çalışma etkilemez ekranda hata bildirimi
    <hr>
    <br>error_reporting(0); //Tüm hata mesajları gizlenir
    <br>error_reporting(E_ALL); //Tüm hata mesajları gösterilir
    <br>error_reporting(-1); //Tüm hata mesajları gösterilir
    <br>error_reporting(E_ERROR | E_WARNING | E_PARSE); //Belirtilen mesajlar gösterilir.
    <hr>
    <?php
    //error_reporting(0); //Warning: Division by zero in artık gözükmez
    $sayi1 = 10;
    $sayi2 = 0;
    //echo $sayi1 / $sayi2;

    // try {
    //     if (!$sonuc = $sayi1 / $sayi2) {
    //         throw new Exception("Hata oluştu");
    //     }
    //     echo $sayi1 / $sayi2;
    // } catch (Exception $hata) {
    //     echo $hata->getMessage();
    //     //print_r($hata);
    // }

    try {
        if ($sonuc = $sayi1 / $sayi2) {
            echo $sonuc;
            throw new Exception("Hata oluştu"); //bu yazı hata yazı altında gözüktü
        }
        echo $sonuc;
    } catch (DivisionByZeroError $hata) {
        echo "Sıfıra Bölünemez";
    } catch (\Throwable $hata) {
        echo $hata->getMessage() . "<br>";
    }

    // try {
    //     if (!($sonuc = $sayi1 / $sayi2)) {
    //         throw new Exception("Hata oluştu");
    //     } else {
    //         throw new Exception("Hata else oluştu"); //bu yazı warning içinde gözüktü
    //     }
    // } catch (DivisionByZeroError $hata) {
    //     echo $hata->getMessage() . "<br>";
    //     echo "Sıfıra Bölünemez";
    // }



    ?>
</body>

</html>