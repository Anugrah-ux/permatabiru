<?php
session_start();
include('../../config/koneksi.php');


$username_user = htmlspecialchars($_POST['username_user']);
$password_user = md5(htmlspecialchars($_POST['password_user']));


$query = "SELECT * FROM user WHERE username_user = '$username_user' and password_user = '$password_user'";
$hasil = mysqli_query($db, $query);
$data_user = mysqli_fetch_assoc($hasil);


if ($data_user != null) {
  
  $_SESSION['user'] = $data_user;
  header('Location: ../dasbor');
} else {
  
  echo "<script>window.alert('Username atau password salah'); window.location.href='../login'</script>";
}
