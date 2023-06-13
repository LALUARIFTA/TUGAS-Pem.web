<?php
session_start();
// $_SESSION['login'] = true;
if (!isset($_SESSION['login'])) {
  echo "ini belum login";
} else {
  echo "ini sudah login";
}
// session_destroy();