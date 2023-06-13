<?php

// require database connection file
require_once "connection.php";

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "
            <script>
            alert('pilih gambar terlebih dahulu');</script>
        ";
        return false;
    }

    // cek gambar atau bukan yang diupload
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
        alert('yang anda upload bukan gambar');</script>
        ";
        return false;
    }

    // cek ukuran file
    if ($ukuranFile > 1000000) {
        echo "
        <script>
            alert('ukuran gambar lebih dari 1MB');</script>
        ";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}


// Get posted data.
if (isset($_POST['tambah_user'])) {

    $name = $_POST['nama'];
    $user = $_POST['username'];
    $password = $_POST['password'];

    $query = "insert into tbl_user(nama,username,password) values('$name','$user','$password')";
} elseif (isset($_POST['tambah_data'])) {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $query = "insert into tbl_data(nim, nama, prodi, gambar) values('$nim', '$nama', '$prodi', '$gambar')";
}

// Insert user data into table
$result = mysqli_query($Conn, $query);

// show message when user added
echo "User added successfully. <a href='contoh_view.php'>View Users</a>";
