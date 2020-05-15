<?php
session_start();
if (!isset($_SESSION['user'])) {
  
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');


$nama_user = htmlspecialchars($_POST['nama_user']);
$username_user = htmlspecialchars($_POST['username_user']);
$password_user = md5(htmlspecialchars($_POST['password_user']));
$keterangan_user = htmlspecialchars($_POST['keterangan_user']);
$status_user = htmlspecialchars($_POST['status_user']);


$id_user = htmlspecialchars($_POST['id_user']);

if ($_POST['password_user'] == '') {
  

  $query = "UPDATE user SET nama_user = '$nama_user', username_user = '$username_user', keterangan_user = '$keterangan_user', status_user = '$status_user' WHERE user.id_user = $id_user;";
} else {
  

  $query = "UPDATE user SET nama_user = '$nama_user', username_user = '$username_user', password_user = '$password_user', keterangan_user = '$keterangan_user', status_user = '$status_user' WHERE user.id_user = $id_user;";
}

$hasil = mysqli_query($db, $query);


if ($hasil == true) {
  echo "<script>window.alert('Ubah data user berhasil'); window.location.href='../user'</script>";
} else {
  echo "<script>window.alert('Ubah data user gagal!'); window.location.href='../user'</script>";
}
