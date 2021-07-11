<?php
//include koneksi database
include './config.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$Nama = $_POST['Nama'];
$NoKTP = $_POST['NoKTP'];
$NoTelpon = $_POST['NoTelpon'];
$TahunMasuk = $_POST['TahunMasuk'];
$JumlahMasaKerja = date("Y") - $TahunMasuk;

//menginput data ke database
mysqli_query($koneksi, "insert into karyawan (Nama, NoTelpon, TahunMasuk, JumlahMasaKerja, id, NoKTP) values('$Nama', '$NoTelpon', '$TahunMasuk', '$JumlahMasaKerja', '', '$NoKTP')");
//mengembalikan ke halaman awal
header("location:./index.php");