<?php
include 'koneksi.php';
$NIP = $_GET['NIP'];
$query="DELETE FROM pegawai WHERE NIP='$NIP'";
mysqli_query($koneksi, $query);
header("location:index.php");
?>