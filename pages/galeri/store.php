<?php
session_start();
if (!isset($_SESSION['user'])) {
  
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');


$filename = $_FILES["file"]["name"];
$file_basename = substr($filename, 0, strripos($filename, '.'));
$file_ext = substr($filename, strripos($filename, '.'));
$filesize = $_FILES["file"]["size"];
$allowed_file_types = array('.jpg','.png','.jpeg','.gif','.JPG','.JPEG  ');

if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
{
	
	$newfilename = md5($file_basename) . $file_ext;
	if (file_exists("../../assets/upload/" . $newfilename))
	{
		
		echo "<script>window.alert('File sudah ada!'); window.location.href='../galeri/create.php'</script>";
	}
	else
	{
		move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/upload/" . $newfilename);

    
    $path_galeri = $newfilename;
    $caption_galeri = htmlspecialchars($_POST['caption_galeri']);
    $tautan_galeri = htmlspecialchars($_POST['tautan_galeri']);

    $id_user = $_SESSION['user']['id_user'];

    
    $query = "INSERT INTO `galeri` (`id_galeri`, `path_galeri`, `caption_galeri`, `tautan_galeri`, `id_user`, `created_at`, `updated_at`) VALUES (NULL, '$path_galeri', '$caption_galeri', '$tautan_galeri', '$id_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

    $hasil = mysqli_query($db, $query);

    
    if ($hasil == true) {
      echo "<script>window.alert('Tambah galeri berhasil'); window.location.href='../galeri'</script>";
    } else {
      echo "<script>window.alert('Tambah galeri gagal!'); window.location.href='../galeri'</script>";
    }

	}
}
elseif (empty($file_basename))
{
	
	echo "<script>window.alert('Pilih file untuk diunggah'); window.location.href='../galeri/create.php'</script>";
}
elseif ($filesize > 2000000)
{
	
	echo "<script>window.alert('File yang diunggah terlalu besar!'); window.location.href='../galeri/create.php'</script>";
}
else
{
	
	echo "<script>window.alert('Format file salah'); window.location.href='../galeri/create.php'</script>";
	unlink($_FILES["file"]["tmp_name"]);
}
