<?php
session_start();
if (!isset($_SESSION['user'])) {

  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');


$id_galeri = htmlspecialchars($_GET['id_galeri']);
$path_galeri = htmlspecialchars($_GET['path_galeri']);


$query = "DELETE FROM galeri WHERE id_galeri = $id_galeri";

$hasil = mysqli_query($db, $query);


exec("rm ../../assets/upload/".$path_galeri);


if ($hasil == true) {
  echo "<script>window.location.href='../galeri'</script>";
} else {
  echo "<script>window.alert('Foto gagal dihapus!'); window.location.href='../galeri'</script>";
}
