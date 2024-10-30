<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
	$id_karyawan = $_POST['id_karyawan'];
	$nama = $_POST['nama'];
	$pulang = $_POST['pulang'];


}

$save = "INSERT INTO tb_absen SET id_karyawan='$id_karyawan', nama='$nama', pulang='$pulang'";
mysqli_query($koneksi, $save);

if ($save) {
	echo "<script>alert('Anda sudah absen pulang hari ini') </script>";
	echo "<script>window.location.href = \"index.php?m=awal\" </script>";	
}else{
	echo "kryptosssss";
}

 ?>