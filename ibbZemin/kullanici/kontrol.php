<?php
    require_once 'baglan.php';

    $islem = filter_var($_POST["islem"], FILTER_SANITIZE_STRING);

    if (!in_array($islem,['giris','kaydet'])) {
        die('Yetkisiz Erişim!');
    }

    if ($islem == 'giris') {
        $kullanici = filter_var(trim($_POST["kullanici"]), FILTER_SANITIZE_STRING);
        $parola = filter_var(trim($_POST["parola"]), FILTER_SANITIZE_STRING);

        $sorgu = $baglan->prepare("select * from kullanici where (kullanici=?)");
        $sonuc = $sorgu->execute(array($kullanici));
        $kayit = $sorgu->fetch();

        if (password_verify($parola, $kayit["parola"])) {
            echo "Giriş Başarılı!";
        } else {
            echo "Hatalı Kullanıcı Adı / Parola!";
        }
    }

    else if ($islem == 'kaydet') {
        $adsoyad = filter_var(trim($_POST["adsoyad"]), FILTER_SANITIZE_STRING);
        $kullanici = filter_var(trim($_POST["kullanici"]), FILTER_SANITIZE_STRING);
        $parola = filter_var(trim($_POST["parola"]), FILTER_SANITIZE_STRING);

        $parola = password_hash($parola, PASSWORD_DEFAULT);

        $sorgu = $baglan->prepare("insert into kullanici values (?,?,?,?)");
        $sonuc = $sorgu->execute(array(NULL, $adsoyad, $kullanici, $parola));

        if ($sonuc) {
            echo "<script> alert('Kayıt Başarılı!'); window.location.href='index.php'; </script>
            <noscript> <b>Kayıt Başarılı!</b><br><a href='index.php'>Ana Sayfa</a> </noscript>";
            exit;
        } else {
            echo "<script> alert('Kayıt Başarısız!'); window.location.href='index.php'; </script>
            <noscript> <b>Kayıt Başarısız!</b><br><a href='index.php'>Ana Sayfa</a> </noscript>";
            exit;
        }
    }

    
?>