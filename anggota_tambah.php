<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/o.jpg" type="image/ico" />

    <title> Sistem Informasi Perpustakaan </title>

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
            &nbsp; <a href="index.php" class="-2x" style="color:#fff;" ><span><font size="4.95" color="white" face="Helvetica Neue">SISTEM INFORMASI PERPUSTAKAAN</font></span></a>
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
                <h2>petugas perpus</h2>
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
                    <img src="assets/images/orang.png" alt="">petugas perpus
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#"> Profile</a>
                      <a class="dropdown-item"  href="#">
                        <span class="badge bg-red pull-right"></span>
                        <span>Settings</span>
                      </a>
                    <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
		<center><font size="6" face="Helvetica">Tambah Data Anggota</font></center>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
			</thead>
			<tbody>
			<tbody>
		</table>
	</div>

    <form enctype="multipart/form-data" method="POST" action="anggota_tambah_2.php">
			<!-- <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Anggota</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="id_anggota" class="form-control" size="4" required>
				</div>
			</div> -->
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Siswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama_siswa" class="form-control" required>
				</div>
			</div>

      <!-- radio buuton -->
      <!-- form radio buuton -->
      <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">JK</label>
				<div class="col-md-6 col-sm-6">
          <input type="radio" name="radio" value="P">
          <span class="checkmark"></span>
          <label class="">P
        </label>
        &nbsp;&nbsp;&nbsp;<input type="radio" name="radio" value="L">
          <span class="checkmark"></span>
          <label>L
        </label>
				</div>
			</div>
      <div class="item form-group">
        <form action="">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Kelas</label>
            <div class="col-md-6 col-sm-6">
            <select name="kelas" id="kelas" class="form-control">
            <option value=>-Pilih Kelas-</option>
            <option value="7A">7A</option>
            <option value="7B">7B</option>
            <option value="7C">7C</option>
            <option value="7D">7D</option>
            <option value="7E">7E</option>
            <option value="7F">7F</option>
            <option value="7G">7G</option>
            <option value="7H">7H</option>
            <option value="7I">7I</option>
            <option value="7J">7J</option>
            <option value="7K">7K</option>
            <option value="8A">8A</option>
            <option value="8B">8B</option>
            <option value="8C">8C</option>
            <option value="8D">8D</option>
            <option value="8E">8E</option>
            <option value="8F">8F</option>
            <option value="8G">8G</option>
            <option value="8H">8H</option>
            <option value="8I">8I</option>
            <option value="8J">8J</option>
            <option value="8K">8K</option>
            <option value="9A">9A</option>
            <option value="9B">9B</option>
            <option value="9C">9C</option>
            <option value="9D">9D</option>
            <option value="9E">9E</option>
            <option value="9F">9F</option>
            <option value="9G">9G</option>
            <option value="9H">9H</option>
            <option value="9I">9I</option>
            <option value="9J">9J</option>
            <option value="9K">9K</option>
            </select>
          </div>
      </div>
    </div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Induk</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nomor_induk" class="form-control" required>
				</div>
			</div>
      <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NISN</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nisn" class="form-control" required>
				</div>
			</div>
      <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="alamat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Foto</label>
				<div class="col-md-6 col-sm-6">
          <input type="file"  name="foto">
					<!-- <input type="reset" value="Batal"/> -->
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
  <!-- footer content -->
  <footer>
          <div class="pull-right">
            Copyright @ 2021 Sistem Informasi Perpustakaan : Vinny Lindawaty
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->`
        </div>
        <!-- /page content -->
        </div>
        <!-- /page content -->
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
