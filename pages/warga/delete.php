<?php
session_start();
if (!isset($_SESSION['user'])) {
  
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');


$id_warga = htmlspecialchars($_GET['id_warga']);


$query = "DELETE FROM warga WHERE id_warga = $id_warga";

$hasil = mysqli_query($db, $query);


if ($hasil == true) {
  echo "<script>window.location.href='../warga'</script>";
} else {
  echo "<script>window.alert('Data warga gagal dihapus!'); window.location.href='../warga'</script>";
}
