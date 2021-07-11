<?php

include './config.php';

$id = $_POST['id'];
$Nama = $_POST['Nama'];
$NoKTP = $_POST['NoKTP'];
$NoTelpon = $_POST['NoTelpon'];
$TahunMasuk = $_POST['TahunMasuk'];
$JumlahMasaKerja = date("Y") - $TahunMasuk;

mysqli_query($koneksi, "update karyawan set Nama = '$Nama', NoTelpon = '$NoTelpon', TahunMasuk = '$TahunMasuk', JumlahMasaKerja = '$JumlahMasaKerja', NoKTP = '$NoKTP' where id = '$id'");

header("location:index.php");
?>