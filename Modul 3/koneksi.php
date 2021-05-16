<?php
$koneksi = mysqli_connect("localhost", "root", "", "data_pegawai");
if($koneksi) {
    //echo "koneksi berhasil";
} else {
    echo "koneksi gagal";
}
?>