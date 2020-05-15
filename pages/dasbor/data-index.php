<?php
include('../../config/koneksi.php');


$query_warga = "SELECT COUNT(*) AS total FROM warga";
$hasil_warga = mysqli_query($db, $query_warga);
$jumlah_warga = mysqli_fetch_assoc($hasil_warga);


$query_kartu_keluarga = "SELECT COUNT(*) AS total FROM kartu_keluarga";
$hasil_kartu_keluarga = mysqli_query($db, $query_kartu_keluarga);
$jumlah_kartu_keluarga = mysqli_fetch_assoc($hasil_kartu_keluarga);


$query_keluar_masuk = "SELECT COUNT(*) AS total FROM keluar_masuk";
$hasil_keluar_masuk = mysqli_query($db, $query_keluar_masuk);
$jumlah_keluar_masuk = mysqli_fetch_assoc($hasil_keluar_masuk);


$query_mutasi = "SELECT COUNT(*) AS total FROM mutasi";
$hasil_mutasi = mysqli_query($db, $query_mutasi);
$jumlah_mutasi = mysqli_fetch_assoc($hasil_mutasi);


$query_warga_l = "SELECT COUNT(*) AS total FROM warga WHERE jenis_kelamin_warga = 'L'";
$hasil_warga_l = mysqli_query($db, $query_warga_l);
$jumlah_warga_l = mysqli_fetch_assoc($hasil_warga_l);


$query_warga_p = "SELECT COUNT(*) AS total FROM warga WHERE jenis_kelamin_warga = 'P'";
$hasil_warga_p = mysqli_query($db, $query_warga_p);
$jumlah_warga_p = mysqli_fetch_assoc($hasil_warga_p);


$query_warga_ld_17 = "SELECT COUNT(*) AS total FROM warga WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_warga, CURDATE()) >= 17 AND tanggal_lahir_warga != '0000-00-00'";
$hasil_warga_ld_17 = mysqli_query($db, $query_warga_ld_17);
$jumlah_warga_ld_17 = mysqli_fetch_assoc($hasil_warga_ld_17);


$query_warga_kd_17 = "SELECT COUNT(*) AS total FROM warga WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_warga, CURDATE()) < 17 AND tanggal_lahir_warga != '0000-00-00'";
$hasil_warga_kd_17 = mysqli_query($db, $query_warga_kd_17);
$jumlah_warga_kd_17 = mysqli_fetch_assoc($hasil_warga_kd_17);


$query_mutasi_l = "SELECT COUNT(*) AS total FROM mutasi WHERE jenis_kelamin_mutasi = 'L'";
$hasil_mutasi_l = mysqli_query($db, $query_mutasi_l);
$jumlah_mutasi_l = mysqli_fetch_assoc($hasil_mutasi_l);


$query_mutasi_p = "SELECT COUNT(*) AS total FROM mutasi WHERE jenis_kelamin_mutasi = 'P'";
$hasil_mutasi_p = mysqli_query($db, $query_mutasi_p);
$jumlah_mutasi_p = mysqli_fetch_assoc($hasil_mutasi_p);


$query_mutasi_ld_17 = "SELECT COUNT(*) AS total FROM mutasi WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_mutasi, CURDATE()) >= 17 AND tanggal_lahir_mutasi != '0000-00-00'";
$hasil_mutasi_ld_17 = mysqli_query($db, $query_mutasi_ld_17);
$jumlah_mutasi_ld_17 = mysqli_fetch_assoc($hasil_mutasi_ld_17);


$query_mutasi_kd_17 = "SELECT COUNT(*) AS total FROM mutasi WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_mutasi, CURDATE()) < 17 AND tanggal_lahir_mutasi != '0000-00-00'";
$hasil_mutasi_kd_17 = mysqli_query($db, $query_mutasi_kd_17);
$jumlah_mutasi_kd_17 = mysqli_fetch_assoc($hasil_mutasi_kd_17);
