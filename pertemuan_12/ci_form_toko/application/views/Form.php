<html>
<head>
  <title> 
    <?php echo $judul;?> 
  </title>
  <style>
    h1{
      font-family: 'Marck Script', cursive;
    }
    input[type=text],[type=number], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=submit] {
      width: 100%;
      background-color: #5DA7DB;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type=submit]:hover {
      background-color: #3E6D9C;
    }
    a {
      float: right;
      background-color: #D0B8A8;
      color: white;
      padding: 7px 10px;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      font-family: "Andale Mono", "Monotype.com", monospace;
    }
    a:hover {
      background-color: #DFD3C3;
    }
    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
  </style>
</head>

<body>
  <h1 align = center> Insert Data Transaksi </h1>
  <form action="simpan_transaksi" method="post">
    <table align = center width = 600px>
      <tr>
        <td></td>
        <td><a href="<?php echo base_url('index.php/Control_toko/daftar_user');?>"> Lihat Daftar Transaksi </a></td>
      </tr>
      <tr>
        <td>Kode Barang</td>
        <td><input type="text" name="kode_barang"/></td>
      </tr>

      <tr>
       <td>Nama Barang</td>
       <td><input type="text" name="nama_barang"/></td>
      </tr>

      <tr>
       <td>Harga Satuan</td>
       <td> <input type="text" name="harga_satuan" id="harga_satuan" value="" onchange="total()"/> </td>
      </tr>

      <tr>
        <td>Jumlah Beli</td>
        <td> <input type="number" name="jumlah" id="total_beli" value="" onchange="total()"/> </td>
      </tr>

      <tr>
        <td> Total Bayar</td>
        <td> <input type="text" name="total_bayar" id="total_harga" value="0" readonly/> </td>
      </tr>
      <tr>
        <td><input type="submit" value="SIMPAN"/></td>
      </tr>
      <!--Menghitung fungsi total-->
      <script type="text/javascript">
        function total() {
          var harga_total =
          document.getElementById("harga_satuan").value *
          document.getElementById("total_beli").value;
          document.getElementById("total_harga").value = harga_total;
        }
        </script>
    </table>
  </form>
</body>
</html>

