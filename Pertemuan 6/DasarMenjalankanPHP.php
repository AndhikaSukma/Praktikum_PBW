<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container {
        display: flex;
        width: 100%;
        padding: 20px;
    }

    .content {
        border: 2px solid black;
        padding: 20px;
        width: 400px;
        margin: 40px auto;
    }
    </style>
    </dhead>

<body>
    <div class="container">
        <section class="content">
            <?php
            # ini contoh Dasar nya
            echo "Halo, selamat datang di dunia PHP!<br><br>";

            # Variable dalam PHP
            $nama = "Budi";
            $umur = 20;

            // Menampilkan nilai variable
            echo "Nama: " . $nama . "<br>";
            echo "Umur: " . $umur . "tahun<br><br>";

            // Format Konstanta
            // define("NAMA_KONSTANTA",nilai);
            // Implementasi Konstanta
            define("SITE_NAME", "unsika.ac.id");
            define("VERSION", "1.0");
            echo "Selamat datang di " . SITE_NAME . "<br>";
            echo "Versi Sistem " . VERSION . "<br><br>";

            // Tipe Data
            // String
            $nama = "Andi";
            echo "Nama saya adalah " . $nama . "<br>";
            // Integer
            $umur = 25;
            echo "Umur saya " . $umur . " tahun<br>";
            // Float
            $berat = 55.5;
            echo "Berat badan saya  " . $berat . "kg<br><br>";
            // Boolean
            $isLogin = true;
            // kode sederhana Boolean
            $isLogin = true;
            if ($isLogin) {
                echo "User sudah login" . "<br><br>";
            } else {
                echo "User belum login" . "<br><br>";
            }
            // Array
            $buah = ["apel<br>", "jeruk<br>", "mangga<br>"];
            echo $buah[1];
            echo $buah[2];
            echo $buah[0];
            echo "<br>";
            // Object
            class Mahasiswa
            {
                public $nama;
                public function sapa()
                {
                    return "Halo, saya $this->nama";
                }
            }

            $mhs = new Mahasiswa();
            $mhs->nama = "Jeni";
            echo $mhs->sapa();
            echo "<br><br>";
            // NULL
            $data = null;
            var_dump($data);
            ?>
        </section>
    </div>
</body>
</body>

</html>