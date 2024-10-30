<?php 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	$jabatan = $_POST['jabatan'];

}

$save = "INSERT INTO tb_golongan SET golongan='$golongan'";
mysqli_query($koneksi, $save);

if ($save) {
	header("location: golongan.php");
}else{
	echo "gagal disimpan";
}

 ?>