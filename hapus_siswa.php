<?php
 
include('koneksi.php');
 
$id = $_GET['id'];
 
$query = "DELETE FROM tbl_pendaftar WHERE id_siswa = '$id'";
 
if ($connection->query($query)) {
    header("location: index.php");
}else{
    echo "DATA GAGAL DIHAPUS";
}