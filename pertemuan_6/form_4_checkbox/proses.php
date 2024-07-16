<?php
  $nis  = $_POST['nis'];
  $nama = $_POST['nama'];
  // $bhs = $_POST['bhs'];
  // $editor = $_POST['editor'];
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
          <td>Bahasa Pemrograman</td>
          <td>:</td>
          <td>
            <?php 
              if (isset($_POST['bhs'])) {
                $bhs=$_POST['bhs'];
              for ($i=0; $i < count($bhs) ; $i++){
                echo $bhs[$i]."<br>";
                }
              }?>
          </td>
        </tr>
  
        <tr>
          <td>Text Editor</td>
          <td>:</td>
          <td>
            <?php 
              if (isset($_POST['editor'])) {
                $editor=$_POST['editor'];
              for ($i=0; $i < count($editor) ; $i++){
                echo $editor[$i]."<br>";
                }
              }?>
          </td>
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