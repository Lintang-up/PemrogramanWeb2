<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO AKSESORIS & HARDWARE KOMPUTER</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: grey;
        }

        header h1 {
            text-align: center;
        }

        .content {
            width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            overflow: auto;
            border-radius: 10px;
            box-shadow: 5px 5px 15px black;
        }

        header {
            margin-bottom: 20px;
        }

        .customerName {
            margin-bottom: 20px;
        }

        .myTable {
            margin: 0 auto;
            width: 100%;
        }

        .myTable td,
        th {
            padding: 5px;
        }

        .myTable th {
            background-color: #bfbfbf;
        }

        .sign {
            float: right;
            text-align: center;
        }

        .nilai {
            background-color: yellow;
            text-align: right;
        }

        .tengah {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="content">
        <header>
            <h1>TOKO AKSESORIS & HARDWARE KOMPUTER</h1>
            <h1>"ZHIDO LARIZ" - SURAKARTA</h1>
            <hr>
        </header>
        <article>
            <section class="customerName">
                <table>
                    <tr>
                        <td>No. Kuitansi</td>
                        <td>: 023</td>
                    </tr>
                    <tr>
                        <td>Nama Pembeli</td>
                        <td>: M. Sholeh</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: Bebekan, Gergunung, klaten Utara, Klaten, Jawa Tengah</td>
                    </tr>
                </table>
            </section>
            <section>
                <?php
                // $nama = ["Flashdisk", "Printer Inkjet", "Scanner HP"];
                // $harga = ["flashdisk" => 55000, "printerInkjet" => 1300000, "scanner" => 735000];
                // $jumlah = ["flashdisk" => 7, "printerInkjet" => 3, "scanner" => 1];

                $dataku = [
                    [
                        "nama" => "Flashdisk",
                        "harga" => 55000,
                        "jumlah" => 7,
                    ],
                    [
                        "nama" => "Print Inkjet",
                        "harga" => 1300000,
                        "jumlah" => 8,
                    ],
                    [
                        "nama" => "Scanner HP",
                        "harga" => 735000,
                        "jumlah" => 1,
                    ],
                    [
                        "nama" => "LCD Toshiba",
                        "harga" => 1550000,
                        "jumlah" => 5,
                    ],
                    [
                        "nama" => "Finger Print",
                        "harga" => 780000,
                        "jumlah" => 7,
                    ]
                ];
                ?>
                <table border="1" class="myTable">
                    <tr>
                        <th>NAMA BARANG</th>
                        <th>HARGA SATUAN</th>
                        <th>JUMLAH</th>
                        <th>POTONGAN</th>
                        <th>TOTAL BAYAR</th>
                    </tr>
                    <?php foreach ($dataku as $data) : ?>
                        <tr>
                            <!-- looping -->
                            <?php
                            $total = $data['harga'] * $data['jumlah'];

                            if ($data['jumlah'] > 4) {
                                $potongan = ($data['harga'] * 0.1) * ($data['jumlah'] - 4);
                                // $totalPotongan = array_sum($potongan);
                                $totalPotongan = $potongan;
                                
                                print_r($totalPotongan);
                                $bayar = $total - $totalPotongan;
                            } else {
                                $totalPotongan = 0;
                                $bayar = $total - $totalPotongan;
                            }

                            ?>
                            <td><?= $data['nama'] ?></td>
                            <td><?= number_format( $data['harga']) ?></td>
                            <td><?= number_format($data['jumlah']) ?></td>
                            <td><?= number_format($totalPotongan) ?></td>
                            <td><?= number_format($bayar) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </section>
            <section>
                <p>Terima kasih atas kunjungan Anda, dan semoga pelayanan kami memuaskan Anda.</p>
            </section>
            <section class="sign">
                <div>
                    <p>Surakarta, 05-10-2022</p>
                    <p>Kasir</p>
                    <br><br><br>
                    <p>Drupadi</p>
                </div>
            </section>
        </article>
    </div>
</body>

</html>