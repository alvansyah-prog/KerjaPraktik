<?php
// include database connection file
include("koneksi.php");

if(isset($_GET['id_tanya'])){
	$Id = $_GET['id_tanya'];

	$cek = mysqli_query($kon, "SELECT id_tanya FROM tanyajawab WHERE id_tanya='$Id'") or die(mysqli_error($conn));
	if(mysqli_num_rows($cek) > 0){
		$del = mysqli_query($kon, "DELETE FROM tanyajawab WHERE id_tanya='$Id'") or die(mysqli_error($conn));
		if($del){
			echo '<script>alert("Berhasil Menghapus data."); document.location="tanyajawab.php";</script>';
		}else{
			echo '<script>alert("Gagal Menghapus data."); document.location="tanyajawab.php";</script>';
		}
	}else{
		echo '<script>alert("User Id tidak ditemukan."); document.location="tanyajawab.php";</script>';
	}
}else{
	echo '<script>alert("User Id tidak ditemukan di database."); document.location="tanyajawab.php";</script>';
}

?>
