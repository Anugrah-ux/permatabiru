<?php
include('../../config/koneksi.php');


$query = "SELECT * FROM user";

$hasil = mysqli_query($db, $query);

$data_user = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_user[] = $row;
}
