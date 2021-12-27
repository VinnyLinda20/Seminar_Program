<?php
//include file config.php
include('koneksi.php');

//jika benar mendapatkan GET id dari URL
if(isset($_GET['id_pengguna'])){
	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$id_pengguna = $_GET['id_pengguna'];

	//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
	$cek = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE id_pengguna='$id_pengguna'") or die(mysqli_error($koneksi));
	var_dump($cek);
	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek) > 0){
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del = mysqli_query($koneksi, "DELETE FROM pengguna WHERE id_pengguna='$id_pengguna'") or die(mysqli_error($koneksi));
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="index.php?page=pengguna_data";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="index.php?page=pengguna_data";</script>';
		}
	}else{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=pengguna_data";</script>';
	}
}else{
	echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=pengguna_data";</script>';
}

?>
