<?php
// include database connection file
include("koneksi.php");

if(isset($_GET['id_dokter'])){
	$Id = $_GET['id_dokter'];

	$cek = mysqli_query($kon, "SELECT id_dokter FROM dokter WHERE id_dokter='$Id'") or die(mysqli_error($kon));
	if(mysqli_num_rows($cek) > 0){
		$del = mysqli_query($kon, "DELETE FROM dokter WHERE id_dokter='$Id'") or die(mysqli_error($kon));
		if($del){
			echo '<script>alert("Berhasil Menghapus data."); document.location="dokter.php";</script>';
		}else{
			echo '<script>alert("Gagal Menghapus data."); document.location="dokter.php";</script>';
		}
	}else{
		echo '<script>alert("User Id tidak ditemukan."); document.location="dokter.php";</script>';
	}
}else{
	echo '<script>alert("User Id tidak ditemukan di database."); document.location="dokter.php";</script>';
}

?>
