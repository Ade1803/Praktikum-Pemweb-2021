<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pegawai</title>
</head>
<body>
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit Data</h3>
 
	<?php 
	include "koneksi.php";
	$NIP = $_GET['NIP'];
	$query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE NIP='$NIP'");
    while ($data = mysqli_fetch_array($query)){
	?>
	<form action="update.php" method="post">		
		<table>
            <tr>
                <td>NIP</td>
                <td>
                    <input type="number" name="NIP" value="<?php echo $data['NIP'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="Nama" value="<?php echo $data['Nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Tanggal_Lahir</td>
                <td>
                    <input type="date" name="Tanggal_Lahir" value="<?php echo $data['Tanggal_Lahir'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis_Kelamin</td>
                <td>
                    <input type="text" name="Jenis_Kelamin" value="<?php echo $data['Jenis_Kelamin'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="Alamat" value="<?php echo $data['Alamat'] ?>">
                </td>
            </tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
    <?php } ?>
</body>
</html>