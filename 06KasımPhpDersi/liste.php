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
    <?php
    $sayac = 0;
    $satirlar = array();
    $dosya = fopen("rehber.txt", "rb");

    while (!feof($dosya)) {
        $satirlar[] = fgets($dosya);
    }
    fclose($dosya);

    echo " <table border='1' width='100%'>
<tr>
    <td>S.No</td>
    <td>Adı Soyadı</td>
    <td>E-Mail Adresi</td>
    <td>Telefon No</td>
</tr>";

    foreach ($satirlar as $satir) {
        $veri = explode(" | ", $satir);
        if (count($veri) == 3) {
            $sayac++;
            echo "
        <tr>
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