<?php

require_once 'SunDB.php';

define('DB_HOST', 'localhost');
define('DB_USER', 'mehmet');
define('DB_PASS', '12345');
define('DB_NAME', 'eii_proje');

$baglan = new SunDB(null, DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>