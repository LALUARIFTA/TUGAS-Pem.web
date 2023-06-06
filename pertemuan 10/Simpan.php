<?php
// Include Database Connection File
//memanggil hanya sekali
require_once "connection.php";

//memanggil bisa berkali-kali
//include_once("connection.php");

if (isset($_POST['$tambah'])) {
}


// Get Posted Data
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];


$pindah ="Data.php";

//seluruh data yang akan di ambil
if (isset($_POST['tambah'])) {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    //query untuk insert data
    
    $query = "INSERT INTO tbl_user(nim,nama,prodi) VALUE ('$nim','$nama','$prodi')";
}



// Insert User Data Into Table
$result = mysqli_query($Conn, "INSERT INTO tbl_data(nim, nama, prodi) VALUES('$nim' , '$nama' , '$prodi')");

// Show Message When User Added
echo " User Added Successfull. <a href='Data.php'>View Users</a>";
