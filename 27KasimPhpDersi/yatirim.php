<?php
require_once 'baglan.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Yatırım Robotu</title>
</head>

<body>
    <form action="yatirim.php" method="post">
        Ad Soyad Giriniz : <input type="text" name="adSoyad"><br>
        Risk İştahınız Giriniz<input type="number" name="risk" min="1" max="5"><br>
        <input type="submit" value="Hesapla">
    </form>
    <?php
    $sorgu = $baglan->query("select * from yatirim", PDO::FETCH_ASSOC);
    echo "<table border='1' width='100%'>
    <tr align='center'>
    <th>Risk İştahı</th>
    <th>Dolar( % )</th>
    <th>Avro( % )</th>
    <th>Altın( % )</th>
    <th>Gümüş( % )</th>
    <th>Faiz( % )</th>
    <th>Bitcoin( % )</th>
    </tr>";
    foreach ($sorgu as $satir) {
        echo "
        <tr align='center'>
        <td>" . $satir['risk'] . "</td>
        <td>" . $satir['dolar'] . "</td>
        <td>" . $satir['avro'] . "</td>
        <td>" . $satir['altin'] . "</td>
        <td>" . $satir['gumus'] . "</td>
        <td>" . $satir['faiz'] . "</td>
        <td>" . $satir['bitcoin'] . "</td>
        </tr>";
    }
    echo "</table>";
    ?>
</body>

</html>