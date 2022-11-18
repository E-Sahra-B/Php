<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sınıflar, Nesneler, Metotlar, Özellikler</title>
</head>

<body>
    <h3>Sınıflar, Nesneler, Metotlar, Özellikler</h3>
    <br>class Hayvan{ //class(sınıf)
    <br>
    <br> public $tuyRengi; //property(ozellik)
    <br> public $gozRengi;
    <br>
    <br> public function Yurume(){} //method(metot)
    <br> public function Kosma(){}
    <br>}
    <br>
    <br>$kedi=new Hayvan; //object(nesne)
    <br>$kopek=new Hayvan;

    <hr>
    <?php
    class Hayvan
    {
        public $tuyRengi;
        public $gozRengi;
        public function Yurume()
        {
        }
        public function Kosma()
        {
        }
    }
    $kedi = new Hayvan;
    $kopek = new Hayvan;
    class Ogrencilerr
    {
        public $adSoyad = "Esma Sahra Balcı";
        private $tcKimlik = "12345678901";
        protected $ogrenciNo = "1234";
        static $sinif = "Hazırlık";
        public const okul = "Anadolu Üniversitesi";

        public function Yazdir()
        {
            // return $this->adSoyad;
            // echo $this->adSoyad;
            $sonuc = "Ad Soyad : $this->adSoyad<br>
            Tc Kimlik : $this->tcKimlik<br>
            Ögrenci No : $this->ogrenciNo<br>
            Sınıf : $this->sinif ";
            return $sonuc;
        }
        public function Yazdir2($ad, $soyad, $tc)
        {
            //return $ad . " " . $soyad . " " . $tc;
            $this->adSoyad = "$ad $soyad";
            $this->tcKim = $tc;
            return "$this->adSoyad<br>$this->tcKim";
        }
    }
    //public veriye ulaşma
    // $ogrenci = new Ogrencilerr;
    // echo $ogrenci->adSoyad;

    //static veriye ulaşma
    // echo Ogrencilerr::$sinif;

    //sabitlerdeki veriye ulaşma
    // echo Ogrencilerr::okul;

    //function daki veriye ulaşma
    $ogrenci = new Ogrencilerr;
    // // echo $ogrenci->Yazdir();
    // // $ogrenci->Yazdir();
    // echo $ogrenci->Yazdir(); //$sonuc u yazdirma
    echo $ogrenci->Yazdir2("e", "b", "10987654321"); //parametreli function
    ?>
</body>

</html>