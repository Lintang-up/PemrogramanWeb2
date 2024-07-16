<html>
  <head>
    <title>
       Contoh Perhitungan
    </title>

    <style>
      .nama{
        line-height:0;
      }
    </style>
  </head>

  <body>
  <?php 
      $gaji = 2000000;
      $pajak = 0.1;
      $bersih = $gaji - ($gaji * $pajak);  
  ?>

<h2>Daftar Gaji Pegawai</h2>

<pre>

  <p1>Gaji pokok  = <?= $gaji;?> </p1>
  <p1>Pajak       = 10% dari gaji pokok </p1>
  <p1>Terima GAji = <?= $bersih;?> </p1>

  </pre>
  </body>
</html>