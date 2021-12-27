<?php
//koneksi ke database mysql,
$koneksi = mysqli_connect("localhost","root","","perpus");
session_start();

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}

// function base_url($url = null) {
//     $base_url = "http://localhost:81/perpus";
//     if($url != null) {
//         return $base_url."/".$url;
//     } else {
//         return $base_url;
//     }
// }
?>