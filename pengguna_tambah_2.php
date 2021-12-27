<?php
    
    // memanggil file koneksi
    require_once("koneksi.php");
    
    // mengecek apabila student code dan student name ada isinya 
    // jika iya maka akan mengeksekusi kodingan insert sql
    if(isset($_POST["id_pengguna"]) && isset($_POST["nama"])){
        $id_pengguna_pengguna = $_POST["id_pengguna"];
        $nama_pengguna = $_POST["nama"];
        $username_pengguna = $_POST["username"];
        $password_pengguna = $_POST["password"];
        $level_pengguna = $_POST["level"];
        $foto_pengguna = $_FILES["foto"];
        // echo  $foto_pengguna;

        if($foto_pengguna != "") {
            // $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
            // $ex = explode('.', $gambar_camera);
            // $ekstensi = strtolower(end($x));
            $file_tmp = $foto_pengguna['tmp_name'];
            $angka_acak = rand(1, 999);
            $nama_gambar_baru = $angka_acak. '-'.$foto_pengguna['name'];
            move_uploaded_file($file_tmp, 'assets/images/'.$nama_gambar_baru);
        }

        //     if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                

                

        //     } else {
        //         echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='anggota_tambah.php';</script>"
        //             ;
        //     }
        

        // }
        // variabel penampung sql insert
        $sql = "INSERT into `pengguna`(`id_pengguna`, `nama`, `username`, `password`, `level`, `foto`) 
        values ('{$id_pengguna_pengguna}', '{$nama_pengguna}', '{$username_pengguna}', '{$password_pengguna }', '{$level_pengguna}', '{$nama_gambar_baru}')";
        
        if ($koneksi->query($sql)===TRUE){
            // jika query sql nya berhasil 
            //maka akan dikembalikan ke student data
            header("location: index.php?page=pengguna_data");
            
        }else{
            // jika gagal tampilkan error sql
            echo "Error : ".$sql."<br>".$koneksi->error;
        }
        $koneksi->close(); // tutup koneksi
    }
?>