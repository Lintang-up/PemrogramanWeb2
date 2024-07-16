<html>
  <head>
    <link rel='shorcut icon' href=https://cdn.iconscout.com/icon/free/png-256/reminders-14-461604.png>
    <title> KRS Lintang</title>
    <style>
      .garis_tepi{
        width: 1336px;
        height: 900px;
      }

      .bg{
        background-color: #F7F6F2;
      }

      .logo_udb{
        float: left;
        margin: 45px 0px 0px 140px;
        width: 80px;
        height: 110px;
      }

      .fikom{
        float: left;
        margin: 40px;
      }

      .udbs{
        color: #000066;
        line-height:0;
        font-size: 30px;
        font-weight: bold;
        font-family: arial;
      }
      
      .fik{
        line-height:0;
        font-family: monospace;
      } 

      img.foto_mhs {
        float: left;
        margin: 40px 0px 0px 147px;
        width: 120px;
        height: 165px;
}

      .krs{
        float: left;
        font-family: 'Marck Script', cursive;
        margin: 0 0 0 500px;
        text-align: center;
      }

      .nma{
        float:left;
      }

      .nm{
        float: left;
        margin: 0 0 0 140px;
      }

      .nm_2{
        float: left;
        margin: 0 0 0 240;
      }

      .tabel_main{
        margin: 0px 20px 0 140px;
      }

      .table1 {
        align: center ;
        font-family: sans-serif;
        color: #232323;
        border-collapse: collapse;
}
 
      .table1, th, td {
        text-align: center;
        border: 1px solid #999;
        padding: 8px 20px;
}

      .matkul{
        text-align: left;
        width: 443px;
      }

      .table1, th, td {
        padding: 8px 20px;
        text-align: center;
}
 
      .table1 tr:hover {
        background-color: #f5f5f5;
}
 
      .table1 tr:nth-child(even) {
        background-color: #f2f2f2;
}

      img.foto_qr {
        float: left;
        margin: 20px 0px 0px 140px;
        width: 130px;
        height: 130px;
}

      .PA{
        float: left;
        margin: 0px 0px 100px 90px;
      }

      .ska{
        float: left;
        margin: 0px 0px 100px 90px;
      }

      .sks{
        float: left;
        margin: 0px 0px 100px 90px;
      }

    </style>
  </head>

  <body class="bg">
    <div class="garis_tepi">

    <!--  -------------------------LOGO-----------------------  -->
    <div class="logo">
      <img class ="logo_udb" src="img/logo_udb.png">
      
      <div class="fikom">
        <h1 class= "fik">
        <?php
          echo "FAKULTAS ILMU KOMPUTER </h1> ";
          echo "<p class=udbs> UNIVERSITAS DUTA BANGSA SURAKARTA <p>";
          echo "<p> Jl. Bhayangkara No. 55 Surakarta Telp. 0271-719552 web: http://fikom.udb.ac.id
          </p>";
        ?>
      </div>

      <img class ="foto_mhs" src="img/bg.png">
    </div>      
    <!--  -------------------------PENUTUP LOGO-----------------------  -->

    <!--  --------------------------------KRS------------------------------  -->
<div class= "main_krs">
    <div class="krs">
       <h1>
         <?php
          echo "Kartu Rencana Study </h1> <br>";
          ?>
    </div>
</div>
    <!--  --------------------------PENUTUP KRS-------------------------  -->

    <!--  ------------------------------NAMA-----------------------------  -->
    <div class ="nma"> 
        <div class="nm">
          <?php
          echo "No.Daftar &emsp;&emsp;&emsp;: 202121253 <br>";
          echo "NIM &emsp;&emsp;&emsp;&emsp;&emsp;: 210103028 <br>";
          echo "Nama &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;: MUHAMMAD LINTANG PAMUNGKAS <br>";
          echo "Program Studi &emsp;: Teknik Informatika";
          ?>
        </div>

        <div class="nm_2">
          <?php
          echo "Pembimbing Akademik               &emsp;:             Dessy Ambarsari, S.E., M.M, <br>";
          echo "Jenjang                &ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:                S1 <br>";
          echo "Jenis Daftar             &nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;:               Regular <br>";
          echo "Semester              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:           2022/2023 Ganjil <br> <br>";
          ?>
        </div>
    </div>
    <!--  ------------------------------PENUTUP NAMA----------------------------  -->

    <!--  ----------------------------------TABEL KRS--------------------------------  -->
<div class="tabel_main">
    <table class="table1">
		    <tr>
			    <th rowspan="2"> No </th>
			    <th rowspan="2"> Kelas </th>
		    	<th rowspan="2"> Kode Matkul </th>
			    <th rowspan="2"> Mata Kuliah </th>
          <th rowspan="2"> SKS </th>
          <th colspan="2"> Paraf Pengawas Ujian</th>
                    <tr>
                        <th>UTS</th>
                        <th>UAS</th>
                    </tr>
		    </tr>
        
	    	<tr>
		    	<td> 1 </td>
	    		<td> 21A1 </td>
		    	<td> TI20307 </td>
		    	<td class="matkul"> KEWIRAUSAHAAN 1 </td>
		    	<td> 3 </td>
		    	<td>  </td>
		    	<td>  </td>
	    	</tr>
        <tr>
		    	<td> 2 </td>
	    		<td> 21A1 </td>
		    	<td> TI305 </td>
		    	<td class="matkul"> MATEMATIKA DISKRIT </td>
		    	<td> 3 </td>
		    	<td>  </td>
		    	<td>  </td>
	    	</tr>
        <tr>
		    	<td> 3 </td>
	    		<td> 21A1 </td>
		    	<td> TI307  </td>
		    	<td class="matkul"> REKAYASA PERANGKAT LUNAK </td>
		    	<td> 3 </td>
		    	<td>  </td>
		    	<td>  </td>
	    	</tr>
        <tr>
		    	<td> 4 </td>
	    		<td> 21A1 </td>
		    	<td> MKB304 </td>
		    	<td class="matkul"> PEMROGRAMAN WEB 2</td>
		    	<td> 3 </td>
		    	<td>  </td>
		    	<td>  </td>
	    	</tr>
        <tr>
		    	<td> 5 </td>
	    		<td> 21A1 </td>
		    	<td> MKK325 </td>
		    	<td class="matkul"> STATISTIK  </td>
		    	<td> 3 </td>
		    	<td>  </td>
		    	<td>  </td>
	    	</tr>
        <tr>
		    	<td> 6 </td>
	    		<td> 21A1 </td>
		    	<td> MKB318 </td>
		    	<td class="matkul"> PEMROGRAMAN BERBASIS DATA </td>
		    	<td> 3 </td>
		    	<td>  </td>
		    	<td>  </td>
	    	</tr>
        <tr>
		    	<td> 7 </td>
	    		<td> 21A1 </td>
		    	<td> MKB309 </td>
		    	<td class="matkul"> PEMROGRAMAN BERORIENTASI OBJECT  </td>
		    	<td> 3 </td>
		    	<td>  </td>
		    	<td>  </td>
	    	</tr>
        <tr>
		    	<td> 8 </td>
	    		<td> 21A1 </td>
		    	<td> TI20308 </td>
		    	<td class="matkul"> BAHASA INGGRIS 3 </td>
		    	<td> 2 </td>
		    	<td>  </td>
		    	<td>  </td>
	    	</tr>
        <tr>
		    	<td> &emsp; </td>
	    		<td>  </td>
		    	<td>  </td>
		    	<td class="matkul"> </td>
		    	<td>  </td>
		    	<td>  </td>
		    	<td>  </td>
	    	</tr>
        <tr>
		    	<td> &emsp; </td>
	    		<td>  </td>
		    	<td>  </td>
		    	<td class="matkul"> </td>
		    	<td>  </td>
		    	<td>  </td>
		    	<td>  </td>
	    	</tr>
	    </table>	
</div>
 <!--  ----------------------------------PENUTUP TABEL KRS--------------------------------  -->

 <!--  ------------------------------------TANDA TANGAN----------------------------------  -->
<div class="ttn">
<img class ="foto_qr" src="img/qr.png">

<div class="PA">
<h4>
        <?php
          echo "&emsp;&emsp;&emsp; Mengesahkan,";
          echo " <br> &emsp; Pembimbing Akademik";
          echo " <br><br><br><br><br> Dessy Ambarsari, S.E., M.M, </h4> ";
          ?>
</div>

<div class="ska">
<h4>
        <?php
          echo "&emsp;&emsp; Surakarta, ___________________ ";
          echo " <br> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Mahasiswa";
          echo " <br><br><br><br><br> MUHAMMAD LINTANG PAMUNGKAS </h4> ";
          ?>
</div>

<div class="sks">
<h4>
        <?php
          echo "Jumlah SKS &emsp;: 23 </h4>";
          ?>
</div>
</div>
 <!--  ------------------------------------PENUTUP TANDA TANGAN----------------------------------  -->

</div>
  </body>
</html>