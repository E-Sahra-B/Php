<?php
ini_set('error_reporting', 0);
$s1 = $_POST["s1"];
$s2 = $_POST["s2"];
$islem = $_POST["islem"];
class Hesap
{
    private $sayi1;
    private $sayi2;
    private $islem;
    private $sonuc;
    public function __construct($s1, $s2, $islem)
    {
        $this->sayi1 = $s1;
        $this->sayi2 = $s2;
        $this->islem = $islem;
        //echo $this->hesap();
        $this->hesap();
    }
    private function hesap()
    {
        switch ($this->islem) {
            case 'toplama':
                $this->sonuc = $this->sayi1 + $this->sayi2;
                break;
            case 'cikarma':
                $this->sonuc = $this->sayi1 + $this->sayi2;
                break;
            case 'carpma':
                $this->sonuc = $this->sayi1 + $this->sayi2;
                break;
            case 'bolme':
                $this->sonuc = $this->sayi1 + $this->sayi2;
                break;
            default:
                $this->sonuc = "Hatalı işlem";
                break;
        }
        return $this->sonuc();
    }
    public function sonuc()
    {
        //return 'Sonuç : ' . $this->sonuc;
        return $this->sonuc;
    }
}
$hesapla = new Hesap($s1, $s2, $islem);
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
</head>

<body>
    <form action="hesapMakinesi.php" method="post">
        Sayı 1 : <input type="text" name="s1" id=""><br><br>
        Sayı 2 : <input type="text" name="s2" id=""><br><br>
        İşlem : <select name="islem" id="">
            <option value="toplama">Toplama</option>
            <option value="cikarma">Çıkarma</option>
            <option value="carpma">Çarpma</option>
            <option value="bolme">Bölme</option>
        </select><br><br>
        <input type="submit" value="Hesapla"><br><br>
    </form>
    <?php
    echo "İşlem Sonucu : " . $hesapla->sonuc();
    ?>
</body>

</html>