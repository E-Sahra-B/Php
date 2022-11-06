<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="text-align: center">
    <?php
    include_once("menu.php");
    ?>
    <form method="post" action="kontrol.php">
        <b>Adı Soyadı : </b><br>
        <input type="text" name="adsoyad">
        <br><br>
        <b>E-Mail Adresi : </b><br>
        <input type="email" name="email">
        <br><br>
        <b>Telefon Numarası : </b><br>
        <input type="tel" name="telefon">
        <br><br>
        <input type="submit" value="Kaydet">
    </form>
    <br><br><br>
    <?php
    $dosya = fopen("rehber.txt", "rb");
    //$icerik = fread($dosya, filesize("rehber.txt")); //dosyanın tamamı kadar oku
    //$icerik = fread($dosya, 0); 
    //$icerik = fread($dosya, 1024);
    //echo $icerik;

    //while (!feof($dosya)) {
    //    $icerik = fgets($dosya);
    //    echo $icerik . "<br>";
    //}
    //fclose($dosya);

    $satirlar = array();
    while (!feof($dosya)) {
        $satirlar[] = fgets($dosya);
    }
    fclose($dosya);

    //foreach ($satirlar as $satir) {
    //    echo $satir . "<br>";
    //}
    //setcookie("icerik", $satirlar, time() + 3600);
    echo " <table border='1' width='100%'>
<tr>
    <td>S.No</td>
    <td>Adı Soyadı</td>
    <td>E-Mail Adresi</td>
    <td>Telefon No</td>
</tr>";
    $sayac = 0;
    foreach ($satirlar as $satir) {
        $veri = explode(" | ", $satir); //kayıy ederken boşluklu olduğu için bölerken boşluk ekledik
        //if ($veri[0] != "") { // \n yaptığımız için son boş satırı boşsa gösterme
        if (count($veri) == 3) {
            $sayac++;
            echo "<tr>
            <td>$sayac</td>
            <td>$veri[0]</td>
            <td>$veri[1]</td>
            <td>$veri[2]</td>
        </tr>";
        }
    }
    echo "</table>";
    ?>


</body>

</html>