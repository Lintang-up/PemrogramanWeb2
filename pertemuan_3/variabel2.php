<html>
  <head>
    <title> Belajar Variabel 2</title>
  </head>

  <body>
  <?php
    $kode_bayar = "210103028";
    $nama = "Muhammad Lintang Pamungkas";
    $barang = "Sepatu";
    $harga = 10000;
    $jumlah = 7;
    $bayar = $harga * $jumlah;
    
    
    echo "<h1> DATA Pembeli <h1>";
    echo "<h3>";
    echo " Kode bayar   &emsp;&emsp;: $kode_bayar <br>";
    echo " Nama  &emsp;&emsp;&emsp;&emsp;: $nama <br>";
    echo " Nama Barang  &emsp;: $barang <br>";
    echo " Harga satuan &emsp;: $harga <br>";
    echo " Jumlah Pembelian &emsp;: $jumlah <br>";
    echo " Total Bayar &emsp;: $bayar <br>";
    echo "<h3>";
?>
  </body>
</html>