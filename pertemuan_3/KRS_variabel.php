<html>
  <head>
    <link rel='shorcut icon' href=https://cdn.iconscout.com/icon/free/png-256/reminders-14-461604.png>
    <title> KRS Lintang VARIABEL</title>
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

    <!-- -------------------------------------VARIABEL ATAS------------------------------------------ -->
    <?php
    $prodi    = "FAKULTAS ILMU KOMPUTER";
    $univ      = "UNIVERSITAS DUTA BANGSA SURAKARTA";
    $alamat  = "Jl. Bhayangkara No. 55 Surakarta Telp. 0271-719552 web: http://fikom.udb.ac.id";
    $krs        = "Kartu Rencana Study";

    $no_daftar  = "No.Daftar &emsp;&emsp;&emsp;: 202121253";
    $nim           = "NIM &emsp;&emsp;&emsp;&emsp;&emsp;: 210103028";
    $namaku    = "Nama &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;: MUHAMMAD LINTANG PAMUNGKAS";
    $pm            = "Program Studi &emsp;: Teknik Informatika";

    $pa         = "Pembimbing Akademik               &emsp;:             Dessy Ambarsari, S.E., M.M,";
    $jenjang = "Jenjang                &ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:                S1";
    $jd          = "Jenis Daftar             &nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;:               Regular";
    $sem       = "Semester              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:            2022/2023 Ganjil ";
    ?>
    <!-- -------------------------------------VARIABEL ATAS------------------------------------------ -->

    <!--  -------------------------LOGO-----------------------  -->
    <div class="logo">
      <img class ="logo_udb" src="img/logo_udb.png">
      
      <div class="fikom">
        <h1 class= "fik">
        <?php
          echo " $prodi </h1> ";
          echo "<p class=udbs> $univ <p>";
          echo "<p> $alamat  </p>";
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
          echo "$krs </h1> <br>";
          ?>
    </div>
</div>
    <!--  --------------------------PENUTUP KRS-------------------------  -->

    <!--  ------------------------------NAMA-----------------------------  -->
    <div class ="nma"> 
        <div class="nm">
          <?php
          echo "$no_daftar <br>";
          echo "$nim <br>";
          echo "$namaku <br>";
          echo "$pm";
          ?>
        </div>

        <div class="nm_2">
          <?php
          echo "$pa <br>";
          echo "$jenjang  <br>";
          echo "$jd <br>";
          echo "$sem <br> <br>";
          ?>
        </div>
    </div>
    <!--  ------------------------------PENUTUP NAMA----------------------------  -->

    <!-- -----------------------------------------VARIABEL TABEL------------------------------------- -->
    <?php
      $no = "no";
      $kls = "Kelas";
      $kodem = "Kode Matkul";
      $matkul = "Mata Kuliah";
      $sks = "SKS";
      $paraf = "Paraf Pengawas Ujian";
      $uts = "UTS";
      $uas = "UAS";

      $no1 = array('1','2','3','4','5','6','7','8','9','10');
      $kls1 = "21A1";
      $kodem1 = array('TI20307', 'TI305', 'TI307', 'MKB304', 'MKK325', 'MKB318', 'MKB309', 'TI20308');
      $matkul1 = array('KEWIRAUSAHAAN 1', 'Matematika Diskrit', 'Rekayasa Perangkat Lunak', 'PEMROGRAMAN WEB 2 ', 'STATISTIK', 'PEMROGRAMAN BASIS DATA', 'PEMROGRAMAN BERORIENTASI OBJECT', 'BAHASA INGGRIS 3' );
      $sks1 = array('3', '2');
    ?>
    <!-- -----------------------------------------VARIABEL TABEL------------------------------------- -->

    <!--  ----------------------------------TABEL KRS--------------------------------  -->
<div class="tabel_main">
    <table class="table1">
		    <tr>
          <?php
			    echo "<th rowspan=2> $no </th>";
			    echo "<th rowspan=2> $kls </th>";
		    	echo "<th rowspan=2> $kodem </th>";
			    echo "<th rowspan=2> $matkul </th>";
          echo "<th rowspan=2> $sks </th>";
          echo "<th colspan=2> $paraf </th>";
          echo "         <tr>
                        <th>$uts</th>
                        <th>$uas</th>
                    </tr>"
          ?>             
		    </tr>
       
         <tr>
         <?php
		        echo	"<td> $no1[0] </td>";
	    	    echo	"<td>  $kls1 </td>";
		        echo	"<td>  $kodem1[0] </td>";
		        echo	"<td class=matkul> $matkul1[0] </td>";
		        echo	"<td> $sks1[0] </td>";
		        echo	"<td>  </td>";
		        echo	"<td>  </td>";
            ?>
        </tr>
         <tr>
         <?php
		        echo	"<td> $no1[1] </td>";
	    	    echo	"<td>  $kls1 </td>";
		        echo	"<td>  $kodem1[1] </td>";
		        echo	"<td class=matkul> $matkul1[1] </td>";
		        echo	"<td> $sks1[0] </td>";
		        echo	"<td>  </td>";
		        echo	"<td>  </td>";
            ?>
        </tr>
         <tr>
         <?php
		        echo	"<td> $no1[2] </td>";
	    	    echo	"<td>  $kls1 </td>";
		        echo	"<td>  $kodem1[2] </td>";
		        echo	"<td class=matkul> $matkul1[2] </td>";
		        echo	"<td> $sks1[0] </td>";
		        echo	"<td>  </td>";
		        echo	"<td>  </td>";
            ?>
        </tr>
         <tr>
         <?php
		        echo	"<td> $no1[3] </td>";
	    	    echo	"<td>  $kls1 </td>";
		        echo	"<td>  $kodem1[3] </td>";
		        echo	"<td class=matkul> $matkul1[3] </td>";
		        echo	"<td> $sks1[0] </td>";
		        echo	"<td>  </td>";
		        echo	"<td>  </td>";
            ?>
        </tr>
         <tr>
         <?php
		        echo	"<td> $no1[4] </td>";
	    	    echo	"<td>  $kls1 </td>";
		        echo	"<td>  $kodem1[4] </td>";
		        echo	"<td class=matkul> $matkul1[4] </td>";
		        echo	"<td> $sks1[0] </td>";
		        echo	"<td>  </td>";
		        echo	"<td>  </td>";
            ?>
        </tr>
         <tr>
         <?php
		        echo	"<td> $no1[5] </td>";
	    	    echo	"<td>  $kls1 </td>";
		        echo	"<td>  $kodem1[5] </td>";
		        echo	"<td class=matkul> $matkul1[5] </td>";
		        echo	"<td> $sks1[0] </td>";
		        echo	"<td>  </td>";
		        echo	"<td>  </td>";
            ?>
        </tr>
         <tr>
         <?php
		        echo	"<td> $no1[6] </td>";
	    	    echo	"<td>  $kls1 </td>";
		        echo	"<td>  $kodem1[6] </td>";
		        echo	"<td class=matkul> $matkul1[6] </td>";
		        echo	"<td> $sks1[0] </td>";
		        echo	"<td>  </td>";
		        echo	"<td>  </td>";
            ?>
        </tr>
         <tr>
         <?php
		        echo	"<td> $no1[7] </td>";
	    	    echo	"<td>  $kls1 </td>";
		        echo	"<td>  $kodem1[7] </td>";
		        echo	"<td class=matkul> $matkul1[7] </td>";
		        echo	"<td> $sks1[1] </td>";
		        echo	"<td>  </td>";
		        echo	"<td>  </td>";
            ?>
        </tr>
         <tr>
		       <td>  &emsp; </td>
	    	   <td>   </td>
		       <td>   </td>
		       <td class="matkul">  </td>
		       <td>  </td>
		       <td>  </td>
		       <td>  </td>
        </tr>
         <tr>
		       <td> &emsp;  </td>
	    	   <td>   </td>
		       <td>   </td>
		       <td class="matkul">  </td>
		       <td>  </td>
		       <td>  </td>
		       <td>  </td>
        </tr>
	    </table>	
</div>
 <!--  ----------------------------------PENUTUP TABEL KRS--------------------------------  -->

 <!-- --------------------------------VARIABEL TANDA TANGAN---------------------------- -->
    <?php
      $PA = array('&emsp;&emsp;&emsp; Mengesahkan,' ,'<br> &emsp;Pembimbing Akademik', '<br><br><br><br><br> Dessy Ambarsari, S.E., M.M,');
      $SKA = array('&emsp;&emsp; Surakarta, ___________________ ', '<br> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Mahasiswa', ' <br><br><br><br><br> MUHAMMAD LINTANG PAMUNGKAS');
      $SKS = "Jumlah SKS &emsp;: 23";
    ?>
 <!-- --------------------------------VARIABEL TANDA TANGAN---------------------------- -->

 <!--  ------------------------------------TANDA TANGAN----------------------------------  -->
<div class="ttn">
<img class ="foto_qr" src="img/qr.png">

<div class="PA">
<h4>
        <?php
          echo "$PA[0]";
          echo "$PA[1]";
          echo "$PA[2] </h4> ";
          ?>
</div>

<div class="ska">
<h4>
        <?php
          echo "$SKA[0]";
          echo "$SKA[1]";
          echo "$SKA[2] </h4> ";
          ?>
</div>

<div class="sks">
<h4>
        <?php
          echo " $SKS</h4>";
          ?>
</div>
</div>
 <!--  ------------------------------------PENUTUP TANDA TANGAN----------------------------------  -->

</div>
  </body>
</html>