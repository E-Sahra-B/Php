<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ile AJAX işlemleri</title>
</head>

<body style="text-align:center;">
    <h3>PHP ile AJAX işlemleri</h3>
    <br>✯ JavaScript, JQuery ve Ajax
    <br>✯ Projelere JQuery Kütüphanesinin Eklenmesi
    <br>✯ PHP ve Ajax ile Dosya İçeriğini Okuma
    <br>✯ Ajax ile Get Metotunu Kullanarak Veri Gönderimi
    <br>✯ Ajax ile Post Metotunu Kullanarak Veri Gönderimi
    <hr>
    <div id="sonuc"></div>
    <br><br>
    Adı: <input type="text" id="ad">
    <br><br>
    Soyadı: <input type="text" id="soyad">
    <br><br>
    <button>Gönder</button>
    <?php
    ?>
    <!-- https://releases.jquery.com/ -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("button").click(function() {
                $.ajax({
                    // url: "deneme.txt",
                    // url: "kontrol.php?ad=" + $("#ad").val() + "&soyad=" + $("#soyad").val(),
                    cache: false, //cache tutmaması için
                    // type: "GET",
                    type: "POST",
                    url: "kontrol.php",
                    data: "ad=" + $("#ad").val() + "&soyad=" + $("#soyad").val(),
                    success: function(result) {
                        $("#sonuc").html(result);
                    },
                    error: function(xhr) {
                        $("#sonuc").html("Hata : " + xhr.status + " " + xhr.statusText);
                    }
                })
            });
        });
    </script>
</body>

</html>