<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIKA</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIKA</title>
</head>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>

<body>
    <?php
    $no = "015";
    $nama = "Linda Prasetyaningsih";
    $alamat = "Sukoharjo";
    $barang = array("Flashdisk","Printer Inkjet","Scanner HP","LCD Toshiba", "Finger Print");
    $harga = array ('55000',"1300000","735000","1550000","780000");
    $jumlah = array ("7","8","1","5","7");

    if ($jumlah[0] > 4){
        $potongan = (($jumlah[0] - 4) * $harga[0]) * 0.1;
    } else {
        $potongan = 0;
    }

    if ($jumlah[1] > 4){
        $potongan1 = (($jumlah[1] - 4) * $harga[1]) * 0.1;
    } else {
        $potongan1 = 0;
    }

    if ($jumlah[2] > 4){
        $potongan2 = (($jumlah[2] - 4) * $harga[2]) * 0.1;
    } else {
        $potongan2 = 0;
    }

    if ($jumlah[3] > 4){
        $potongan3 = (($jumlah[3] - 4) * $harga[3]) * 0.1;
    } else {
        $potongan3 = 0;
    }

    if ($jumlah[4] > 4){
        $potongan4 = (($jumlah[4] - 4) * $harga[4]) * 0.1;
    } else {
        $potongan4 = 0;
    }

    $total = $harga[0] * $jumlah[0] - $potongan;
    $total1 = $harga[1] * $jumlah[1] - $potongan1;
    $total2 = $harga[2] * $jumlah[2] - $potongan2;
    $total3 = $harga[3] * $jumlah[3] - $potongan3;
    $total4 = $harga[4] * $jumlah[4] - $potongan4;
    ?>
    
    <h2>TOKO AKSESORIS & HARDWARE KOMPUTER <br>
    "ZHIDO LARIZ" - SURAKARTA</h2>
    <hr align= left size=3 color=black width=550><br>
    
    <?php
    echo "<pre>";
    echo "No.Kuintasi   : $no <br>";
    echo "Nama Pembeli  : $nama <br>";
    echo "Alamat        : $alamat <br><br>";
    echo "</pre>";

    echo "<table border=1>";
    echo "<tr>";
    echo "<th width=150px>NAMA BARANG</th>";
    echo "<th width=150px>HARGA SATUAN</th>";
    echo "<th width=100px>JUMLAH</th>";
    echo "<th width=100px>POTONGAN</th>";
    echo "<th width=120px>TOTAL BAYAR</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>&ensp;$barang[0]</td>";
    echo "<td>&ensp;$harga[0]</td>";
    echo "<td>&ensp;$jumlah[0]</td>";
    echo "<td bgcolor=#FFD700>&ensp;$potongan</td>";
    echo "<td bgcolor=#FFD700>&ensp;$total</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>&ensp;$barang[1]</td>";
    echo "<td>&ensp;$harga[1]</td>";
    echo "<td>&ensp;$jumlah[1]</td>";
    echo "<td bgcolor=#FFD700>&ensp;$potongan1</td>";
    echo "<td bgcolor=#FFD700>&ensp;$total1</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>&ensp;$barang[2]</td>";
    echo "<td>&ensp;$harga[2]</td>";
    echo "<td>&ensp;$jumlah[2]</td>";
    echo "<td bgcolor=#FFD700>&ensp;$potongan2</td>";
    echo "<td bgcolor=#FFD700>&ensp;$total2</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>&ensp;$barang[3]</td>";
    echo "<td>&ensp;$harga[3]</td>";
    echo "<td>&ensp;$jumlah[3]</td>";
    echo "<td bgcolor=#FFD700>&ensp;$potongan3</td>";
    echo "<td bgcolor=#FFD700>&ensp;$total3</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>&ensp;$barang[4]</td>";
    echo "<td>&ensp;$harga[4]</td>";
    echo "<td>&ensp;$jumlah[4]</td>";
    echo "<td bgcolor=#FFD700>&ensp;$potongan4</td>";
    echo "<td bgcolor=#FFD700>&ensp;$total4</td>";
    echo "</tr>";
    echo"</table><br>";

    echo "Terimakasih atas kunjungan Anda, dan semoga pelayanan kami memuaskan Anda.";
    
    echo "<pre>";
    echo "                                                  Surakarta, 12-10-2022 <br>";
    echo "                                                  Kasir, <br>";
    echo "                                                  Drupadi";
    echo "</pre>";
    ?>
</body>
</html>
</body>
</html>