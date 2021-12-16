<?php

include('koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM tbl_pendaftar WHERE id_siswa = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditSiswa</title>
</head>
<body>
    <h1>Edit siswa</h1>
    <form action="update_siswa.php" method="post">
        <table border = "1">
            <tr>
                <td><label for="">NISN</label></td>
                <td><input type="number" name="nisn" value="<?php echo $row['nisn']?>"></td>
            </tr>
            <tr>
                <td><label for="">Nama lengkap</label></td>
                <td><input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap']?>"></td>
            </tr>
            <tr>
                <td><label for="">Alamat</label></td>
                <td><input type="text" name="alamat" value="<?php echo $row['alamat']?>"></td>
            </tr>
            <tr>
                <input type=" hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
            </tr>
            </table><br>
            <button type="submit">simpan</button>
    </form>
    
</body>
</html>