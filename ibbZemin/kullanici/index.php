<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="kontrol.php" method="post">       
    Kullanıcı:<br>
    <input type="text" name="kullanici"><br><br>
    Parola:<br>
    <input type="text" name="parola"><br><br>

    <input type="hidden" name="islem" value="giris">

    <input type="submit" value="Giriş Yap">
</form>

<br><br><hr><br><br>

<form action="kontrol.php" method="post"> 
    Ad Soyad:<br>
    <input type="text" name="adsoyad"><br><br>      
    Kullanıcı:<br>
    <input type="text" name="kullanici"><br><br>
    Parola:<br>
    <input type="text" name="parola"><br><br>

    <input type="hidden" name="islem" value="kaydet">

    <input type="submit" value="Üye Kaydet">
</form>

</body>
</html>