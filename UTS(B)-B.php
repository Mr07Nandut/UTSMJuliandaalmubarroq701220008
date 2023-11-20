<?php

$tanggalTransaksi = date("Y-M-d");
$produk1 = "Pepsodent (7x10000) :";
$produk2 = "Rinso (5x20000) :";
$produk3 = "Downy (2x12000) :";
$produk4 = "Dove (2x22000) :";
$total1 = 7 * 10000; 
$total2 = 5 * 20000; 
$total3 = 2 * 12000; 
$total4 = 2 * 22000; 
 

$totalPembelian = $total1 + $total2 + $total3 + $total4;

$diskon = 0;

if ($totalPembelian >= 300000) {
    $diskon = $totalPembelian * 0.25;
} elseif ($totalPembelian >= 200000) {
    $diskon = $totalPembelian * 0.20;
}

$totalSetelahDiskon = $totalPembelian - $diskon;
?>

<!DOCTYPE html>
<html>
<head>
<h1>UTS(B) Pemrograman WEB 2-Bagian A</h1>
<h2>
  <p>Nama : M.Julianda al mubarroq</p>
  <p>NIM : 701220008</p>
  <p>Kelas : 3A</p>
</h2>

    <title>Struk Pembelian</title>
    <style>
        .struk {
            width: 300px;
            border: 1px solid #000;
            padding: 10px;
        }

        .title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .content {
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="struk">
        <div class="title">Struk Pembelian</div>
    <br>
        <div class="content">

    <p>Tanggal Transaksi: <?php echo $tanggalTransaksi; ?></p>
    
    <p>Produk:</p>

    <?php echo $produk1; ?> Rp.<?php echo $total1; ?>
    
    </br>
    
    <?php echo $produk2; ?> Rp.<?php echo $total2; ?>

    </br>
    
    <?php echo $produk3; ?> Rp.<?php echo $total3; ?>

    </br>
    
    <?php echo $produk4; ?> Rp.<?php echo $total4; ?>
    
    <p>Total Belanja: Rp.<?php echo $totalPembelian; ?></p>

    <p>Diskon: Rp.<?php echo $diskon; ?></p>

    <h3>Total Pembayaran: Rp.<?php echo $totalSetelahDiskon; ?></h3>
    <hr>
    
    <p> Makasih banyak lah bebelanjo di M.Julianda store!</p>

  </body>
</html>
