<?php
session_start();
if (!isset($_SESSION['user'])) {
  /
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');


$id_warga = htmlspecialchars($_GET['id_warga']);
$id_keluarga = htmlspecialchars($_GET['id_keluarga']);


$query = "DELETE FROM warga_has_kartu_keluarga WHERE id_warga = $id_warga AND id_keluarga = $id_keluarga";

$hasil = mysqli_query($db, $query);


if ($hasil == true) {
  echo "<script>window.location.href='../kartu-keluarga/edit-anggota.php?id_keluarga=$id_keluarga'</script>";
} else {
  echo "<script>window.alert('Data anggota gagal dihapus!'); window.location.href='../kartu-keluarga/edit-anggota.php?id_keluarga=$id_keluarga'</script>";
}
