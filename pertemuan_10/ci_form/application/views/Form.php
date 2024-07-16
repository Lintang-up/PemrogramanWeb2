<html>
<head>
  <title> <?php echo $judul; ?></title>
</head>

<body>
  <h1>Insert Data User</h1>
  <form action="simpan_user" method="post">
    <table>
      <tr>
        <td>Induk</td>
        <td><input type="text" name="induk"/></td>
      </tr>

      <tr>
       <td>Nama Lengkap</td>
       <td><input type="text" name="nama"/></td>
      </tr>

      <tr>
       <td>Alamat Rumah</td>
       <td><input type="text" name="alamat"/></td>
      </tr>

      <tr>
        <td>Kota</td>
        <td><input type="text" name="kota"/></td>
      </tr>

      <tr>
        <td><input type="submit" value="SIMPAN"/></td>
      </tr>
    </table>
  </form>
</body>

</html>