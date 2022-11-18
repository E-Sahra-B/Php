<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurucu Metotlar, Yıkıcı Metotlar, Statik Metotlar</title>
</head>

<body>
    <h3>Kurucu Metotlar, Yıkıcı Metotlar, Statik Metotlar</h3>

    <hr>
    <?php
    class Ogrenciler
    {
        private $adSoyad = "esb";
        private $tcKimlik = "12345678901";

        // public function __construct()
        // {
        //     echo "$this->adSoyad<br>$this->tcKimlik";
        // }
        public function __construct($adSoyad, $tcKimlik)
        {
            echo "$adSoyad<br>$tcKimlik";
        }
        public function __destruct()
        {
            echo "nesne silindi";
        }
    }
    //$ogrenci = new Ogrenciler();
    //$ogrenci = new Ogrenciler("esma sahra", "12345678901");

    class Dosya
    {
        private $dosya;
        private $dosyaAd;
        private $dosyaBoyut;

        public function __construct($ad)
        {
            $this->dosyaAd = $ad;
            $this->dosya = fopen($this->dosyaAd, "rbt");
            $this->dosyaBoyut = filesize($this->dosyaAd);
        }

        public function islem()
        {
            return fread($this->dosya, $this->dosyaBoyut);
        }

        public function __destruct()
        {
            fclose($this->dosya);
        }
    }
    $icerik = new Dosya("dosya.txt");
    //echo $icerik->islem();

    class Students
    {
        static $studentCount = 50;

        public static function student()
        {
            // return self::$studentCount;//50
            return "Ögrenci Sayısı : " . self::$studentCount; //Ögrenci Sayısı : 50
        }
    }

    //echo Students::$studentCount; //50
    echo Students::student(); //metot çağırma Ögrenci Sayısı : 50
    ?>
</body>

</html>