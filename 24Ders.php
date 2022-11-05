<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya işlemleri</title>
</head>

<body>
    <h3>Dosya işlemleri</h3>
    <br>✯ PHP ile Dosya Oluşturma (Touch)
    <br>✯ PHP Dosya Açma Kipleri
    <br>✯ PHP ile Dosya Okuma (Fread, Fgets)
    <br>✯ PHP ile Dosya Yazma (Fwrite, Fputs)
    <br>✯ PHP ile Dosya Silme (Unlink)
    <br>✯ PHP ile Dosya Kopyalama (Copy)
    <br>✯ PHP ile Dosya Adı Değiştirme (Rename)
    <br>✯ PHP ile Dosya Kontrol Etme (File_exists)
    <hr><br>
    <h3>DOSYA AÇMA KİPLERİ</h3>
    <table>
        <tr>
            <th>Kip</th>
            <th>Kip Adı</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>r</td>
            <td>Okuma</td>
            <td>Dosya okuma amaçlı açılır. İmleç dosya başına konumlandırılır.</td>
        </tr>
        <tr>
            <td>r+</td>
            <td>Okuma</td>
            <td>Dosya okuma ve yazma amaçlı açılır. İmleç dosya başına konumlandırılır.</td>
        </tr>
        <tr>
            <td>w</td>
            <td>Yazma</td>
            <td>Dosya yazma amaçlı açılır; içeriğindeki veriler temizlenir.</td>
        </tr>
        <tr>
            <td>w+</td>
            <td>Yazma</td>
            <td>Dosya okuma ve yazma amaçlı açılır; içeriğindeki veriler temizlenir.</td>
        </tr>
        <tr>
            <td>a</td>
            <td>Ekleme</td>
            <td>Dosya yazma amaçlı açılır; eğer dosya yoksa oluşturulur. İmleç dosya sonuna konumlandırılır.</td>
        </tr>
        <tr>
            <td>a+</td>
            <td>Ekleme</td>
            <td>Dosya okuma ve yazma amaçlı açılır; eğer dosya yoksa oluşturulur. İmleç dosya sonuna konumlandırılır</td>
        </tr>
        <tr>
            <td>x</td>
            <td>Tedbirli Yazma</td>
            <td>Dosya yazma amaçlı açılır; eğer dosya yoksa oluşturulur, varsa hata oluşur.</td>
        </tr>
        <tr>
            <td>x+</td>
            <td>Tedbirli Yazma</td>
            <td> Dosya okuma ve yazma amaçlı açılır; eğer dosya yoksa oluşturulur, varsa hata oluşur.</td>
        </tr>
        <tr>
            <td>b</td>
            <td>İkilik (Binary)</td>
            <td> Dosya sistemlerinin ikilik dosya ile metin dosyaları arasında ayırım yaptığı durumlarda, diğer kiplerden herhangi birisiyle birlikte kullanılır.</td>
        </tr>
        <tr>
            <td>t</td>
            <td>Metin</td>
            <td>Yalnızca Microsoft Windows dosya sistemlerinde diğer kiplerden herhangi birisiyle birlikte kullanılır.</td>
        </tr>
    </table>
    <hr><br>
    <?php
    //DOSYA OLUŞTURMA,
    $dosya = "deneme.txt"; // Dosya değişkeni ve adresi tanımlama
    //touch($dosya); // fonksiyonu kullanılarak $dosya değişkeninin içerisinde belirtilmiş olan dosyanın oluşturulması sağlanmış
    //touch($dosya, time() - 3600); // "Son Değişiklik Zamanı"
    //touch($dosya, time() - 3600, time() - 3600); // "Son Erişim Zamanı"
    if (touch($dosya, time() - 3600, time() - 3600)) {
        echo "Dosya oluşturuldu. <br><hr>";
    } else {
        echo "Hata : Dosya oluşturulamadı.";
    }
    ////DOSYA AÇMA VE KAPATMA
    $dosya1 = fopen("deneme1.txt", "w+"); // Dosyayı okuma/yazma kipinde açma her seferinde içerigi siler
    fclose($dosya1); // Dosya kapatma açık olan dosya performans kayıplarına neden olabilir

    ////DOSYAYA YAZMA VE EKLEME YAPMA
    $dosya2 = fopen("deneme2.txt", "a+"); // Dosyayı yazma kipinde açma
    fwrite($dosya2, "birinci satır\n"); // Dosyaya içine yazma
    fputs($dosya2, "\tikinci satır\n"); // Dosyaya yazma
    fclose($dosya2); // Dosya kapatma

    //$isimler = array("Fatih", "Mehmet", "Zehra", "Metehan"); // Dizi oluşturma
    //$sirano = 1; //Değişken tanımlama
    //$dosya3 = fopen("deneme3.txt", "wbt"); // Dosyayı yazma+binary+text kipinde açma
    //foreach ($isimler as $isim) { // Foreach döngüsü
    //    fwrite($dosya3, "$sirano.\t$isim\n"); // yeni bir satıra (\n),bir sekme boşluk (\t)
    //    $sirano++; // Sıra numarasını 1 tamsayı artırma
    //}
    //fclose($dosya3); // Dosya kapatma

    ////Dosya içindekileri internet sayfasında gösterme
    //fread dosyanın tamamını tek seferde okur
    //fgets satır satır okuma için
    //feof dosyanın sonuna gelinceye kadar
    $dosya3 = fopen("deneme3.txt", "rb"); //
    //echo fread($dosya3, filesize("deneme3.txt"));
    while (!feof($dosya3)) {
        echo fgets($dosya3) . "<br>";
    }
    fclose($dosya3);

    ////Dosya isim Değiştirme
    touch("dosyaolustur.txt");
    if (rename("dosyaolustur.txt", "isimdegistir.txt")) {
        echo "<br>Dosya ismi değiştirildi.";
    }

    ////Dosya kopyalama
    touch("kopyalanacak.txt");
    if (copy("kopyalanacak.txt", "kopya.txt")) {
        echo "<br>Dosya kopyalama ok";
    }

    ////Dosya var mı?
    if (file_exists("deneme3.txt")) {
        echo "<br>Dosya mevcut";
    } else {
        echo "bulunamadı";
    }
    if (!file_exists("denemex.txt")) {
        touch("denemex.txt");
        echo "<br>Dosya yoktu oluşturuldu";
    } else {
        echo "Dosya mevcut";
    }

    //Dosya silmek silinen dosya geri alınamaz
    $dosya4 = "denemexx.txt";
    if (file_exists($dosya4)) {
        unlink($dosya4);
        echo "<br>$dosya4 Dosya silindi";
    } else {
        echo "<br>$dosya4 Dosya yoktu silinemedi";
    }
    if (unlink($dosya4)) {
        echo "<br>$dosya4 Dosya silindi";
    }



    ?>
</body>

</html>