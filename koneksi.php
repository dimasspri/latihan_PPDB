<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_ppdb";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// cek koneksi
if ($connection) {
    echo "koneksi berhasil!";
}else {
    echo "koneksi gagal : " .mysqli_connect_error();
}