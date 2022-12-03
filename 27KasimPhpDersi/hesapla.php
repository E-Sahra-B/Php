<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesaplama</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    require_once 'baglan.php';

    $tl = $_POST["tl"];
    echo "<h4>Elinizdeki Türk Lirası Miktarı : $tl</h4> <br>
    <h3>Her bir dövizden alabileceğiniz miktarlar söyledir.</h3><br>";
    $sorgu = $baglan->query("select * from doviz", PDO::FETCH_ASSOC);
    echo "<br> <table border='1' width='100%'>
<tr align='center'>
<th>Döviz Türü</th>
<th>Döviz Kuru</th>
</tr>";
    foreach ($sorgu as $satir) {
        echo "
    <tr align='center'>
<td>" . $satir['doviz'] . "</td>
<td>" . $tl / $satir['deger'] . "</td>
</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>