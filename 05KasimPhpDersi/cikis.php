<?php
session_start();
session_destroy();
setcookie("cerez", "", time() - 1);
//unset($_SESSION["oturum"]);
//$_SESSION["oturum"] = "var";
//setcookie("cerez", "var", time() + 60 * 60);

header("Location: index.php");
