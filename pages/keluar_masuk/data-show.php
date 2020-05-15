<?php
include('../../config/koneksi.php');


$get_id_warga = $_GET['id_keluar_masuk'];


$query = "SELECT * FROM keluar_masuk LEFT JOIN warga ON keluar_masuk.id_keluar_masuk = warga.id_warga";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}
