<html>
<head>
    <title> <?= $judul; ?></title>
</head>
<style>
    h1{
      margin: 30px;
      font-family: 'Marck Script', cursive;
    }
    .table1 {
      width: 950px;
      margin: 20px 0 0 190px;
      font-family: sans-serif;
      color: #232323;
      border-collapse: collapse;
    }
    .table1, th, td {
      border: 1px solid #999;
      padding: 8px 20px;
    }
    .table1 tr:hover {
      background-color: #f5f5f5;
    }
    .table1 tr:nth-child(even) {
      background-color: #f7f7f7;
    }
    button{
      width: 190px;
      height: 50px;
      background-color: #D0B8A8;
      color: white;
      margin: 0 0 0 950px;
      border-radius: 4px;
      border: none;
      cursor: pointer;
      font-size: 15px;
      font-family: "Andale Mono", "Monotype.com", monospace;
    }
    button:hover {
      background-color: #DFD3C3;
    }
    .action{
      padding: 5px 7px 5px 7px;
      background-color: #D0B8A8;
      color: white;
      border-radius: 4px;
      border: none;
      cursor: pointer;
      font-size: 12px;
      font-family: "Andale Mono", "Monotype.com", monospace;
      text-decoration: none;
    }
    .action:hover{
      background-color: #DFD3C3;
    }
</style>

<body>
<h1 align=center>Daftar Riwayat Data Transaksi</h1>
<div>
  <a href="<?php echo base_url('index.php/Control_toko/form');?>"> 
    <button> Input Data Transaksi </button>
  </a>
</div>
<table class="table1">
  <thead>
    <tr>
      <th>NO</th>
      <th>Kode Barang</th>
      <th>Nama Barang</th>
      <th>Harga Satuan</th>
      <th>Jumlah Beli</th>
      <th>Total Bayar</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no=0;
    foreach ($daftar_user as $user) { $no++
    ?>
    <tr>
      <td align="center">   <?= $no;                               ?></td>
      <td align="left">   <?= $user->kode_barang;                  ?></td>
      <td align="left">   <?= $user->nama_barang;                  ?></td>
      <td align="right">  <?= number_format($user->harga_satuan ); ?></td>
      <td align="right">  <?= $user->jumlah;                       ?></td>
      <td align="right">  <?= number_format($user->total_bayar );  ?></td>
      <td align="center"> <?php echo '<a class="action" href="'.base_url().'index.php/Control_toko/delete_user/'.
                          $user->kode_barang.'"onclick="return confirm (\'Anda Yakin Menghapus '.
                          $user->nama_barang.'?\')">Delete</a>'  ?></td>
    </tr>
    <?php
    }?>
  </tbody>
</table>
</body>
</html>