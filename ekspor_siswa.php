<?php
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: inline; filename-Export_PPDB.xls');
header("Pragma: no-cache");
header("Expirts: 0");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website PPDB</title>
</head>
<body>
    <h1>website PPDB</h1>
    <table>
        <tr>
            <td>NO</td>
            <td>NISN</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
        </tr>
        <?php 
        include "koneksi.php";
        $no=1;
        $query = myqli_query($connection, "SELECT * FROM tbl_pendaftar");
        while ($row = myqli_fetch_array($query)) {
        ?>
        
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['nisn']?></td>
            <td><?php echo $row['nama_lengkap']?></td>
            <td><?php echo $row['alamat']?></td>

        </tr>

        <?php } ?>
        
        
    </table>
</body>
</html>