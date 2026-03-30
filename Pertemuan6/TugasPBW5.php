<?php
define("PAJAK", 0.10);

$barang = [
    "nama" => "Keyboard",
    "harga" => 150000
];

$jumlahBeli = 2;

$totalSebelumPajak = $barang["harga"] * $jumlahBeli;
$nilaiPajak = $totalSebelumPajak * PAJAK;
$totalBayar = $totalSebelumPajak + $nilaiPajak;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tugas PBW</title>
    <style>
    .box {
        width: 400px;
        border: 1px solid black;
        padding: 15px;
        font-family: Arial;
    }

    h2 {
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="box">
        <section class="content">
            <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
            <hr>
            <p>Nama Barang: <?= $barang["nama"]; ?></p>
            <p>Harga Satuan: Rp <?= number_format($barang["harga"], 0, ",", "."); ?></p>
            <p>Jumlah Beli: <?= $jumlahBeli; ?></p>
            <p>Total Harga: Rp <?= number_format($totalSebelumPajak, 0, ",", "."); ?></p>
            <p>Pajak (10%): Rp <?= number_format($nilaiPajak, 0, ",", "."); ?></p>
            <p><b>Total Bayar: Rp <?= number_format($totalBayar, 0, ",", "."); ?></b></p>
        </section>
    </div>
</body>

</html>