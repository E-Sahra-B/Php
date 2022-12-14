<?php

  class tcKimlik {

    private $adsoyad;
    private $tckimlik;
    private $ilkkontrol = true;
    private $sonkontrol = false;
    private $hatamesaj;
    private $durum;

    public function __construct($adsoyad, $tckimlik) {
      $this->adsoyad = $adsoyad;
      $this->tckimlik = $tckimlik;

      $yasaklar = array("11111111110", "22222222220", "33333333330", "44444444440", "55555555550", "66666666660", "77777777770", "88888888880", "99999999990");

      // İlk 10 hane aynı ve son hane 0 olamaz.
      if (in_array($this->tckimlik, $yasaklar)) {
        $this->ilkkontrol = false;
        $this->hatamesaj = "TC Kimlik numarasının ilk 10 hanesi aynı ve son hanesi 0 ile bitiyor.";
      }
    
      // TC kimlik numaraları 11 hanelidir.
      else if (mb_strlen($this->tckimlik, "utf-8") != 11) {
        $this->ilkkontrol = false;
        $this->hatamesaj = "TC Kimlik numarası 11 haneli değil.";
      }

      // TC kimlik numaralarının her hanesi rakamsal değerdir.
      else if (!ctype_digit($this->tckimlik)) {
        $this->ilkkontrol = false;
        $this->hatamesaj = "TC Kimlik numarası rakamlardan oluşmuyor.";
      }

      // İlk hane hiçbir zaman 0 olamaz.
      else if ($this->tckimlik[0] == 0) {
        $this->ilkkontrol = false;
        $this->hatamesaj = "TC Kimlik numarası 0 ile başlıyor.";
      }
    }

    public function dogrula() {
      if ($this->ilkkontrol == false) {
        $this->sonkontrol = false;
      } else {
        // 1. 3. 5. 7. ve 9. hanelerin toplamı
        for ($i=0; $i<9; $i=$i+2) {
          $tekler += $this->tckimlik[$i];
        }

        // 2. 4. 6. ve 8. hanelerin toplamı
        for ($j=1; $j<9; $j=$j+2) {
          $ciftler += $this->tckimlik[$j];
        }

        // 11. hane hariç toplam
        for ($k=0; $k<10; $k=$k+1) {
          $tekcift += $this->tckimlik[$k];
        }

        // 1. 3. 5. 7. ve 9. hanelerin toplamının 7 ile çarpımından, 2. 4. 6. ve 8. hanelerin toplamı çıkartıldığında geriye kalan sayının 10ʹa göre modu 10. haneye eşittir.
        if (($tekler*7 - $ciftler) % 10 != $this->tckimlik[9]) {
          $this->sonkontrol = false;
          $this->hatamesaj = "1. 3. 5. 7. ve 9. hanelerin toplamının 7 ile çarpımından, 2. 4. 6. ve 8. hanelerin toplamı çıkartıldığında geriye kalan sayının 10ʹa göre modu 10. haneye eşit değil.";
        }

        // 1. 2. 3. 4. 5. 6. 7. 8. 9. 10. hanelerin toplamının 10ʹa göre modu 11. haneye eşittir.
        else if ($tekcift % 10 != $this->tckimlik[10]) {
          $this->sonkontrol = false;
          $this->hatamesaj = "1. 2. 3. 4. 5. 6. 7. 8. 9. 10. hanelerin toplamının 10ʹa göre modu 11. haneye eşit değil.";
        }

        // TC Kimlik doğrulandı
        else {
          $this->sonkontrol = true;
          $this->hatamesaj = "";
        }
      }
      return $this->sonkontrol;
    }

    public function kaydet() {
      // Veritabanı Bağlantısı
      $baglan = new PDO("mysql:host=localhost;dbname=tckimlik;charset=utf8", "mehmet", "1234");
      $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Kontrol İşlemi
      if ($this->sonkontrol == true) {
        $this->durum = "TC Kimlik Geçerli";
      } else {
        $this->durum = "TC Kimlik Geçersiz";
      }

      // Kayıt İşlemi
      $sorgu = $baglan->prepare("insert into tckimlik values (?,?,?,?,?)");
      $sonuc = $sorgu->execute(array(NULL, $this->adsoyad, $this->tckimlik, $this->durum, $this->hatamesaj));
      $sorgu->closeCursor(); unset($sorgu);
      if ($sonuc) {
        return true;
      } else {
        return false;
      }
    }

    public function mesaj() {
      return $this->hatamesaj;
    }

  }

?>