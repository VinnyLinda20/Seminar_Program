<?php require_once('koneksi.php'); ?>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id_buku'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id_buku = $_GET['id_buku'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id_buku'") or die(mysqli_error($koneksi));

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
			$buku_id_buku = $_POST["id_buku"];
			$buku_judul_buku = $_POST["judul_buku"];
			$buku_pengarang = $_POST["pengarang"];
      $buku_penerbit = $_POST["penerbit"];
			$buku_tahun_terbit = $_POST["tahun_terbit"];
      $buku_jumlah = $_POST["jumlah"];
			$buku_gambar = $_FILES["gambar"];
      $nama_gambar = $buku_gambar['name'];

      if($buku_gambar["size"]==0){
        
        $sql = mysqli_query($koneksi, "UPDATE buku SET id_buku='$buku_id_buku', judul_buku='$buku_judul_buku', 
			pengarang='$buku_pengarang', penerbit='$buku_penerbit', tahun_terbit='$buku_tahun_terbit', jumlah='$buku_jumlah' WHERE id_buku='$id_buku'") 
			or die(mysqli_error($koneksi));
      }else{
        $file_tmp = $buku_gambar['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak. '-'.$nama_gambar;
        move_uploaded_file($file_tmp, 'assets/images/'.$nama_gambar_baru);
        $sql = mysqli_query($koneksi, "UPDATE buku SET id_buku='$buku_id_buku', judul_buku='$buku_judul_buku', 
			pengarang='$buku_pengarang', penerbit='$buku_penerbit', tahun_terbit='$buku_tahun_terbit', jumlah='$buku_jumlah', gambar='$nama_gambar_baru' WHERE id_buku='$id_buku'") 
			or die(mysqli_error($koneksi));
      }

			

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=buku_data";</script>';
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
		<center><font size="6" face="Helvetica">Edit Data Buku</font></center>
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
	<label class="col-form-label col-md-3 col-sm-3 label-align">Kode Buku</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="id_buku" class="form-control" size="4" value="<?php echo $data['id_buku']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Judul Buku</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="judul_buku" class="form-control" value="<?php echo $data['judul_buku']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pengarang</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="pengarang" class="form-control" value="<?php echo $data['pengarang']; ?>" required>
				</div>
			</div>
      <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Penerbit </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="penerbit" class="form-control" value="<?php echo $data['penerbit']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Terbit </label>
				<div class="col-md-6 col-sm-6">
					<input type="year" name="tahun_terbit" class="form-control" value="<?php echo $data['tahun_terbit']; ?>" required>
				</div>
			</div>
      <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="jumlah" class="form-control" value="<?php echo $data['jumlah']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Gambar</label>
				<div class="col-md-6 col-sm-6">
					<input type="file" name="gambar"/>
					<input type="reset" value="Batal"/>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=buku_data" class="btn btn-warning">Kembali</a>
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
