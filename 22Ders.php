    <!DOCTYPE html>
    <html lang="tr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form işlemleri (Get ve Post)</title>
    </head>

    <body>
        <h3>Form işlemleri (Get ve Post)</h3>
        <br>✯ PHP'de Form İşlemleri
        <br>✯ PHP ile Get Metotunun Kullanımı
        <br>✯ PHP ile Post Metotunun Kullanımı
        <br>
        <hr>
        <!-- <form name="iletisim" action="22ders.php" method="get">
        Ad Soyad: <input type="text" name="adsoyad">
        <input type="submit" name="dugme" value="Gönder">
    </form> -->
        <br>
        <?php
        $adSoyad1 = $_POST["adsoyad1"];
        if ($adSoyad1 != "") {
            echo "Ad Soyad : $adSoyad1";
        } else { //kapanışı 45.satır
        ?>
            <form action="22ders.php" method="post">
                Ad Soyad: <input type="text" name="adsoyad1">
                <input type="submit" name="dugme1" value="Gönder">
            </form>
            <!--
                //get ile gönderince http://localhost/php/22ders.php?adsoyad=esb&dugme=G%C3%B6nder
                // $adSoyad = $_GET["adsoyad"];
                // echo "Adı Soyad:  $adSoyad <br>";
                // echo "Adı Soyadı:"  . $_GET["adsoyad"];

                //adres çubuğunda veri yok
                // $adSoyad1 = $_POST["adsoyad1"];
                // echo "<br>Adı Soyad:  $adSoyad1 <br>";
                // echo "Adı Soyadı : "  . $_POST["adsoyad1"];
                ?> -->
        <?php
        }
        ?>
    </body>

    </html>