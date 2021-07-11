<?php
//koneksi database
include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from karyawan where id = '$id'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");
?>