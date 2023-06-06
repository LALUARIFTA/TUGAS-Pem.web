<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <h1>Form Input Data User</h1>
    <a href="Data.php">Lihat Data</a>
    <br /><br />

    <form action="Simpan.php" method="post">
        <table width="25%" border="0">
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td><select name="prodi" id="prodi">
                    <option value="ilmu Komputer">Ilmu kommputer</option>
                    <option value="Gizi">Gizi</option>
                    <option value="DKV">DKV</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="Submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

</body>
</html>