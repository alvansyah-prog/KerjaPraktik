<?php
// include database connection file
include("koneksi.php");

if(isset($_GET['id_praktik'])){
	$Id = $_GET['id_praktik'];

	$cek = mysqli_query($kon, "SELECT id_praktik FROM praktik WHERE id_praktik='$Id'") or die(mysqli_error($kon));
	if(mysqli_num_rows($cek) > 0){
		$del = mysqli_query($kon, "DELETE FROM praktik WHERE id_praktik='$Id'") or die(mysqli_error($kon));
		if($del){
			echo '<script>alert("Berhasil Menghapus data."); document.location="praktik.php";</script>';
		}else{
			echo '<script>alert("Gagal Menghapus data."); document.location="praktik.php";</script>';
		}
	}else{
		echo '<script>alert("User Id tidak ditemukan."); document.location="praktik.php";</script>';
	}
}else{
	echo '<script>alert("User Id tidak ditemukan di database."); document.location="praktik.php";</script>';
}

?>
