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
  $nb = array('Flashdisk', 'Printer Inkjet', 'Scanner HP');
  $hs = array('55000', '1300000', '735000');
  $jum = array('7', '3', '1');

  $total = array($jum[0] * $hs[0], $jum[1] * $hs[1], $jum[2] * $hs[2]);
  $total_akhir = $total[0] + $total[1] + $total[2];
?>

  <div class = "table_main" align = "center">
    <table class= "table1">
     <tr>
	  		<th> NAMA BARANG </th>
	  		<th> HARGA SATUAN </th>
	  	  <th> JUMLAH </th>
	  		<th> TOTAL BAYAR </th>
	   </tr>

      <tr>
		  	<th> <?=$nb[0];?> </th>
		  	<th> Rp <?=$hs[0];?> </th>
		    <th> <?=$jum[0];?> </th>
	  		<th class="t"> Rp <?=number_format($total[0]);?> </th>
	    </tr>
      <tr>
			  <th> <?=$nb[1];?> </th>
			  <th> Rp <?=$hs[1];?> </th>
		    <th> <?=$jum[1];?> </th>
			  <th class="t"> Rp <?=number_format($total[1]);?> </th>
	    </tr>
      <tr>
			  <th> <?=$nb[2];?> </th>
			  <th> Rp <?=$hs[2];?> </th>
		    <th> <?=$jum[2];?> </th>
			  <th class="t"> Rp <?=number_format($total[2]);?> </th>
	    </tr>
    </table>
    <br>
    <table class= "table1">  
      <tr>
        <th> TOTAL: </th>
        <th class="t" width= "682px"> Rp <?=number_format($total_akhir);?> </th>
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