<?php
$baglan = new mysqli("localhost", "Sahra", "1234", "deneme");
if ($baglan->connect_errno) {
    echo "Hata : " . $baglan->connect_error;
}
$baglan->set_charset("utf8");
$sorgu = $baglan->query("select * from ogrenciler order by id desc limit 5");
echo "<table border='1' width='100%'>
<tr align='center'>
<th>S.No</th>
<th>Adı Soyadı</th>
<th>TC Kimlik</th>
<th>Telefon No</th>
<td>İşlemler</td>
</tr>";
while ($satir = $sorgu->fetch_object()) {
    echo "
    <tr align='center'>
<td>$satir->id</td>
<td>$satir->adSoyad</td>
<td>$satir->tc</td>
<td>$satir->telefon</td>
<td>
<a href='yeni.php?id=$satir->id'>Düzelt</a> - 
<a href='sil.php?id=$satir->id'>Sil</a>
</td>
</tr>";
}
// //$baglan->free_result($sorgu);
// $baglan_stmt->free_result($sorgu);
echo "</table>";
$toplam = $sorgu->num_rows;
$sorgu->free_result();
$baglan->close();
echo "<br><br>Toplam $toplam Kayıt Bulundu";
