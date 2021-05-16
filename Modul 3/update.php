<?php 
 
include 'koneksi.php';
$NIP = $_POST['NIP'];
$Nama = $_POST['Nama'];
$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Alamat = $_POST['Alamat'];
 
mysqli_query($koneksi, "UPDATE pegawai SET NIP='$NIP', Nama='$Nama', Tanggal_Lahir='$Tanggal_Lahir', Jenis_Kelamin='$Jenis_Kelamin', Alamat='$Alamat'
WHERE NIP='$NIP'");

header("location:index.php?pesan=update");
 
?>