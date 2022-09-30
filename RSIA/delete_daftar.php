<?php
// include database connection file
include("koneksi.php");

if(isset($_GET['id_daftar'])){
	$Id = $_GET['id_daftar'];

	$cek = mysqli_query($kon, "SELECT id_daftar FROM daftar WHERE id_daftar='$Id'") or die(mysqli_error($kon));
	if(mysqli_num_rows($cek) > 0){
		$del = mysqli_query($kon, "DELETE FROM daftar WHERE id_daftar='$Id'") or die(mysqli_error($kon));
		if($del){
			echo '<script>alert("Berhasil Menghapus data."); document.location="daftar.php";</script>';
		}else{
			echo '<script>alert("Gagal Menghapus data."); document.location="daftar.php";</script>';
		}
	}else{
		echo '<script>alert("User Id tidak ditemukan."); document.location="daftar.php";</script>';
	}
}else{
	echo '<script>alert("User Id tidak ditemukan di database."); document.location="daftar.php";</script>';
}

?>
