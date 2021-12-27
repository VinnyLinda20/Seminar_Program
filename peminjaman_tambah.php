<?php
  require_once("koneksi.php");
  $nama_nama = [];
  $id_id_anggota = [];
  $queryNamaNama = "SELECT * from anggota";
  $resultNamaNama = mysqli_query($koneksi,$queryNamaNama);
  while($rowNama = $resultNamaNama->fetch_assoc()){
    array_push($nama_nama, $rowNama['nama_siswa']);
    array_push($id_id_anggota, $rowNama['id_anggota']);
  }

  $judul_judul = [];
  $judul_judul_id = [];
  $queryJudulJudul = "SELECT * from buku limit 70";
  $resultJudulJudul = mysqli_query($koneksi,$queryJudulJudul);
  while($rowJudul = $resultJudulJudul->fetch_assoc()){
    array_push($judul_judul, $rowJudul['judul_buku']);
    array_push($judul_judul_id, $rowJudul['id_buku']);
  }
  

  $judul_judul2 = [];
  $judul_judul2_id = [];
  $queryJudulJudul2 = "SELECT * from buku limit 70";
  $resultJudulJudul2 = mysqli_query($koneksi,$queryJudulJudul2);
  while($rowJudul = $resultJudulJudul2->fetch_assoc()){
    array_push($judul_judul2, $rowJudul['judul_buku']);
    array_push($judul_judul2_id, $rowJudul['id_buku']);
  }

  if(isset($_POST['submit'])){
    $id_anggota = $_POST['id_siswa'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $id_buku = $_POST['id_buku1'];
    $jumlah = $_POST['jumlah_buku'];
    $id_buku2 = $_POST['id_buku2'];
    $jumlah2 = 1;
    


    
    if($jumlah > 2){
      echo "<script>alert('Maximal Peminjaman 2 Buku')</script>";
    }
    else{
      $checkStok = "SELECT jumlah from buku where id_buku='$id_buku'";
      $hasil = mysqli_fetch_assoc(mysqli_query($koneksi,$checkStok));
      $stock =$hasil['jumlah'];
  

      if($stock < $jumlah){
        echo "<script>alert('Stock Buku Kurang')
        </script>";
        exit;
      }
      if($id_buku2 != ''){
        $checkStok2 = "SELECT jumlah from buku where id_buku='$id_buku2'";
        $hasil2 = mysqli_fetch_assoc(mysqli_query($koneksi,$checkStok2));
        $stock2 =$hasil2['jumlah'];
        if($stock2 < $jumlah2){
          echo "<script>alert('Stock Buku Kurang')</script>";
          exit;
        }
      }
    $queryNama = "SELECT nama_siswa from anggota where id_anggota='$id_anggota'";
    $result = mysqli_query($koneksi,$queryNama);
    $nama = mysqli_fetch_assoc($result)['nama_siswa'];
    
    $queryJudul = "SELECT * from buku where id_buku='$id_buku'";
    $result2 = mysqli_query($koneksi,$queryJudul);
    $buku = mysqli_fetch_assoc($result2)['judul_buku'];
  
   

    $sql = "INSERT into `peminjaman` values(null,'{$id_anggota}', '{$nama}', '{$tgl_pinjam}','{$tgl_kembali}', 'pinjam')";
  
    $pinjam = mysqli_query($koneksi,$sql);
    if($pinjam){
      $id_pinjam = mysqli_insert_id($koneksi);
      $sql2 = "INSERT into `detail_pinjam` values(null,'{$id_buku}', '{$buku}', '{$jumlah}','{$id_pinjam}')";
      $pinjam2 = mysqli_query($koneksi,$sql2);
      if($pinjam2){
     
        $updateStok1 = "UPDATE buku set jumlah = $stock - $jumlah where id_buku='$id_buku'";
        $hasil2 = mysqli_query($koneksi,$updateStok1);
       
      }
      if($id_buku2 != ''){
        $queryJudul2 = "SELECT judul_buku from buku where id_buku='$id_buku2'";
        $result3 = mysqli_query($koneksi,$queryJudul2);
        $buku2 = mysqli_fetch_assoc($result3)['judul_buku'];

        $sql2 = "INSERT into `detail_pinjam` values(null,'{$id_buku2}', '{$buku2}', '{$jumlah2}','{$id_pinjam}')";
        $pinjam3 = mysqli_query($koneksi,$sql2);
        if($pinjam3){
          
          $updateStok2 = "UPDATE buku set jumlah = $stock - $jumlah where id_buku='$id_buku2'";
          $hasil3 = mysqli_query($koneksi,$updateStok2);
         
        }
      }
      header('Location:index.php?page=peminjaman_data');
    }else{
      die('error');
    }
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

    <title> Sistem Informasi Perpustakaan </title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
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
		<center><font size="6" face="Helvetica">Tambah Pinjam Buku</font></center>
    
		<hr>
</div>
<form action='' method="post" autocomplete="off">
  <div class="card-body">
  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col"></div>
      <div class="col-2">
        <div class="d-grid gap-2">
        <button class="btn btn-success" type="submit" name="submit">Simpan</button>
        </div>
      </div>
    </div>

    <!-- <div class="row">
      <div class="col-4">
      <form action="">
        <div class="form-group">
          <label for="exampleInputEmail1">ID Pinjam</label>
            <input type="text" class="form-control" name="id_pinjam" placeholder="Masukan ID Pinjam">
          </div>
      
      </div>
    </div> -->
    
    <style>
/*the container must be positioned relative:*/
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}
/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}
/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>


    <div class="row">
    <div class="col-4">
 
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Siswa</label>
          <div class="autocomplete">
            <input type="hidden" name="id_siswa" id="getIdSiswa">
            <input type="text" autocomplete="off" class="form-control" name="nama_siswa" id="nama_siswa"  placeholder="Masukkan Nama Siswa" required>
             </div>
        
            <script>
function autocomplete(inp, arr, arr2) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.innerHTML += "<input type='hidden' value='" + arr2[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              var id = document.querySelector('#getIdSiswa');
              id.value = this.getElementsByTagName("input")[1].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
// variabel sementara untuk looping
let nama_nama = [];

<?Php
  foreach($nama_nama as $nama_nama_anak){
    echo "nama_nama.push('{$nama_nama_anak}');";
  }
?>

// variabel sementara untuk looping
let id_id_anggota = [];

<?Php
  foreach($id_id_anggota as $id_id_anggota2){
    echo "id_id_anggota.push('{$id_id_anggota2}');";
  }
?>
/*An array containing all the country names in the world:*/
var nama_siswa = nama_nama;
var id_anggotas = id_id_anggota;

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("nama_siswa"), nama_siswa, id_anggotas);
</script>

          </div>
        
      </div>
    </div>

    <div class="row">
      <div class="col-4">
    
      <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Pinjam</label>
            <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>" name="tgl_pinjam" id="tanggal_pinjam" required readonly>
          </div>
    </div>
    </div>

    <div class="row">
    <div class="col-4">

        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Kembali</label>
            <input type="date" class="form-control" name="tgl_kembali" id="tanggal_kembali" required readonly>
          </div>
     
    </div>
    </div>
  </div>

<div class="row">
    <div class="col-6">
   
        <div class="form-group">
          <label for="exampleInputEmail1">Judul Buku </label>
          <div class="autocomplete">
            <input type="hidden" name="id_buku1" id="id_buku1">
            <input type="text"  autocomplete="off" class="form-control" name="judul_buku" id="judul_buku"  placeholder="Masukkan Judul Buku" required>
             </div>
         
            <script>
function autocomplete(inp, arr, arr2) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.innerHTML += "<input type='hidden' value='" + arr2[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              var id_buku1 = document.getElementById('id_buku1');
              id_buku1.value = this.getElementsByTagName("input")[1].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
// variabel sementara untuk looping
let judul_judul = [];
let judul_judul_id = []
<?Php
  foreach($judul_judul as $judul_judul_book){
    echo "judul_judul.push('{$judul_judul_book}');";
  }

  
  foreach($judul_judul_id as $judul_judul_book_id){
    echo "judul_judul_id.push('{$judul_judul_book_id}');";
  }
?>
/*An array containing all the country names in the world:*/
var judul_buku = judul_judul;
var judul_buku_id= judul_judul_id;
/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("judul_buku"), judul_buku, judul_judul_id);
</script>

</div>
</div>





    <div class="col-2">
      <div class="form-group">
          <label for="touchSpin3">Jumlah buku</label>
          <input  type="number" class="form-control" id="jumlah" name="jumlah_buku" min="1" max="2" required>
        </div>
    </div>


    </div>
    <div class="row">
    <div class="col-6">
  
        <div class="form-group">
          <label for="exampleInputEmail1">Judul Buku 2 (Optional)</label>
          <div class="autocomplete2">
          <input type="hidden" name="id_buku2" id="id_buku2">
            <input type="text" autocomplete="off" readonly class="form-control" name="judul_buku2" id="judul_buku2"  placeholder="Masukkan Judul Buku">
             </div>
            
            <script>
function autocomplete(inp, arr,arr2) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete2-list");
      a.setAttribute("class", "autocomplete2-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.innerHTML += "<input type='hidden' value='" + arr2[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              var id_buku2 = document.getElementById('id_buku2');
              id_buku2.value = this.getElementsByTagName("input")[1].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete2-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete2-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete2-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete2-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
// variabel sementara untuk looping
let judul_judul2 = [];
let judul_judul2_id = [];

<?Php
  foreach($judul_judul2 as $judul_judul_book){
    echo "judul_judul2.push('{$judul_judul_book}');";
  }
  foreach($judul_judul2_id as $judul_judul_book_id){
    echo "judul_judul2_id.push('{$judul_judul_book_id}');";
  }
?>
/*An array containing all the country names in the world:*/
var judul_buku2 = judul_judul2;
var judul_buku2_id = judul_judul2_id;

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("judul_buku2"), judul_buku2,judul_buku2_id);
</script>

</div>
</div>

</form>

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
    <script>  
    const tanggal = document.querySelector('#tanggal_pinjam');

    window.addEventListener('load',function(){
      console.log('tanggal_pinjam.php?tgl='+tanggal.value)
      fetch('tanggal_pinjam.php?tgl='+tanggal.value)
      .then(response => response.json())
      .then(data => document.querySelector('#tanggal_kembali').value = data.toString())
    });

    const jumlah = document.querySelector('#jumlah');
    const jumlah2 = document.querySelector('#jumlah2');
    const judul = document.querySelector('#judul_buku2');
    jumlah.addEventListener('change',function(){
        judul.value = "";
      
        judul.readOnly = true;
        if(jumlah.value == 1){
        
          judul.readOnly = false;
        }
        

    });
    

    </script>
  </body>
</html>
