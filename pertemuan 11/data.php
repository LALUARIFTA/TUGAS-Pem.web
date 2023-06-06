<?php
require_once "connection.php";
$query = "SELECT * FROM tbl_data";
$data = mysqli_query($Conn,$query);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>data mahasiswa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
</head>
<body>
    <h1>tambah mahasiswa</h1>
    <a href="tambah_data.php">tambah mahasiswa</a>
    <a href="tambah_user.php">tambah user</a>
    <br><br>
    <table border="1" width="65%">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Proggram Studi</th>
            <th>Action</th>
        </tr>

        <!-- memanggil di dalam tabel -->
        <?php 
        while ($hasil = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $hasil['nim']; ?></td>
            <td><?= $hasil['nama']; ?></td>
            <td><?= $hasil['prodi']; ?></td>
            <td><a href="hapus.php">Hapus</a>|<a href="edit.php">Edit</a></td>
        </tr>
        <?php   } ?>
    </table>
</body>
</html>