<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah siswa</title>
</head>
<body>
    <form action="simpan_siswa.php" method="post">
    <table border= 1>
        <tr>
            <td><label for="">nisn</label></td>
            <td><input type="number" name="nisn"></td>
        </tr>
        <tr>
            <td><label for="">nama</label></td>
            <td><input type="text" name="nama_lengkap"></td>
        </tr>
        <tr>
            <td><label for="">Alamat</label></td>
            <td><input type="text" name="alamat"></td>
        </tr>
    </table>

    <button type="submit">simpan</button>
    <button type="reset">Reset</button>
</form>
</body>
</html>