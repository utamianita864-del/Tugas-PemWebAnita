<!DOCTYPE html>
<html>
<head>
    <title>Cek Kategori Usia Mahasiswa</title>
</head>
<body>

<h1>Cek Kategori Usia Mahasiswa</h1>

<hr>

<p>Program sederhana untuk menentukan kategori usia mahasiswa.</p>

<hr>

<form method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" placeholder="Masukkan nama Anda" required></td>
        </tr>

        <tr>
            <td>Umur</td>
            <td><input type="number" name="umur" placeholder="Masukkan umur Anda" required></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" name="cek" value="Cek Status">
            </td>
        </tr>
    </table>
</form>

<hr>

<?php

if (isset($_POST['cek'])) {

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    echo "<h2>Hasil Pemeriksaan</h2>";

    if ($umur < 13) {
        $kategori = "Anak-anak";
    }
    elseif ($umur >= 13 && $umur <= 17) {
        $kategori = "Remaja";
    }
    elseif ($umur >= 18 && $umur <= 59) {
        $kategori = "Dewasa";
    }
    else {
        $kategori = "Lansia";
    }

    echo "Halo, <b>$nama</b>!<br><br>";
    echo "Umur Anda : $umur tahun.<br><br>";
    echo "Kategori usia Anda adalah <b>$kategori</b>.";
}

?>

</body>
</html>