<?php

include "fungsi.php";

$hasil = "";
$namaBangun = "";

if (isset($_POST['hitung'])) {

    $kategori = $_POST['kategori'];
    $bangun = $_POST['bangun'];

    // ==========================
    // BANGUN DATAR
    // ==========================

    if ($kategori == "datar") {

        if ($bangun == "persegi") {

            $sisi = $_POST['sisi'];

            $hasil = luasPersegi($sisi);
            $namaBangun = "Luas Persegi";

        } elseif ($bangun == "persegi_panjang") {

            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            $hasil = luasPersegiPanjang($panjang, $lebar);
            $namaBangun = "Luas Persegi Panjang";

        } elseif ($bangun == "segitiga") {

            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];

            $hasil = luasSegitiga($alas, $tinggi);
            $namaBangun = "Luas Segitiga";
        }


    // ==========================
    // BANGUN RUANG
    // ==========================

    } elseif ($kategori == "ruang") {

        if ($bangun == "kubus") {

            $sisi = $_POST['sisi'];

            $hasil = volumeKubus($sisi);
            $namaBangun = "Volume Kubus";

        } elseif ($bangun == "balok") {

            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $tinggi = $_POST['tinggi'];

            $hasil = volumeBalok($panjang, $lebar, $tinggi);
            $namaBangun = "Volume Balok";

        } elseif ($bangun == "tabung") {

            $jari = $_POST['jari'];
            $tinggi = $_POST['tinggi'];

            $hasil = volumeTabung($jari, $tinggi);
            $namaBangun = "Volume Tabung";
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Aplikasi Menghitung Bangun</title>

</head>

<body>

    <h1>Aplikasi Menghitung Bangun</h1>

    <form method="POST">

        <label>Kategori Bangun:</label>

        <select name="kategori" required>

            <option value="">-- Pilih Kategori --</option>

            <option value="datar">
                Bangun Datar
            </option>

            <option value="ruang">
                Bangun Ruang
            </option>

        </select>

        <br><br>


        <label>Pilih Bangun:</label>

        <select name="bangun" required>

            <option value="">
                -- Pilih Bangun --
            </option>

            <option value="persegi">
                Persegi
            </option>

            <option value="persegi_panjang">
                Persegi Panjang
            </option>

            <option value="segitiga">
                Segitiga
            </option>

            <option value="kubus">
                Kubus
            </option>

            <option value="balok">
                Balok
            </option>

            <option value="tabung">
                Tabung
            </option>

        </select>

        <br><br>


        <label>Sisi:</label>

        <input
            type="number"
            name="sisi"
            step="any"
        >

        <br><br>


        <label>Panjang:</label>

        <input
            type="number"
            name="panjang"
            step="any"
        >

        <br><br>


        <label>Lebar:</label>

        <input
            type="number"
            name="lebar"
            step="any"
        >

        <br><br>


        <label>Alas:</label>

        <input
            type="number"
            name="alas"
            step="any"
        >

        <br><br>


        <label>Jari-jari:</label>

        <input
            type="number"
            name="jari"
            step="any"
        >

        <br><br>


        <label>Tinggi:</label>

        <input
            type="number"
            name="tinggi"
            step="any"
        >

        <br><br>


        <button type="submit" name="hitung">
            Hitung
        </button>

    </form>


    <?php if ($hasil !== "") { ?>

        <h2>Hasil Perhitungan</h2>

        <p>

            <?php echo $namaBangun; ?>

            =

            <strong>
                <?php echo $hasil; ?>
            </strong>

        </p>

    <?php } ?>

</body>

</html>