<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya Yükleme işlemleri</title>
</head>

<body>
    <h3>Dosya Yükleme işlemleri</h3>
    <br>✯ PHP Dosya Yükleme İşlemleri
    <br>✯ PHP İle Tek Dosya Yükleme
    <br>✯ PHP İle Çoklu Dosya Yükleme
    <br>
    <hr>
    <h3>HTML FORM YAPISI</h3>
    <p>Form İşlemleri konusunda anlatıldığı üzere HTML ile bir dosya yükleme formu oluşturulurken,
        <br>
        < form> etiketi içerisinde "enctype" parametresinde mutlaka <b>"multipart/form-data"</b> değeri kullanılmalı ve
            güvenli bir gönderim işlemi için de "method" parametresinde "post" değeri kullanılmalıdır.
    </p>

    <h3>$_FILES KÜRESEL DEĞİŞKENİ</h3>
    <table>
        <tr>
            <th>İndis</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>name</td>
            <td>Yüklenen dosyanın adı</td>
        </tr>
        <tr>
            <td>type</td>
            <td>Yüklenen dosyanın veri (mime) türü</td>
        </tr>
        <tr>
            <td>tmp_name</td>
            <td>Yüklenen dosyanın geçici saklandığı konum</td>
        </tr>
        <tr>
            <td>error</td>
            <td>Dosya yükleme sırasında oluşan hata kodu</td>
        </tr>
        <tr>
            <td>size</td>
            <td>Yüklenen dosyanın bayt türünden boyutu</td>
        </tr>

    </table>
    <hr>
    <!-- ------------------------------------------------------------------------------------
        < ?php
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    //    Array
    //(
    //    [dosya] => Array
    //        (
    //            [name] => sss.jpg
    //            [type] => image/jpeg
    //            [tmp_name] => C:\wamp64\tmp\php7760.tmp
    //            [error] => 0
    //            [size] => 66183
    //        )
    //
    //)
    //echo $_FILES["dosya"]["size"]; //dosya input file name'deki isim size istenilen bilgi çıktı : 66183
    //$dosya = $_FILES["dosya"]["tmp_name"]; // Geçici dosya konumu
    //$yeniad = $_FILES["dosya"]["name"]; // Dosyanın orijinal adı
    //if (move_uploaded_file($dosya, $yeniad)) { // Dosya yüklendiyse
    //    echo "<br>Dosya Yüklemesi <br>
    //    <img src='$yeniad' height='100'>
    //    <br>";
    //} else { // Dosya yüklenmediyse
    //    echo "Hata oluştu";
    //}
    ?> -->
    <!-- <form action="23ders.php" method="post" enctype="multipart/form-data">
        Yüklenecek Dosya: <input type="file" name="dosya">
        <input type="submit" name="dugme" value="Yükle">
    </form> ----------------------------------------------------------- -->

    <!-- -------------------------------------------------------------
    < ?php
    //ÇOKLU GÖNDERIM
    //if ($_FILES) { // Formdan dosya gönderimi yapıldıysa

    // foreach ($_FILES["dosya1"]["name"] as $i => $name) {
    //     if (move_uploaded_file($_FILES["dosya1"]["tmp_name"][$i], $name)) {
    //         echo "<br>Dosya Yüklendi :  " . $_FILES["dosya1"]["name"][$i];
    //     } else {
    //         echo "Dosya Yüklenemedi :  " . $_FILES["dosya1"]["name"][$i];
    //     }
    // }

    // } else { // Formdan herhangi bir dosya gönderimi yapılmadıysa
    //     echo "
    //     <form method='post' action='#' enctype='multipart/form-data'>
    //     Dosya 1: <input type='file' name='dosya[]'><br>
    //     Dosya 2: <input type='file' name='dosya[]'><br><br>
    //     <input type='submit' name='yukle' value='Yükle'>
    //     </form>
    //     ";
    // }
    ?>
    <h3>input Name değerinden sonra [] ve multiple</h3>
    <form action="23ders.php" method="post" enctype="multipart/form-data">
        Yüklenecek Dosya: <input type="file" name="dosya1[]" multiple>
        <input type="submit" name="dugme" value="Yükle">
    </form>
    <hr><br>
------------------------------------------------------------------------------------------- -->



    <form action="23ders.php" method="post" enctype="multipart/form-data">
        Resim: <input type="file" name="dosya2">
        <input type="submit" name="dugme" value="Yükle">
    </form>
    <?php
    $dosya = $_FILES["dosya2"]["tmp_name"];
    $isim = $_FILES["dosya2"]["name"];

    //$kontrol = "image/jpeg"; için 
    //if ($kontrol == $_FILES["dosya2"]["type"])

    $kontrol = array("image/jpeg", "image/jpg", "image/gif", "image/png");
    if (in_array($_FILES["dosya2"]["type"], $kontrol)) { // Dosya türüne izin verildiyse
        if (move_uploaded_file($dosya, $isim)) { // Dosya yüklendiyse
            echo "Dosya Yüklemesi Başarılı!";
        } else { // Dosya yüklenmediyse
            echo "Dosya Yüklemesi Başarısız!";
        }
    } else { // Dosya türüne izin verilmediyse
        echo "Yalnızca Resim Formatında Dosyalar Yükleyebilirsiniz!";
    }
    ?>

</body>

</html>