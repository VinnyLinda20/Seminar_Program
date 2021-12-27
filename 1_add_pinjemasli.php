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
                <h2>admin</h2>
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
                  </li>
                  <li><a href="index.php?page=pengguna_data"><i class="fa fa-desktop"></i> Data Pengguna</a>
                  </li><br>
                  <li> Laporan
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Laporan <span class="fa fa-chevron-down"></span></a>
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
                    <img src="assets/images/orang.png" alt="">admin
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
		<center><font size="6" face="Helvetica">Tambah Pinjam Buku</font></center>
    
		<hr>
</div>
  <div class="card-body">
  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col"></div>
      <div class="col-2">
        <div class="d-grid gap-2">
        <button class="btn btn-success" type="button">Simpan</button>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
      <form action="">
        <div class="form-group">
          <label for="exampleInputEmail1">ID Pinjam</label>
            <input type="text" class="form-control" name="id_pinjam" placeholder="Masukan ID Pinjam">
          </div>
      </form>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
      <form action="">
        <div class="form-group">
          <label>Nama Siswa</label>
            <select name="nama_siswa" id="nama_siswa" class="form-control">
              <option value="">-Pilih Nama Siswa-</option>
            </select>
          </div>
      </form>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
      <form action="">
        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Pinjam</label>
            <input type="date" class="form-control" name="tgl_pinjam" required>
          </div>
      </form>
    </div>
    </div>

    <div class="row">
    <div class="col-4">
      <form action="">
        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Kembali</label>
            <input type="date" class="form-control" name="tgl_kembali" required>
          </div>
      </form>
    </div>
    </div>
  </div>

</br>

  <div class="card">
      <div class="card-header bg-primary text-white">
        Buku yang dipinjam
      </div>

    <div class="row">
      <div class="col-6">
          <div class="form-group">
        <label for="">Judul buku</label>
        <select class="form-control" name="judul_buku" required>
          <option value=""> -- Pilih Buku --</option>
        </select>
      </div>
    </div>
    <div class="col-2">
    <div class="form-group">
                    <label for="touchSpin3">Jumlah buku</label>
                    <input id="touchSpin" type="number" class="form-control" name="jumlah_buku">
                  </div>
    </div>
    <div class="col">
    <div class="form-group" id="simple-date1">
      <label for="simpleDataInput"></label>
        <div class="input-group date">
          <button type="button" class="btn btn-primary"><i class="fa fa-plus text-white"></i></button>
        </div>
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
    <table class="table">
        <thead>
            <tr>
              <th> No. </th>
              <th> Judul Buku </th> 
              <th> Qty </th>
              <th> Aksi </th>
              </tr>
        </thead>
        <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>61</td>
              <td>
              <a href=""><i class="fa fa-trash fa-2x text-danger"></i></a>
              </td>
            </tr>
        </tbody>
  </table>
    </div>
  </div>




      </div>
    </div>


  </div>
  </div>
  </div>






</div>


    

      </div>
      </div>
    
        <!-- /page content -->

    
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright @ 2021 Sistem Informasi Perpustakaan : Vinny Lindawaty
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
