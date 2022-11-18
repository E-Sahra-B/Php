<?php
function yukle($sinif)
{
    $adres = __DIR__ . "/cls/" . $sinif . ".class.php";
    require_once($adres);
}
spl_autoload_register("yukle");
