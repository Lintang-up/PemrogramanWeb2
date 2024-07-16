<form method=”POST” action=”storage_hasil.php” id=”formku”>
Nama: <input type=text id=”nama”>
<br/>HP: <input type=text id=”hp”>
<br/>Pesan: <textarea id=”pesan” cols=50></textarea>
<br/>
 <button type=”button” onClick=”kirim()”>Kirim</button>
 <button type=”button” onClick=”ambiltmp()”>Ambil Tmp Data </button>
</form>

Kita ingin pada saat tekan tombol kirim data akan tersimpan juga di browser:
 function kirim()
 {
    sessionStorage.nama=$(‘#nama’).val();
    sessionStorage.hp=$(‘#hp’).val();
    sessionStorage.pesan=$(‘#pesan’).val();
    $(‘#formku’).submit();
 }