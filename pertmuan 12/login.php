<?php
session_start();
require_once "connection.php";
if (isset($_SESSION["login"])) {
  header("Location: data.php");
  exit;
}
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $query = "SELECT * FROM `tbl_user` WHERE `username` = '$username'";
  // cek username
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) === 1) {
    // kalo username ada, cek password
    $hasil = mysqli_fetch_array($result);
    if ($hasil['username'] && $hasil['password']) {
      $_SESSION['login'] = true;
      header("Location: data.php");
    }
  }
  echo $query;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
</head>

<body>
  <h1>Login Form</h1>
  <form action="" method="POST">
    <table>
      <tr>
        <label>
          <td>
            Username
          </td>
          <td>:</td>
          <td>
            <input type="text" name="username">
          </td>
        </label>
      </tr>
      <tr>
        <label>
          <td>
            Password
          </td>
          <td>:</td>
          <td>
            <input type="text" name="password">
          </td>
        </label>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Login" name="login"></td>
      </tr>
    </table>
  </form>
</body>

</html>