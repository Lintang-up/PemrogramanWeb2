<html>
  <head>
    <title> Form Identitas : </title>
  </head>

  <body>
    <form action="proses.php" method="post" name="form1">
      <table align="center" border="1" style="width: 300px;">
      <tr>
        <td colspan="3">
          <div align="center">
            <strong>IDENTITAS DIRI</strong>
          </div>
        </td>
      </tr>

      <tr>
        <td width="93">NIS </td>
        <td width="5">:</td>
        <td width="180"> <input type="text" name="nis" /></td>
      </tr>

      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td><input type="text" name="nama" /></td>
      </tr>

      <tr>
        <td>PROG.STUDI</td>
        <td>:</td>
        <td><textarea name="prodi"></textarea></td>
      </tr>

      <tr>
        <td>KELAS</td>
        <td>:</td>
        <td><textarea name="kelas"></textarea></td>
      </tr>

      <tr>
        <td colspan="3">
          <div align="right">
            <input type="submit" name="tombol_simpan" value="SIMPAN">
          </div>
        </td>
      </tr>
      </table>

  </body>
</html>