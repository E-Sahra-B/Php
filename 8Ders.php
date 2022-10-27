<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Döngüler</h2>
    <h3>For, While, Do - While ve Foreach Döngüleri</h3>
    <hr>
    <code>
        <br>for(sayaç başlangıç; koşul; artış/azalış ){
        <br>kod..
        <br>}
    </code>
    <hr>
    <code>
        <br>$sayaç başlanğıç değişken=1;
        <br>while(Koşul){
        <br> kod..
        <br> artış/azalış
        <br>}
    </code>
    <hr>
    <code>
        Do while koşula bakmadan önce muhakkak bir kere çalışır
        <br>$sayaç başlanğıç değişken=1;
        <br>do{
        <br> kod..
        <br> artış/azalış
        <br>}while(Koşul){
        <br>}
    </code>
    <hr>
    <code>
        <br>foreach($diziDegiskeni as $diziEleman){
        <br> echo $diziEleman ;
        <br>}
    </code>
    <br>
    <hr>
    <?php
    echo "<br>For Döngüsüyle <br>";
    for ($i = 1; $i <= 100; $i += 5) {
        echo "$i - ";
    }
    $j = 1;
    echo "<br>While Döngüsüyle <br>";
    while ($j <= 100) {
        echo "$j - ";
        $j += 5;
    }
    echo "<br>Do While Döngüsüyle <br>";
    $k = 1;
    do {
        echo "$k - ";
        $k += 5;
    } while ($k <= 100);
    echo "<br>Foreach Döngüsüyle <br>";
    $sayilar = array(1, 6, 11, 16, 21, 26, 31, 36, 41, 46, 51, 56, 61, 66, 71, 76, 81, 86, 91, 96);
    foreach ($sayilar as $diziEleman) {
        echo "$diziEleman - ";
    }
    ?>
</body>

</html>