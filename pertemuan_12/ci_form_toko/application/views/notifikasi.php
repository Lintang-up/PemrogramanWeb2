<html>
<head> 
  <title> <?php echo $judul;?> </title>
  <style>
    .n{
      font-size: 50px;
      font-family: "Andale Mono", "Monotype.com", monospace;
      text-align: center;
      width: 600px;
      margin: 150px 0 40px 360px;
      border-radius: 4px;
      padding: 10px 10px 10px 10px;
      background: #FFCAC8;
    }
    .tabel_aksi{
      font-family: "Andale Mono", "Monotype.com", monospace;
      font-size: 20px;
    }
    a {
      background-color: #D0B8A8;
      color: white;
      padding: 7px 10px;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
    }
    a:hover {
      background-color: #DFD3C3;
    }
  </style>
</head>


<body>
  <h1 class="n"> <?php echo $notifikasi;?> </h1>
  <table class= "tabel_aksi" align= center>
    <tr>
      <td><a href="<?php echo base_url('index.php/Control_toko/form');?>"> Input Transaksi </a></td>
      <td><a href="<?php echo base_url('index.php/Control_toko/daftar_user');?>"> Lihat Daftar Transaksi </a></td>
    </tr>
  </table>
</body>

</html>

 