<?php
session_start();
?>
<html>
  <head>

<script src=”development-bundle/jquery-1.6.2.js”>
</script>
 
 <script>
 function kirim()
 {
    sessionStorage.nama=$('$nama').val();
    sessionStorage.hp=$('$hp').val();
    sessionStorage.pesan=$('$pesan').val();
    $('$formku').submit();
 }
 
 function ambiltmp()
 {
    $('$nama').val(sessionStorage.nama);
    $('$hp').val(sessionStorage.hp);
    $('$pesan').val(sessionStorage.pesan);
 }
 </script>
  </head>
  <body>
<form method=”POST” action=”” id=”formku”>
Nama: <input type=text id=”nama”>
<br/>HP: <input type=text id=”hp”>
<br/>Pesan: <textarea id=”pesan” cols=50></textarea>
<br/>
 <button type=”button” onClick=”kirim()”>Kirim</button>
 <button type=”button” onClick=”ambiltmp()”>Ambil Tmp Data </button>
</form>
  </body>
</html>