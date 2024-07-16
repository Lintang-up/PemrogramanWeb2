<?php
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $kelas = $_POST['kelas'];
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
          <th class= "judul" colspan="3">  IDENTITAS SISWA  </th>
        </tr>
  
        <tr>
          <td> NIS </td>
          <td>:</td>
          <td> <?="$nis"?> </td>
        </tr>
  
        <tr>
          <td>NAMA</td>
          <td>:</td>
          <td> <?="$nama"?> </td>
        </tr>
  
        <tr>
          <td>PROGRAM STUDY</td>
          <td>:</td>
          <td> <?="$prodi"?> </td>
        </tr>
  
        <tr>
          <td>KELAS</td>
          <td>:</td>
          <td> <?="$kelas"?> </td>
        </tr>

        <tr>
          <td colspan="3">
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