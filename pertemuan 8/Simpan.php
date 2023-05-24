<?php

// Get Posted Data
$Name = $_POST['Nama'];
$User = $_POST['User'];
$Pass = $_POST['Pass'];

// Include Database Connection File
include_once("connection.php");

// Insert User Data Into Table
$result = mysqli_query($Conn, "INSERT INTO tbl_user(Username, Password, Nama) VALUES('$User' , '$Pass' , '$Name')");

// Show Message When User Added
echo " User Added Successfull. <a href='Data.php'>View Users</a>";
