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
    <form action="proses.php" method="post" name="form1">
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
          <td> 
            <!-- <input name="jabatan">  -->
            <select name="jabatan" id="">
              <option value="DIRECTOR"> DIRECTOR </option> <br>
              <option value="CEO"> CEO </option> <br>
              <option value="MANAGER"> MANAGER </option> <br>
              <option value="KARYAWAN"> KARYAWAN </option> <br>
              <option value="MARKETING"> MARKETING </option> <br>
              <option value="MAGANG"> MAGANG </option> <br>
            </select> 
          </td>
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

        <!-- <tr>
          <td>Bonus</td>
          <td>:</td>
          <td> <input name="bonus"> </td>
        </tr> -->

        <!-- <tr>
          <td>Gaji Terima</td>
          <td>:</td>
          <td> <input name="gaji_terima"> </td>
        </tr> -->

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