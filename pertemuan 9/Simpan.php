<?php

// Get Posted Data
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];

// Include Database Connection File
include_once("connection.php");

// Insert User Data Into Table
$result = mysqli_query($Conn, "INSERT INTO tbl_data(nim, nama, prodi) VALUES('$nim' , '$nama' , '$prodi')");

// Show Message When User Added
echo " User Added Successfull. <a href='Data.php'>View Users</a>";
