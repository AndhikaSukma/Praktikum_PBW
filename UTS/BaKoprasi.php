<?php
if (isset($_POST['kirim'])) {

    define("PAJAK", 0.15);

    $nama = $_POST['nama'];
    $nim = $_POST['NIM'];
    $email = $_POST['email'];
    $layanan = $_POST['layanan'];

    $barang = isset($_POST['barang']) ? $_POST['barang'] : [];
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : [];

    $harga = [
        "Buku" => 5000,
        "Pulpen" => 3000,
        "Pensil" => 2000
    ];

    $subtotal = 0;

    echo "<h3>Hasil</h3>";

    if (empty($barang)) {
        echo "Tidak ada barang dipilih!";
    } else {

        echo "<table border='1'>
                <tr>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>";

        foreach ($barang as $b) {
            $jml = isset($jumlah[$b]) ? $jumlah[$b] : 0;
            $total_item = $harga[$b] * $jml;
            $subtotal += $total_item;

            echo "<tr>
                    <td>$b</td>
                    <td>$jml</td>
                    <td>$total_item</td>
                </tr>";
        }

        $pajak = $subtotal * PAJAK;

        if ($layanan == "Reguler") {
            $biaya = 0;
        } else {
            $biaya = 10000;
        }

        $total = $subtotal + $pajak + $biaya;

        echo "<tr><td colspan='2'>Subtotal</td><td>$subtotal</td></tr>";
        echo "<tr><td colspan='2'>Pajak</td><td>$pajak</td></tr>";
        echo "<tr><td colspan='2'>Biaya</td><td>$biaya</td></tr>";
        echo "<tr><td colspan='2'><b>Total</b></td><td><b>$total</b></td></tr>";
        echo "</table>";

        echo "<br>Nama: $nama";
        echo "<br>Email: $email";
        echo "<br>NIM: $nim";
    }
}
?>