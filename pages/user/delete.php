<?php
session_start();
if (!isset($_SESSION['user'])) {

  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');


$id_user = htmlspecialchars($_GET['id_user']);


if ($_SESSION['user']['id_user'] == $id_user) {
  echo "<script>window.alert('Tidak dapat menghapus data sendiri!'); window.location.href='../user'</script>";
  exit;
}


$query = "DELETE FROM user WHERE id_user = $id_user";

$hasil = mysqli_query($db, $query);


if ($hasil == true) {
  echo "<script>window.location.href='../user'</script>";
} else {
  echo "<script>window.alert('Data user gagal dihapus!'); window.location.href='../user'</script>";
}
