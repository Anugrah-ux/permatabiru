<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Keluar Masuk</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<?php include('../dasbor/data-index.php') ?>


<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>NIK</th>
      <th>Nama Warga</th>
      <th>L/P</th>
      <!-- <th>Lahir</th> -->
      <th>Usia</th>
      <th>Pendidikan</th>
      <th>Pekerjaan</th>
      <th>Kawin</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_warga as $warga) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $keluar_masuk['nik_warga'] ?></td>
      <td><?php echo $keluar_masuk['nama_warga'] ?></td>
      <td><?php echo $keluar_masuk['jenis_kelamin_warga'] ?></td>
      <!-- <td>
        <?php echo ($keluar_masuk['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($keluar_masuk['tanggal_lahir_warga'])) : ''?>
      </td> -->
      <td><?php echo $keluar_masuk['usia_warga'] ?></td>
      <td><?php echo $keluar_masuk['pendidikan_terakhir_warga'] ?></td>
      <td><?php echo $keluar_masuk['pekerjaan_warga'] ?></td>
      <td><?php echo $keluar_masuk['status_perkawinan_warga'] ?></td>
      <td><?php echo $keluar_masuk['status_warga'] ?></td>
      <td>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br><br>


<?php include('../_partials/bottom.php') ?>
