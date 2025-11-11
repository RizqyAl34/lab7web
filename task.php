<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input Data</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br><br>
        Tanggal Lahir: <input type="date" name="tgl_lahir" required><br><br>
        Pekerjaan:
        <select name="pekerjaan" required>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
        </select><br><br>
        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        $umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;

        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 10000000;
                break;
            case "Desainer":
                $gaji = 8000000;
                break;
            case "Guru":
                $gaji = 6000000;
                break;
            case "Dokter":
                $gaji = 12000000;
                break;
            default:
                $gaji = 5000000;
                break;
        }

        echo "<hr>";
        echo "<h3>Output Data</h3>";
        echo "Nama: $nama <br>";
        echo "Tanggal Lahir: $tgl_lahir <br>";
        echo "Umur: $umur tahun <br>";
        echo "Pekerjaan: $pekerjaan <br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>";
    }
    ?>
</body>
</html>