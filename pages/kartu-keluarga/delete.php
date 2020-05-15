<?php
session_start();
if (!isset($_SESSION['user'])) {
  
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');


$id_keluarga = htmlspecialchars($_GET['id_keluarga']);


$query = "DELETE FROM kartu_keluarga WHERE id_keluarga = $id_keluarga";

$hasil = mysqli_query($db, $query);


if ($hasil == true) {
  echo "<script>window.location.href='../kartu-keluarga'</script>";
} else {
  echo "<script>window.alert('Data kartu keluarga gagal dihapus!'); window.location.href='../kartu-keluarga'</script>";
}
