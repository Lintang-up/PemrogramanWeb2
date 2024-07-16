<?php
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $kelas = $_POST['kelas'];

  echo"
    <table width=400 border=1 align=center>
      <tr>
        <td colspan=3 align=center> .: IDENTITAS SISWA :. </td>
      </tr>

      <tr>
        <td>N I S</td>
        <td>:</td>
        <td>".$nis."</td>
      </tr>

      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>".$nama."</td>
      </tr>

      <tr>
        <td>Prog.Studi</td>
        <td>:</td>
        <td>".$prodi."</td>
      </tr>

      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>".$kelas."</td>
      </tr>
    </table>"
?>