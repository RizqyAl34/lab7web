# lab7web

### Nama: M. Rizqy Al Rasyd
### Nim : 312410424
### Kelas : TI.24.A3

# BELAJAR PHP DASAR
## Code:
``` <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello Wolrd";
    ?>
    
    <h1>Menggunakan Variabel</h1>
    <?php 
    $nim = "0411500400";
    $nama = "Abdullah";
    echo "NIM : " . $nim . "<br>";
    echo "Nama :  $nama";
    ?>


    <h1>Selamat Datang</h1>
    <?php
    echo 'Selamat datang ' . $_GET['nama'];
    ?>

    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <?php
        echo 'Selamat datang ' . $_POST['nama'];
    ?>

    
</body>
</html>
```
<br>

## Output:

