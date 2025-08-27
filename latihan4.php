<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>latihan konstanta </title>
</head>

<body>
    <h1>menghitung luas lingkaran</h1>
    <?php
    // konstanta untuk nilai judul
    define("judul","hitung luas lingkaran");

    // konstanta untuk nilai phi
    define("PHI",3.14);

    $r = 10;
    echo "<br> jari-jari : $r <br>";
    $luas = PHI*$r*$r;
    echo "luas lingkaran = $luas";
    ?>

    <h1>hitung luas setiga</h1>
    <?php
    define("nama","jumlah");
    define("setengah",0.5);
    define("tengah",1/2);

    $alas = 12;
    $tinggi =8;
    $luas = setengah * $alas * $tinggi;

    echo "alas = $alas cm <br>";
    echo "tinggi = $tinggi cm <br>";
    echo "luas = $luas cm <br>";
    ?>

<h1>hitung luas setiga</h1>
    <?php

    $alas = 6;
    $tinggi =8;
    $luas = tengah * $alas * $tinggi;

    echo "alas = $alas cm <br>";
    echo "tinggi = $tinggi cm <br>";
    echo "luasnya adalah = $luas cm <br>";
    ?>



</body>
</html>