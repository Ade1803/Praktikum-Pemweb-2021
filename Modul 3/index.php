<h3>DATA PEGAWAI</h3>

<input type="button" value="Tambah" onclick="document.location='formtambah.php'">


<table width="100%" border="1">
<thead>
    <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Tanggal_Lahir</th>
        <th>Jenis_Kelamin</th>
        <th>Alamat</th>
        <th>Edit_Data</th>
        <th>Hapus_Data</th>
    </tr>
</thead>

<?php
include "koneksi.php";
$ambildata = mysqli_query($koneksi, "select * from pegawai");
while ($data = mysqli_fetch_array($ambildata)){
    echo"
    <tr>
        <td>$data[NIP]</td>
        <td>$data[Nama]</td>
        <td>$data[Tanggal_Lahir]</td>
        <td>$data[Jenis_Kelamin]</td>
        <td>$data[Alamat]</td>
        <td> <a href='editdata.php?NIP=$data[NIP]?>'> Edit</a></td>
        <td> <a href='hapusdata.php?NIP=$data[NIP]?>'> Hapus</a></td>
    </tr>";

}
?>
</table>