<?php
function guvenlik($veri, $tip, $tur)
{
    if ($tip == "get") {
        if ($tur == "sayi") {
            $sonuc = filter_input(INPUT_GET, $veri, FILTER_SANITIZE_NUMBER_INT);
        } elseif ($tur == "email") {
            $sonuc = filter_input(INPUT_GET, $veri, FILTER_SANITIZE_EMAIL);
        } elseif ($tur == "url") {
            $sonuc = filter_input(INPUT_GET, $veri, FILTER_SANITIZE_URL);
        } elseif ($tur == "karakter") {
            $sonuc = filter_input(INPUT_GET, $veri, FILTER_SANITIZE_SPECIAL_CHARS);
        } else {
            $sonuc = filter_input(INPUT_GET, $veri,  FILTER_FLAG_STRIP_HIGH);
        }
    } else {
        if ($tur == "sayi") {
            $sonuc = filter_input(INPUT_POST, $veri, FILTER_SANITIZE_NUMBER_INT);
        } elseif ($tur == "email") {
            $sonuc = filter_input(INPUT_POST, $veri, FILTER_SANITIZE_EMAIL);
        } elseif ($tur == "url") {
            $sonuc = filter_input(INPUT_POST, $veri, FILTER_SANITIZE_URL);
        } elseif ($tur == "karakter") {
            $sonuc = filter_input(INPUT_POST, $veri, FILTER_SANITIZE_SPECIAL_CHARS);
        } else {
            $sonuc = filter_input(INPUT_POST, $veri,  FILTER_FLAG_STRIP_HIGH);
        }
    }
    return $sonuc;
    header("Location:index.php");
}
