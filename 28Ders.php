<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ile E-posta Gönderme</title>
</head>

<body>
    <h3>PHP ile E-posta Gönderme</h3>
    <br>✯ PHP ile E-posta Gönderme (Mail)
    <br>✯ PHP E-mail Gönderim Sınıfı (PhpMailer)
    <hr>
    <?php

    //$kime = "blank@blank.com"; // Gönderilecek adres
    //$konu = "Php Mail"; // E-posta konusu
    //$mesaj = "Örnek Mesaj İçeriği..."; // E-posta metni
    ////if (mail($kime, $konu, $mesaj)==true)) {
    //if (mail($kime, $konu, $mesaj)) { // E-posta gönderildiyse
    //    echo "E-posta Gönderildi.";
    //} else { // E-posta gönderilmediyse
    //    echo "Hata Oluştu.";
    //}

    //DETAYLI E-POSTA GÖNDERME
    $kime = "blank@blank.com";
    $konu = "Php Mail";
    $mesaj = "<b>Örnek</b> <i>Mesaj</i> <s>İçeriği</s><a href=''>Google</a>...";
    // $detay = "Mime-Version: 1.0\r\n"; // Versiyon bilgisi
    // $detay .= "Content-Type: text/html; Charset=UTF-8\r\n"; // Karakter seti
    // $detay .= "From: blank@blank.com\r\n"; // E-posta gönderen adresi
    // $detay .= "Reply-To: blank@blank.com\r\n"; // E-posta yanıt adresi
    // $detay .= "Cc: blank@blank.com\r\n"; // E-posta bilgilendirme kopyası
    // $detay .= "Bcc: blank@blank.com\r\n"; // E-posta gizli kopyası
    // $detay .= "X-Mailer: PHP/" . phpversion(); // PHP sürüm bilgisi
    $detay = "Mime-Version: 1.0\r\n
    Content-Type: text/html; Charset=UTF-8\r\n
    From: blank@blank.com\r\n
    Reply-To: blank@blank.com\r\n
    Cc: blank@blank.com\r\n
    Bcc: blank@blank.com\r\n
    X-Mailer: PHP/" . phpversion();
    if (mail($kime, $konu, $mesaj, $detay)) {
        echo "E-posta Gönderme İşlemi Başarılı!";
    } else {
        echo "E-posta Gönderme İşlemi Başarısız!";
    }

    //PhpMailer Kütüphane
    ?>
</body>

</html>