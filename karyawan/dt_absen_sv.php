<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
	$id_karyawan = $_POST['id_karyawan'];
	$nama = $_POST['nama'];
	$masuk = $_POST['masuk'];
	


}

$save = "INSERT INTO tb_absen SET id_karyawan='$id_karyawan', nama='$nama', masuk='$masuk'";
mysqli_query($koneksi, $save);

if ($save) {
	echo "<script>alert('Anda sudah absen hari ini') </script>";
	echo "<script>window.location.href = \"index.php?m=awal\" </script>";	
}else{
	echo "kryptosssss";
}


 ?>