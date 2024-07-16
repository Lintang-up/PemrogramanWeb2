<html>
  <head>
    <title> Form Identitas : </title>
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
          <th class= "judul" colspan="3">  IDENTITAS SISWA  </th>
        </tr>

        <tr>
          <td> NIS </td>
          <td> : </td>
          <td> <input type="text" name="nis"/> </td>
        </tr>

        <tr>
          <td>NAMA</td>
          <td>:</td>
          <td> <input type="text" name="nama"/> </td>
        </tr>
        
        <tr>
          <td>PROGRAM STUDY</td>
          <td>:</td>
          <td> <textarea name="prodi"> </textarea> </td>
        </tr>
  
        <tr>
          <td>KELAS</td>
          <td>:</td>
          <td> <textarea name="kelas"> </textarea> </td>
        </tr>

        <tr>
          <td colspan="3">
            <div align="center">
              <input class="judul" type="submit" name="tombol_simpan" value="SIMPAN">
            </div>
          </td>
        </tr>
      </table>

  </body>
</html>