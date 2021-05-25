<html>
<head></head>
<body>
<table>
 
    <thead>
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Keterangan</th>
    </tr>
    </thead>
 <tbody>
 <?php
include "koneksi.php";
$ambildata = mysqli_query($koneksi, "select * from anggota");
while ($data = mysqli_fetch_array($ambildata)){
    echo"
    <tr>
        <td>$data[Id]</td>
        <td>$data[Nama]</td>
        <td>$data[Jenis_Kelamin]</td>
        <td>$data[Keterangan]</td>
    </tr>";

}
?>
</tbody>
 </table>
</body>
</html>