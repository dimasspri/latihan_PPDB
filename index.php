<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB DAFTAR SISWA</title>
</head>
<body>
    <h1>PPDB siswa</h1>
        <table border= "1">
        <a href="tambahsiswa.php">TAMBAH</a>
        <a href="ekspor_siswa.php>">EKSPOR</a>
            <tr>
                <td>No</td>
                <td>Nisn</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>
            <?php 
                include 'koneksi.php';
                $no = 1;
                $query = mysqli_query($connection, "SELECT * FROM tbl_pendaftar");
                while ($row = mysqli_fetch_array($query)) {
            ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nisn'] ?></td>
                <td><?php echo $row['nama_lengkap'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td class="text-center">

                    <a href="edit_siswa.php?id=<?php echo $row['id_siswa']?>" class="btn btn-primary">edit</a>
                    <a href="hapus_siswa.php?id=<?php echo $row['id_siswa']?>">hapus</a>
                    
                </td>
            </tr>
            <?php  
                }
            ?>
        </table>
    
</body>
</html>