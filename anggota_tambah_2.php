<?php
    
    // memanggil file koneksi
    require_once("koneksi.php");
    
    // mengecek apabila student code dan student name ada isinya 
    // jika iya maka akan mengeksekusi kodingan insert sql
    if(isset($_POST["nama_siswa"])){
        $nama_siswa_anggota = $_POST["nama_siswa"];
        $jk_anggota = $_POST["radio"];
        $kelas_anggota = $_POST["kelas"];
        $nomor_induk_anggota = $_POST["nomor_induk"];
        $nisn_anggota = $_POST["nisn"];
        $alamat_anggota = $_POST["alamat"];
        $foto_anggota = $_FILES["foto"];
        // echo  $foto_anggota;

        if($foto_anggota != "") {
            // $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
            // $ex = explode('.', $gambar_camera);
            // $ekstensi = strtolower(end($x));
            $file_tmp = $foto_anggota['tmp_name'];
            if($foto_anggota['tmp_name'] == "") {
         
                $nama_gambar_baru = "orang.png";
            }else{
                $angka_acak = rand(1, 999);
                $nama_gambar_baru = $angka_acak. '-'.$foto_anggota['name'];
                move_uploaded_file($file_tmp, 'assets/images/'.$nama_gambar_baru);
            }
         
        
        }
       
        //     if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                

                

        //     } else {
        //         echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='anggota_tambah.php';</script>"
        //             ;
        //     }
        

        // }
        // variabel penampung sql insert
        $sql = "INSERT into `anggota`(`id_anggota`, `nama_siswa`, `jk`, `kelas`, `nomor_induk`, `nisn`, `alamat`, `foto`) 
        values ('{$nomor_induk_anggota}', '{$nama_siswa_anggota}', '{$jk_anggota}', '{$kelas_anggota}', '{$nomor_induk_anggota }', '{$nisn_anggota }', '{$alamat_anggota }', '{$nama_gambar_baru}')";
        
        if ($koneksi->query($sql)===TRUE){
            // jika query sql nya berhasil 
            //maka akan dikembalikan ke student data
            header("location: index.php?page=anggota_data");
            
        }else{
            // jika gagal tampilkan error sql
            echo "Error : ".$sql."<br>".$koneksi->error;
        }
        $koneksi->close(); // tutup koneksi
    }
?>