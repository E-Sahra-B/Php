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
    <title>Döviz Hesaplama</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h3>Döviz Hesaplama</h3>
    <hr><br>
    <?php
    require_once 'baglan.php';
    $sorgu = $baglan->query("select * from doviz", PDO::FETCH_ASSOC);
    echo "<table border='1' width='100%'>
<tr align='center'>
<th>Döviz Türü</th>
<th>Döviz Kuru</th>
</tr>";
    foreach ($sorgu as $satir) {
        echo "
    <tr align='center'>
<td>" . $satir['doviz'] . "</td>
<td>" . $satir['deger'] . "</td>

</tr>";
    }
    echo "</table>";
    echo "<form action='hesapla.php' method='post'>
    <br><br>Elinizdeki Türk Lirasını Giriniz : <br><input type='text' name='tl'>
    <br><br><input type='submit' value='Hesapla'>
    </form>";
    ?>
</body>

</html>