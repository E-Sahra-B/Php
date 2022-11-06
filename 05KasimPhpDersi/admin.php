<?php
session_start();
if (isset($_SESSION["oturum"]) && isset($_COOKIE["cerez"])) {
    if ($_SESSION["oturum"] != "var" && $_COOKIE["cerez"] != "var") {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Merhaba Admin <br><br>
    <a href="cikis.php">Çıkış Yap</a>
</body>

</html>