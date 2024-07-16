<html>
<head>
  <title> Test 1</title>
  <style>
    .bg{
      background-color: #F9F9F9;
    }
    .judul{
      margin: 0 0 50px;
    }
    .nama{
      font-size: 20px;
      margin: 0 0 0 100px;
    }
    .table1 {
      align: center ;
      font-family: sans-serif;
      color: #232323;
      border-collapse: collapse;
      width: 1000px;
    }
    .table1, th, td {
      text-align: center;
      border: 1px solid #999;
      padding: 8px 20px;
    }
    .table1, tr{
      background-color: #ffdccc;
    }   
    .table1 tr:hover {
      background-color: #FDF6F0;
    }
    .table1 tr:nth-child(even) {
      background-color: #FDF6F0;
    }
    .terimakasih{
      font-size: 20px;
      margin: 0 0 0 100px;
    }
    .hormat{
      margin: 0 180px 0 0;
      float: right;
      line-height:0;
    }
    .t{
      text-align: right;
    }
  </style>
</head>

<body class = "bg">
  <div class= "judul">
    <h1 align = center> TOKO AKSESORIS & HARDWARE KOMPUTER</h1>  
    <h1 align = center> "ZHIDO LARIZ" - SURAKARTA</h1> 
  </div>

  <div class = "nama">
    <pre>
      No. Kuitansi : 028 
      Nama Pembeli : Muhammad Lintang Pamungkas 
      Alamat       : Botok, Botok 03/01, Kerjo, Karanganyar </pre>
  </div>

<?php
  $array = [
    ["nama" => "Flashdisk",    "harga" => 55000,   "jumlah" => 7,],
    ["nama" => "Print Inkjet", "harga" => 1300000, "jumlah" => 8,],
    ["nama" => "Scanner HP",   "harga" => 735000,  "jumlah" => 1,],
    ["nama" => "LCD Toshiba",  "harga" => 1550000, "jumlah" => 5,],
    ["nama" => "Finger Print", "harga" => 780000,  "jumlah" => 7,]
  ];
?>

  <div class = "table_main" align = "center">
    <table class= "table1">
     <tr>
        <th> NAMA BARANG  </th>
        <th> HARGA SATUAN </th>
        <th> JUMLAH       </th>
        <th> Potongan     </th>
        <th> TOTAL BAYAR  </th>
     </tr>

<?php
  foreach ($array as $variabel){
    $total = $variabel['harga'] * $variabel['jumlah'];
      if($variabel['jumlah'] > 4) {
        $potong = ($variabel['harga'] * 0.1) * ($variabel['jumlah'] - 4);
        $total1 = $total - $potong;
      }
      else {
        $potong = 0;
        $total1 = $total;
      }
    $totalbayar[] = $total1;
    $tb = array_sum($totalbayar);
?>

      <tr>
			  <th>              <?= $variabel['nama'];                  ?> </th>
			  <th class="t"> Rp <?= number_format($variabel['harga']);  ?> </th>
		    <th>              <?= number_format($variabel['jumlah']); ?> </th>
        <th class="t"> Rp <?= number_format($potong);             ?> </th>
			  <th class="t"> Rp <?= number_format($total1);             ?> </th>
	    </tr> <?php }?>
    </table>
    <br>
    <table class= "table1">  
      <tr>
        <th> TOTAL: </th>
        <th class="t" width= "682px"> Rp <?= number_format($tb); ?> </th>
      </tr>
    </table>
  </div>

  <div class= "terimakasih">
    <pre>
     <p1 > Terimakasih atas kunjungan anda, dan semoga pelayanan kami memuaskan anda. </p1>
    </pre>
  </div>

  <div class = "hormat">
    <h4> Surakarta, 12-10-2022</h4>
    <h4> Kasir,</h4>
    <br>
    <h4> Lintang</h4>
  </div>
</body>
</html>