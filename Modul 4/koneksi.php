<?php
$koneksi = mysqli_connect("localhost", "root", "", "sma_nusa");
if($koneksi) {
    //echo "koneksi berhasil";
} else {
    echo "koneksi gagal";
}
?>