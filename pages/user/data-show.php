<?php
include('../../config/koneksi.php');


$get_id_user = $_GET['id_user'];


$query = "SELECT * FROM user WHERE id_user = $get_id_user";

$hasil = mysqli_query($db, $query);

$data_user = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_user[] = $row;
}
