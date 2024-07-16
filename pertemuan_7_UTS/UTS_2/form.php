<html>
  <head>
    <title> Form Input Karyawan </title>
    <style>
        .table1 {
          margin: 40 0 0 130px;
          font-family: sans-serif;
          color: #444;
          border-collapse: collapse;
          width: 80%;
          border: 1px solid #f2f5f7;
        }
        .table1 tr th{
          background: #ffdccc;
          color: #3C4048;
          font-weight: bold;
        }
        .table1, tr, td {
          padding: 8px 0px 8px 0px;
          text-align: left;
        }
        .table1 tr:nth-child(even) {
          background-color: #f2f2f2;
        }
        .judul{
          text-align: center;
          padding: 9px 40px 9px 40px;
        }
    </style>
  </head>

  <body>
    <form action="" method="post" name="form1">
      <table class="table1">
        <tr>
          <th class= "judul" colspan="3">  PT.ZHIDO MAXMOER  </th>
        </tr>
        <tr>
          <th class= "judul" colspan="3">  Jl.Nakkula Sadewa 13 - Klaten  </th>
        </tr>
        <tr>
          <th class= "judul" colspan="3">  =============================  </th>
        </tr>
        <tr>
          <th class= "judul" colspan="3">  DATA ENTRY KARYAWAN  </th>
        </tr>

        <tr>
          <td> No.Induk Karyawan </td>
          <td> : </td>
          <td> <input type="text" name="nik"/> </td>
        </tr>

        <tr>
          <td>NAMA Karyawan</td>
          <td>:</td>
          <td> <input type="text" name="nama"/> </td>
        </tr>
        
        <tr>
          <td>jabatan</td>
          <td>:</td>
          <td> <input name="jabatan"> </td>
        </tr>
  
        <tr>
          <td>Gaji Pokok</td>
          <td>:</td>
          <td> <input name="gaji_pokok"> </td>
        </tr>

        <tr>
          <td>Jam Kerja</td>
          <td>:</td>
          <td> <input name="jam_kerja"> </td>
        </tr>

        <tr>
          <td colspan="3">
            <div align="center">
              <input class="judul" type="submit" name="tombol_simpan" value="KIRIM">
            </div>
          </td>
        </tr>
      </table>

  </body>
</html>

<?php
  $nik[] = $_POST['nik'];
  $nama[] = $_POST['nama'];
  $jabatan[] = $_POST['jabatan'];
  $gaji_pokok[] = $_POST['gaji_pokok'];
  $jam_kerja[] = $_POST['jam_kerja'];
  $gaji_terima[] = $gaji_pokok[] * $jam_kerja[];
  
    if($jam_kerja[] > 7) {
      $bonus[] = ($gaji_pokok[] * 0.1);
    }
    else {
      $bonus[] = 0;
    }

  $gaji_bersih[] = $gaji_terima[] + $bonus[];
  ?>
  
  <html>
    <head>
      <title> Hasil Proses</title>
      <style>
        .table1 {
          margin: 40 0 0 130px;
          font-family: sans-serif;
          color: #444;
          border-collapse: collapse;
          width: 80%;
          border: 1px solid #f2f5f7;
        }
        .table1 tr th{
          background: #ffdccc;
          color: #3C4048;
          font-weight: bold;
        }
        .table1, tr, td {
          padding: 11px 0px 11px 0px;
          text-align: left;
        }
        .table1 tr:nth-child(even) {
          background-color: #f2f2f2;
        }
        .judul{
          text-align: center;
          padding: 12px 20px 12px 20px;
        }
      </style>
    </head>

    <body>
    <div class="tabel">
      <table class= "table1">
        <tr>
          <th class= "judul" colspan="8">  PT.ZHIDO MAXMOER  </th>
        </tr>
        <tr>
          <th class= "judul" colspan="8">  Jl. Nakkula Sadewa 13-Klaten </th>
        </tr>
  
        <tr>
          <td> NIK </td>
          <td>NAMA </td>
          <td>JABATAN </td>
          <td>GAJI POKOK </td>
          <td>JAM KERJA </td>
          <td>GAJI TERIMA </td>
          <td>UPAH BONUS </td>
          <td>GAJI BERSIH </td>
        </tr>

        <tr>
          <td> <?="$nik"?> </td>
          <td> <?="$nama"?> </td>
          <td> <?="$jabatan"?> </td>
          <td> <?= number_format ($gaji_pokok)?> </td>
          <td> <?="$jam_kerja"?> </td>
          <td> <?= number_format ($gaji_terima)?> </td>
          <td> <?= number_format ($bonus)?> </td>
          <td> <?= number_format ($gaji_bersih)?> </td>
        </tr>


        <tr>
          <td colspan="8">
            <div align="center">
              <a href="form.php">
                <button class= "judul">Klik untuk ulangi</button>
              </a>
            </div>
          </td>
        </tr>

      </table>
    </body>
  </html>