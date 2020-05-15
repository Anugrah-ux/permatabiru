<?php
session_start();
if (!isset($_SESSION['user'])) {
  
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');


$id_warga = htmlspecialchars($_POST['id_warga']);
$id_keluarga = htmlspecialchars($_POST['id_keluarga']);


$query_cek = "SELECT COUNT(*) AS total FROM warga_has_kartu_keluarga WHERE id_warga = $id_warga AND id_keluarga = $id_keluarga";
$hasil_cek = mysqli_query($db, $query_cek);
$jumlah_cek = mysqli_fetch_assoc($hasil_cek);

echo $jumlah_cek['total'];

if ($jumlah_cek['total'] != 0) {
  echo "<script>window.alert('Warga sudah menjadi anggota!'); window.location.href='../kartu-keluarga/edit-anggota.php?id_keluarga=$id_keluarga'</script>";
  exit;
}


$query = "INSERT INTO warga_has_kartu_keluarga (id_warga, id_keluarga) VALUES ('$id_warga', '$id_keluarga');";

$hasil = mysqli_query($db, $query);


if ($hasil == true) {
  echo "<script>window.location.href='../kartu-keluarga/edit-anggota.php?id_keluarga=$id_keluarga'</script>";
} else {
  echo "<script>window.alert('Gagal menambahkan anggota!'); window.location.href='../kartu-keluarga/edit-anggota.php?id_keluarga=$id_keluarga'</script>";
}
