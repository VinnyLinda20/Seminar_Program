<?php
    
    // memanggil file koneksi
    require_once("koneksi.php");
    
    // mengecek apabila student code dan student name ada isinya 
    // jika iya maka akan mengeksekusi kodingan insert sql
    if( isset($_POST["judul_buku"])){
        $judul_buku_buku = $_POST["judul_buku"];
        $pengarang_buku = $_POST["pengarang"];
        $penerbit_buku = $_POST["penerbit"];
        $tahun_terbit_buku = $_POST["tahun_terbit"];
        $jumlah_buku = $_POST["jumlah"];
        $gambar_buku = $_FILES["gambar"];
        // echo  $gambar_buku;

        if($gambar_buku != "") {
            // $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
            // $ex = explode('.', $gambar_camera);
            // $ekstensi = strtolower(end($x));
            $file_tmp = $gambar_buku['tmp_name'];
            if($gambar_buku['tmp_name'] == "") {

                $nama_gambar_baru = "b.jpeg";
            }else{
                $angka_acak = rand(1, 999);
                $nama_gambar_baru = $angka_acak. '-'.$gambar_buku['name'];
                move_uploaded_file($file_tmp, 'assets/images/'.$nama_gambar_baru);
        
            }

            
        }

        //     if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                

                

        //     } else {
        //         echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='buku_tambah.php';</script>"
        //             ;
        //     }
        

        // }
        // variabel penampung sql insert
        $sql = "INSERT into `buku`(`id_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `jumlah`, `gambar`) 
        values (null, '{$judul_buku_buku}', '{$pengarang_buku}', '{$penerbit_buku}', '{$tahun_terbit_buku}', '{$jumlah_buku }', '{$nama_gambar_baru}')";
        
        if ($koneksi->query($sql)===TRUE){
            // jika query sql nya berhasil 
            //maka akan dikembalikan ke student data
            header("location: index.php?page=buku_data");
            
        }else{
            // jika gagal tampilkan error sql
            echo "Error : ".$sql."<br>".$koneksi->error;
        }
        $koneksi->close(); // tutup koneksi
    }
?>