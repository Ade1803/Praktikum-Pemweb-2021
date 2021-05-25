<?php
$koneksi = mysqli_connect("localhost", "root", "", "pemilu");
if($koneksi) {
    //echo "koneksi berhasil";
} else {
    echo "koneksi gagal";
}
?>