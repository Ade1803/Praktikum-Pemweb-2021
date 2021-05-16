<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Pegawai</title>
</head>
<body>
    <h2>Form Tambah Pegawai</h2>
    <p>
        <form method="POST" action="simpandata.php">
            <table>
                <tr>
                    <td>NIP</td>
                    <td>
                        <input type="number" name="NIP" size="20">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" name="Nama" size="20">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>
                        <input type="date" name="Tanggal_Lahir">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="text" name="Jenis_Kelamin" size="20">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="Alamat" size="20">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan Data"></td>
                </tr>
            </table>
        </form>
    </p>
</body>
</html>