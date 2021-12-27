<?php require_once('koneksi.php'); ?>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id_anggota'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id_anggota = $_GET['id_anggota'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota='$id_anggota'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			print_r($_POST);
			$anggota_nama_siswa = $_POST["nama_siswa"];
      $anggota_jk = $_POST["radio"];
			$anggota_kelas = $_POST["kelas"];
			$anggota_nomor_induk = $_POST["nomor_induk"];
      $anggota_nisn= $_POST["nisn"];
      $anggota_alamat= $_POST["alamat"];
			$anggota_foto = $_FILES["foto"];
      $nama_foto = $anggota_foto['name'];

      if($anggota_foto["size"]==0){
        
        $sql = mysqli_query($koneksi, "UPDATE anggota SET id_anggota='$anggota_nomor_induk', nama_siswa='$anggota_nama_siswa', jk='$anggota_jk',
        kelas='$anggota_kelas', nomor_induk='$anggota_nomor_induk', nisn='$anggota_nisn', alamat='$anggota_alamat' WHERE id_anggota='$id_anggota'") 
        or die(mysqli_error($koneksi));
      }else{
        $file_tmp = $anggota_foto['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak. '-'.$nama_foto;
        move_uploaded_file($file_tmp, 'assets/images/'.$nama_gambar_baru);
        $sql = mysqli_query($koneksi, "UPDATE anggota SET id_anggota='$anggota_nomor_induk', nama_siswa='$anggota_nama_siswa', jk='$anggota_jk',
        kelas='$anggota_kelas', nomor_induk='$anggota_nomor_induk', nisn='$anggota_nisn', alamat='$anggota_alamat', foto='$nama_gambar_baru' WHERE id_anggota='$id_anggota'") 
			  or die(mysqli_error($koneksi));
      }

			

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=anggota_data";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/o.jpg" type="image/ico" />

    <title> Sistem Aplikasi Perpustakaan </title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <center>
            &nbsp; <a href="index.php" class="-2x" style="color:#fff;"><span><font size="4.95" color="white" face="Helvetica Neue">SISTEM INFORMASI PERPUSTAKAAN</font></span></a>
            </center>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/orang.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['username']?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                  </li><br>
                  <li> Kelola Data
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=buku_data">Buku</a></li>
                      <li><a href="index.php?page=anggota_data">Anggota</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=peminjaman_data">Peminjaman Buku</a></li>
                      <li><a href="index.php?page=pengembalian_data">Pengembalian Buku</a></li>
                    </ul>
                  </li><br>
                  <li> Laporan
                  </li>
                  <li><a href="#"><i class="fa fa-file"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=camera_data">Laporan Buku</a></li>
                      <li><a href="index.php?page=pelanggan_data">Laporan Anggota</a></li>
                      <li><a href="index.php?page=camera_data">Laporan Peminjaman Buku</a></li>
                      <li><a href="index.php?page=camera_data">Laporan Pengembalian Buku</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" >
                  <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/orang.png" alt="">
                    <?php echo $_SESSION['username']?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#"> Profile</a>
                      <a class="dropdown-item"  href="#">
                        <span class="badge bg-red pull-right"></span>
                        <span>Settings</span>
                      </a>
                    <a class="dropdown-item"  href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content - HALAMAN UTAMA ISI DISINI -->
        <div class="right_col" role="main">
      

	<div class="container" style="margin-top:20px">
		<center><font size="6" face="Helvetica">Edit Data Anggota</font></center>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
			</thead>
			<tbody>
			<tbody>
		</table>
	</div>

    <?php ?>
    <form method="post" action="" enctype="multipart/form-data">
	<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Anggota</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="id_anggota" class="form-control" size="4" value="<?php echo $data['id_anggota']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Siswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama_siswa" class="form-control" value="<?php echo $data['nama_siswa']; ?>" required>
				</div>
			</div>
      <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">JK</label>
				<div class="col-md-6 col-sm-6">
        <input type="radio" name="radio" value="P" required <?php echo $data['jk']=='P' ? 'checked' : '' ?>>
          <span class="checkmark"></span>
          <label class="">P
        </label>
        &nbsp;&nbsp;&nbsp;<input type="radio" name="radio" value="L" required <?php echo $data['jk']=='L' ? 'checked' : '' ?>>
          <span class="checkmark"></span>
          <label>L
        </label>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kelas</label>
				<div class="col-md-6 col-sm-6">
					<select name="kelas" class="form-control">
          <option readonly required></option>
            <option value="7A"<?php echo $data['kelas']=='7A' ? 'selected' : '' ?>>7A</option>
            <option value="7B"<?php echo $data['kelas']=='7B' ? 'selected' : '' ?>>7B</option>
            <option value="7C"<?php echo $data['kelas']=='7C' ? 'selected' : '' ?>>7C</option>
            <option value="7D"<?php echo $data['kelas']=='7D' ? 'selected' : '' ?>>7D</option>
            <option value="7E"<?php echo $data['kelas']=='7E' ? 'selected' : '' ?>>7E</option>
            <option value="7F"<?php echo $data['kelas']=='7F' ? 'selected' : '' ?>>7F</option>
            <option value="7G"<?php echo $data['kelas']=='7G' ? 'selected' : '' ?>>7G</option>
            <option value="7H"<?php echo $data['kelas']=='7H' ? 'selected' : '' ?>>7H</option>
            <option value="7I"<?php echo $data['kelas']=='7I' ? 'selected' : '' ?>>7I</option>
            <option value="7J"<?php echo $data['kelas']=='7J' ? 'selected' : '' ?>>7J</option>
            <option value="7K"<?php echo $data['kelas']=='7K' ? 'selected' : '' ?>>7K</option>
            <option value="8A"<?php echo $data['kelas']=='8A' ? 'selected' : '' ?>>8A</option>
            <option value="8B"<?php echo $data['kelas']=='8B' ? 'selected' : '' ?>>8B</option>
            <option value="8C"<?php echo $data['kelas']=='8C' ? 'selected' : '' ?>>8C</option>
            <option value="8D"<?php echo $data['kelas']=='8D' ? 'selected' : '' ?>>8D</option>
            <option value="8E"<?php echo $data['kelas']=='8E' ? 'selected' : '' ?>>8E</option>
            <option value="8F"<?php echo $data['kelas']=='8F' ? 'selected' : '' ?>>8F</option>
            <option value="8G"<?php echo $data['kelas']=='8G' ? 'selected' : '' ?>>8G</option>
            <option value="8H"<?php echo $data['kelas']=='8H' ? 'selected' : '' ?>>8H</option>
            <option value="8I"<?php echo $data['kelas']=='8I' ? 'selected' : '' ?>>8I</option>
            <option value="8J"<?php echo $data['kelas']=='8J' ? 'selected' : '' ?>>8J</option>
            <option value="8K"<?php echo $data['kelas']=='8K' ? 'selected' : '' ?>>8K</option>
            <option value="9A"<?php echo $data['kelas']=='9A' ? 'selected' : '' ?>>9A</option>
            <option value="9B"<?php echo $data['kelas']=='9B' ? 'selected' : '' ?>>9B</option>
            <option value="9C"<?php echo $data['kelas']=='9C' ? 'selected' : '' ?>>9C</option>
            <option value="9D"<?php echo $data['kelas']=='9D' ? 'selected' : '' ?>>9D</option>
            <option value="9E"<?php echo $data['kelas']=='9E' ? 'selected' : '' ?>>9E</option>
            <option value="9F"<?php echo $data['kelas']=='9F' ? 'selected' : '' ?>>9F</option>
            <option value="9G"<?php echo $data['kelas']=='9G' ? 'selected' : '' ?>>9G</option>
            <option value="9H"<?php echo $data['kelas']=='9H' ? 'selected' : '' ?>>9H</option>
            <option value="9I"<?php echo $data['kelas']=='9I' ? 'selected' : '' ?>>9I</option>
            <option value="9J"<?php echo $data['kelas']=='9J' ? 'selected' : '' ?>>9J</option>
            <option value="9K"<?php echo $data['kelas']=='9K' ? 'selected' : '' ?>>9K</option>
            </select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Induk </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomor_induk" class="form-control" value="<?php echo $data['nomor_induk']; ?>" required>
				</div>
			</div>
      <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NISN </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nisn" class="form-control" value="<?php echo $data['nisn']; ?>" required>
				</div>
			</div>
      <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Foto</label>
				<div class="col-md-6 col-sm-6">
					<input type="file" name="foto"/>
					<input type="reset" value="Batal"/>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=anggota_data" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>


        <!-- /page content -->


	</div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright @ 2021 Sistem informasi Perpustakaan : Vinny Lindawaty
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

  </body>
</html>
