<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Küresel Değişkenler</title>
</head>

<body>
    <h3>Küresel Değişkenler</h3>
    <br>✯ PHP'de Küresel Değişkenler
    <br>✯ Globals Küresel Değişkeni
    <br>✯ Server Küresel Değişkeni
    <br>✯ Env Küresel Değişkeni
    <br>✯ Request Küresel Değişkeni
    <br>✯ Cookie Küresel Değişkeni
    <br>✯ Session Küresel Değişkeni
    <br>✯ Get Küresel Değişkeni
    <br>✯ Post Küresel Değişkeni
    <br>✯ Files Küresel Değişkeni
    <hr>
    <br>PHP betik dilinde kullanılan 9 adet küresel değişken mevcuttur.
    <br> Küresel alanda bulunan tüm değişkenlere ulaşmak için <b>$GLOBALS</b> küresel değişkeni,
    <br>sunucu tarafında kullanılan bazı parametre ve bilgilere ulaşmak için <b>$_SERVER</b> küresel değişkeni,
    <br>ortam değişkenlerine ulaşmak için <b>$_ENV</b> küresel değişkeni,
    <br>Get, Post ve Cookie değişkenlerine toplu olarak ulaşmak için <b>$_REQUEST</b> küresel değişkeni,
    <br>çerezlerin yönetimini sağlamak için <b>$_COOKIE</b> küresel değişkeni,
    <br>oturum yönetimini sağlamak için <b>$_SESSION</b> küresel değişkeni,
    <br>adres satırından gelen verileri okumak için <b>$_GET</b> küresel değişkeni,
    <br>Post metotu ile gelen verileri okumak için <b>$_POST</b> küresel değişkeni
    <br>
    <hr>
    <h3>$_SERVER DEĞİŞKENİ</h3>
    <table>
        <tr>
            <th>İndis</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>SERVER_ADDR</td>
            <td>Sayfanın çalıştığı sunucunun IP adresi</td>
        </tr>
        <tr>
            <td>SERVER_NAME</td>
            <td>Sayfanın çalıştığı sunucunun adı</td>
        </tr>
        <tr>
            <td>SERVER_SOFTWARE</td>
            <td>Sayfanın çalıştığı sunucunun yazılım sürümü</td>
        </tr>
        <tr>
            <td>SERVER_PROTOCOL</td>
            <td>Sayfanın başlık protokolünün adı ve sürümü</td>
        </tr>
        <tr>
            <td>REQUEST_METHOD</td>
            <td>Sayfaya erişim için kullanılan istek yöntemi</td>
        </tr>
        <tr>
            <td>REQUEST_TIME</td>
            <td>Sayfaya erişim isteğinin yapılma zamanı (Unix Epoch formatında)</td>
        </tr>
        <tr>
            <td>QUERY_STRING</td>
            <td>Sayfanın adres bilgisinde bulunan değişkenler</td>
        </tr>
        <tr>
            <td>DOCUMENT_ROOT</td>
            <td>Sayfanın çalıştığı dizinin tam adresi</td>
        </tr>
        <tr>
            <td>HTTP_ACCEPT_CHARSET</td>
            <td>Sayfaya erişim isteğinin yapıldığı karakter seti</td>
        </tr>
        <tr>
            <td>HTTP_HOST</td>
            <td>Sayfanın çalıştığı sunucunun adresi</td>
        </tr>
        <tr>
            <td>HTTP_REFERER</td>
            <td>Sayfaya yönlendirme yapan önceki sayfanın adresi</td>
        </tr>
        <tr>
            <td>HTTP_USER_AGENT</td>
            <td>Sayfaya erişilen tarayıcı bilgisi</td>
        </tr>
        <tr>
            <td>REMOTE_ADDR</td>
            <td>Sayfaya erişilen bilgisayarın IP adresi</td>
        </tr>
        <tr>
            <td>REMOTE_HOST</td>
            <td>Sayfaya erişilen bilgisayarın adı</td>
        </tr>
        <tr>
            <td>REMOTE_PORT</td>
            <td>Sayfaya erişilen bilgisayarın kullandığı port numarası</td>
        </tr>
        <tr>
            <td>SCRIPT_FILENAME</td>
            <td>Sayfanın çalıştığı dizinin mutlak adresi</td>
        </tr>

    </table>
    <?php
    function karsilama()
    {
        //echo "Merhaba $adSoyad"; //ekrana yazmaz
        echo "<br>Merhaba" . $GLOBALS["adSoyad"];
    }
    $adSoyad = "Esma Sahra Balcı";
    karsilama();

    echo "<br>IP adresiniz : " . $_SERVER['REMOTE_ADDR'];
    echo "<br>Tarayıcınız : " . $_SERVER['HTTP_USER_AGENT'];
    // echo $_REQUEST["adSoyad"]; //Uygulamada güvenlik açıklarına sebep oluyor $_GET, $_POST veya $_COOKIE hangisi ile geldiğini bilmiyorsak
    // test.php isimli bir dosyaya kayıt ettikten sonra, adres çubuğundan "test.php?konu=Request"
    setcookie("ziyaretci", "Esma Sahra BALCI", time() + 360); //360 saniye
    echo "<br>COOKIE : Merhaba" . $_COOKIE["ziyaretci"]; //sayfa yenilenince çalışıyor . Cookie'ler kullanıcının bilgisayarında çalışır

    session_start();
    $_SESSION["ziyaretci1"] = "E.Sahra Balcı";
    echo "<br>SESSION : Merhaba " . $_SESSION["ziyaretci1"]; //sunucuda çalışır

    // 19ders.php?ad=esma Sahra&soyad=Balcı
    $ad = $_GET["ad"]; // $_GET ile veri okuması
    $soyad = $_GET["soyad"]; // $_GET ile veri okuması
    echo "<br> GET : Adınız: $ad - Soyadınız: $soyad.<br><hr>"; // Ekrana yazdırma

    // if ($_POST) { // Form gönderimi yapıldı mı?
    //     $adsoyad = $_POST["adsoyad"]; // $_POST ile veri okuması
    //     echo "Post : Merhaba $adsoyad!"; // Ekrana yazdırma
    // } 
    // HTML Formu
    // echo "
    //     <form method='post' action='#'>
    //     Ad Soyad: <input type='text' name='adsoyad'>
    //     <input type='submit' name='gonder' value='Gönder'>
    //     </form>";

    //$_FILES değişkeni ile geriye dönen veriler bir dizi halinde saklanır ve bu verilere ulaşmak için dizinin
    //indis değerleri (name, type, tmp_name, error, size) kullanılır.
    if ($_FILES) { // Dosya gönderimi yapıldı mı?
        print_r($_FILES); // $_FILES ile yüklenen dosya bilgilerinin yazdırılması
    }
    // HTML Formu
    echo "
        <form method='post' action='#' enctype='multipart/form-data'>
        Dosya: <input type='file' name='dosya'>
        <input type='submit' name='yukle' value='Yükle'>
        </form>";
    ?>
</body>

</html>