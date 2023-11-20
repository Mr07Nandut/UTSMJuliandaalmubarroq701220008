<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS Bagian B, Nomor A</title>
</head>
<body>

<h1>UTS(B) Pemrograman WEB 2-Bagian A</h1>
<h2>
  <p>Nama : M.Julianda al mubarroq</p>
  <p>NIM : 701220008</p>
  <p>Kelas : 3A</p>
</h2>

<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nama Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$data = [
    [1, "Pepsodent", 30, 10000],
    [2, "Sunlight", 15, 11000],
    [3, "Baygon", 10, 16000],
    [4, "Dove", 20, 22000],
    [5, "Rinso", 20, 20000],
    [6, "Downy", 15, 12000],
    [7, "Le mineral", 25, 5000],
];
$totalJumlah = 0; 

foreach($data as $row) {

    echo "<tr>";
    
    $jumlah = $row[2] * $row[3]; 
    
    $totalJumlah += $jumlah; 
    
    $row[] = $jumlah; 
    
    foreach($row as $column) {
    
      echo "<td>$column</td>";
    
    }
    
    echo "</tr>";
}

echo "</table>";

echo " <b>Total Jumlah : </b> " . $totalJumlah; 

?>

</body>
</html>