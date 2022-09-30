<?php
// include database connection file
include("koneksi.php");

if(isset($_GET['id_berita'])){
	$Id = $_GET['id_berita'];

	$cek = mysqli_query($kon, "SELECT id_berita FROM berita WHERE id_berita='$Id'") or die(mysqli_error($kon));
	if(mysqli_num_rows($cek) > 0){
		$del = mysqli_query($kon, "DELETE FROM berita WHERE id_berita='$Id'") or die(mysqli_error($kon));
		if($del){
			echo '<script>alert("Berhasil Menghapus data."); document.location="berita.php";</script>';
		}else{
			echo '<script>alert("Gagal Menghapus data."); document.location="berita.php";</script>';
		}
	}else{
		echo '<script>alert("User Id tidak ditemukan."); document.location="berita.php";</script>';
	}
}else{
	echo '<script>alert("User Id tidak ditemukan di database."); document.location="berita.php";</script>';
}

?>
