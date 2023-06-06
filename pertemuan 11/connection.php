<?php

$Servername = "localhost";
$Username = "root";
$Password = "";
$Database = "db_mhs";

// Create Connecton
$Conn = mysqli_connect($Servername, $Username, $Password, $Database);

// Check Connection
if (!$Conn) {
    die("Connection Failed : " . mysqli_connect_error());
}
echo "Connected Succesfull";
