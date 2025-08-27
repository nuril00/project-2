<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>latihan type data</title>
</head>

<body>
    <?php
    $barang = "topi";
    $jumlah = 5;
    $harga = 20000;
    $total = $harga * $jumlah;
    $diskon = $total * 0.1;  
    $bayar = $total - $diskon ;

    echo "barang = $barang <br>";
    echo "jumlah = $jumlah <br>";
    echo "harga = Rp.$harga <br>";
    echo "diskon = Rp.$diskon <br>";
    echo "total bayar =  Rp.$bayar <br>";
    ?>
</body>
</html>
