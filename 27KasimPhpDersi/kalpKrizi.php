<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kalp Krizi Risk Hesaplama</title>
</head>

<body>
    <form action="kalpkrizi" method="post">
        Sigara İçiyor mu? <input type="text" name="sigara"><br><br><br>
        Ailesinde Kalp Krizi Geçiren Kimse Var Mı? <input type="text" name="kalp"><br><br><br>
        Alkol Kullanıyor Mu ? <input type="text" name="kalpAlkol"><br><br><br>
        Yaşı 40 üzerinde Mi ? <input type="text" name="kirk"><br><br><br>
        Alkol Kullanıyor Mu ? <input type="text" name="kirkAlkol"><br><br><br>
        <input type="submit" value="Hesapla">

    </form>
    <?php
    error_reporting(0);
    $sigara = $_POST["sigara"];
    $kalp = $_POST["kalp"];
    $kalpAlkol = $_POST["kalpAlkol"];
    $kirk = $_POST["kirk"];
    $kirkAlkol = $_POST["kirkAlkol"];
    if ($sigara == "hayır" && $kalp == "hayır" && $kalpAlkol == "hayır") {
        echo "Kalp Krizi Geçirme oranı %1";
    } else if ($sigara == "hayır" && $kalp == "hayır" && $kalpAlkol == "evet") {
        echo "Kalp Krizi Geçirme oranı %20";
    } else if ($sigara == "hayır" && $kalp == "evet") {
        echo "Kalp Krizi Geçirme oranı %70";
    } else if ($sigara == "evet" && $kirk == "evet" && $kirkAlkol == "evet") {
        echo "Kalp Krizi Geçirme oranı %90";
    } else if ($sigara == "evet" && $kirk == "evet" && $kirkAlkol == "hayır") {
        echo "Kalp Krizi Geçirme oranı %60";
    } else if ($sigara == "evet" && $kirk == "hayır") {
        echo "Kalp Krizi Geçirme oranı %30";
    }
    ?>
</body>

</html>