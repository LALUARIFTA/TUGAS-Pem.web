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

    <form action="Simpan.php" method="post" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="Submit" name="tambah_user" value="tambah"></td>
            </tr>
        </table>
    </form>

</body>
</html>