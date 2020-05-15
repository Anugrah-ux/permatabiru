<?php
session_start();
if (!isset($_SESSION['user'])) {
  
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');


$id_mutasi = htmlspecialchars($_GET['id_mutasi']);


$query = "DELETE FROM mutasi WHERE id_mutasi = $id_mutasi";

$hasil = mysqli_query($db, $query);


if ($hasil == true) {
  echo "<script>window.location.href='../mutasi'</script>";
} else {
  echo "<script>window.alert('Data mutasi gagal dihapus!'); window.location.href='../mutasi'</script>";
}
