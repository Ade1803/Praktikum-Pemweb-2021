<?php
include_once("koneksi.php");

$NIP = $_POST['NIP'];
$Nama = $_POST['Nama'];
$TanggalLahir = $_POST['Tanggal_Lahir'];
$JenisKelamin = $_POST['Jenis_Kelamin'];
$Alamat = $_POST['Alamat'];

$query = mysqli_query($koneksi,"INSERT INTO pegawai(NIP, Nama, Tanggal_Lahir, Jenis_Kelamin, Alamat) 
VALUE ('$NIP','$Nama','$TanggalLahir','$JenisKelamin','$Alamat')");

if($query){
    header('Location:index.php');
}