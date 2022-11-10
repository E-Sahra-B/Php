<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Dili, Kayit Seçme ve Kayit işlem Komutlari</title>
</head>

<body>
    <h3>SQL Dili, Kayit Seçme ve Kayit işlem Komutlari</h3>
    <br>✯ SQL Dili
    <br>✯ Temel SQL Komutları
    <br>✯ SQL ile Kayıt Seçme - Listeleme (Select From)
    <br>✯ SQL ile Rastgele Kayıt Seçme (Rand)
    <br>✯ SQL ile Benzersiz Kayıt Seçme (Distinct)
    <br>✯ SQL ile Kayıt Sayısını Bulma (Count)
    <br>✯ SQL ile Kayıtları Toplama (Sum)
    <br>✯ SQL ile Kayıtların Ortalamasını Bulma (Avg)
    <br>✯ SQL ile En Küçük En Büyük Sayı Bulma (Min, Max)
    <br>✯ SQL ile Kayıt Sınırlama (Limit)
    <br>✯ SQL ile Kayıt Listeleme (Select From)
    <br>✯ SQL ile Kayıt Filtreleme (Where Clause)
    <br>✯ SQL ile Kayıt Sıralama (Order By)
    <br>✯ SQL ile Kayıt Gruplama (Group By)
    <hr>
    <h4>KAYIT SORGULAMA</h4>
    <br>SELECT * FROM egitim;
    <p>Select komutu aracılığıyla egitim isimli tablonun tüm kayıtları tüm alanlarındaki
        (*) veriler ile birlikte listelenmiştir.</p>
    <br>
    <br>SELECT no, adsoyad FROM egitim;
    <p>Select komutu aracılığıyla egitim isimli tablonun tüm kayıtlarının no ve adsoyad
        alanlarındaki verileri listelenmiştir.</p>
    <br>
    <br>SELECT * FROM egitim WHERE adsoyad= ‘Kemal Atatürk’;
    <p>Select komutu aracılığıyla egitim isimli tablonun adsoyad alanı “Kemal Atatürk”
        değerine eşit olan kayıtlarının tüm alanlarındaki (*) verileri listelenmiştir.</p>
    <br>
    <br>SELECT adsoyad FROM egitim WHERE no>1;
    <p>Select komutu aracılığıyla egitim isimli tablonun no alanı “1” değerinden büyük
        olan kayıtlarının adsoyad alanındaki verileri listelenmiştir.</p>
    <br>
    <br>SELECT * FROM egitim WHERE (no>1 AND adsoyad != ‘esb’);
    <p>Select komutu aracılığıyla egitim isimli tablonun adsoyad alanı “esb”
        değerine eşit olmayan ve no alanı “1” değerinden büyük olan kayıtlarının tüm alanlarındaki (*) verileri
        listelenmiştir.</p>
    <br>
    <br>SELECT * FROM egitim WHERE no>1 OR (adsoyad = ‘esb’ AND tckimlik != ‘’);
    <p>Select komutu aracılığıyla egitim isimli tablonun no alanı “1” değerinden büyük
        olan kayıtlarının veya adsoyad alanı “esb” değerine eşit olan ve tckimlik alanı boş olmayan
        kayıtlarının tüm alanlarındaki (*) verileri listelenmiştir. Burada dikkat edilmesi gereken en önemli
        nokta, bu örnekte “Or” operatörü ile ayrılmış olan iki farklı koşulun bulunduğu ve herhangi birinin
        olumlu cevap vermesi durumunda listeleme işleminin gerçekleşeceğidir.</p>
    <br>
    <br>SELECT * FROM egitim ORDER BY no ASC;
    <p>Select komutu aracılığıyla egitim isimli tablonun tüm kayıtlarının tüm
        alanlarındaki (*) verileri no alanına göre küçükten büyüğe doğru (asc) listelenmiştir.</p>
    <br>
    <br>SELECT * FROM egitim ORDER BY tarih DESC, adsoyad ASC;
    <p>Select komutu aracılığıyla egitim isimli tablonun tüm kayıtlarının tüm
        alanlarındaki (*) verileri tarih alanına göre tersten, yakından uzağa doğru (desc) listelenmiştir. Eğer
        tarih alanındaki değerleri eşit olan kayıtlar varsa, bu durumda da bu eşit olan kayıtlar adsoyad alanına
        göre a’dan z’ye doğru (asc) listelenecektir</p>
    <br>
    <br>SELECT * FROM egitim LIMIT 5;
    <p>Select komutu aracılığıyla egitim isimli tablonun tüm kayıtlarının tüm
        alanlarındaki (*) verileri en fazla “5” adet olacak şekilde listelenmiştir.</p>
    <br>
    <br>SELECT * FROM egitim LIMIT 3,5;
    <p>Select komutu aracılığıyla egitim isimli tablonun tüm kayıtlarının tüm
        alanlarındaki (*) verileri sorgulanmış ve ilk “3” kayıt dışarıda tutularak sonraki “5” kayıt listelenmiştir</p>
    <br>
    <br>SELECT * FROM egitim ORDER BY RAND() LIMIT 5;
    <p>Select komutu aracılığıyla egitim isimli tablonun tüm kayıtlarının tüm
        alanlarındaki (*) verilerinden rastgele “5” adeti listelenmiştir.</p>
    <br>
    <br>SELECT DISTINCT adsoyad FROM egitim;
    <p>Select komutu aracılığıyla egitim isimli tablonun tüm kayıtlarının tüm
        alanlarındaki (*) verileri sorgulanmış ve eğer adsoyad alanındaki verileri aynı olan kayıtlar varsa
        yalnızca birinin görüntülenmesi sağlanmıştır.</p>
    <br>
    <br>SELECT ders FROM egitim GROUP BY ders;
    <p>Select komutu aracılığıyla egitim isimli tablo ders alanına göre gruplanmış ve ders
        alanındaki veriler listelenmiştir.</p>
    <br>
    <hr>
    <h4>KÜMELEME FONKSİYONLARI</h4>
    <br>
    <table>
        <tr>
            <th>Fonksiyon</th>
            <th>Açıklama</th>
        </tr>
        <tr>
            <td>count()</td>
            <td>Alanların toplam sayısını hesaplar</td>
        </tr>
        <tr>
            <td>sum()</td>
            <td>Sayısal (nümerik) alanların toplamını hesaplar</td>
        </tr>
        <tr>
            <td>avg()</td>
            <td>Sayısal (nümerik) alanların ortalamasını hesaplar</td>
        </tr>
        <tr>
            <td>min()</td>
            <td>Alanlar arasında en küçük değerli alanın değerini listeler</td>
        </tr>
        <tr>
            <td>max()</td>
            <td>Alanlar arasında en büyük değerli alanın değerini listeler</td>
        </tr>
    </table>
    <br>
    <br>SELECT count(*) FROM ogrenciler;
    <p>Count fonksiyonu aracılığıyla ogrenciler isimli tablodaki toplam kayıt listesi
        bulunmuş ve bu değer listelenmiştir</p>
    <br>
    <br>SELECT adsoyad, sum(sinav) AS toplamnot FROM ogrenciler GROUP BY adsoyad;
    <p>Sum fonksiyonu aracılığıyla ogrenciler isimli tablonun sinav alanındaki
        değerlerinin toplamı hesaplanmış ve toplamnot isimli yeni bir alanda bu toplam değer ve adsoyad
        bilgisi gruplanarak listelenmiştir.</p>
    <br>
    <br>SELECT adsoyad, avg(sinav) AS ortalamanot FROM ogrenciler GROUP BY adsoyad;
    <p>Avg fonksiyonu aracılığıyla ogrenciler isimli tablonun sinav alanındaki değerlerinin
        ortalaması hesaplanmış ve ortalamanot isimli yeni bir alanda bu ortalama değer ve adsoyad bilgisi
        gruplanarak listelenmiştir.</p>
    <br>
    <br>SELECT adsoyad, min(sinav) FROM ogrenciler LIMIT 1;
    <p>Min fonksiyonu aracılığıyla ogrenciler isimli tablonun sinav alanındaki değerleri
        arasından en küçüğü bulunmuş ve adsoyad bilgisi ile birlikte listelenmiştir.</p>
    <br>
    <br>SELECT adsoyad, max(sinav) FROM ogrenciler LIMIT 1;
    <p>Max fonksiyonu aracılığıyla ogrenciler isimli tablonun sinav alanındaki değerleri
        arasından en büyüğü bulunmuş ve adsoyad bilgisi ile birlikte listelenmiştir</p>
    <br>
    <hr>
</body>

</html>