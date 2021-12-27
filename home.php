<?php
    require_once("koneksi.php");
    $buku = mysqli_query($koneksi,"SELECT detail_pinjam.judul_buku, sum(detail_pinjam.jumlah), buku.gambar from buku,detail_pinjam where buku.id_buku = detail_pinjam.id_buku  group by detail_pinjam.id_buku  order by sum(detail_pinjam.jumlah) desc limit 3;");
    $anggota = mysqli_query($koneksi,"SELECT peminjaman.nama_siswa,count(peminjaman.id_anggota) as jumlah,anggota.foto from peminjaman,anggota where peminjaman.id_anggota=anggota.id_anggota group by peminjaman.id_anggota order by jumlah desc limit 3;");
?>

<center><br><br><br>
<font Size="10" face="Helvetica Neue" style="color:black" >Sistem Informasi Perpustakaan</font><br>
<font Size="7" face="Helvetica Neue" style="color:black">SMPN 3 Baleendah</font><br>

<img src="assets/images/logo.jpeg" width="250px height="25px" /> <br><br>

<section class="content">

<div class="row" style="margin-bottom:5px;">


    <div class="col-md-3" style="color:black">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-red"><i class="fa fa-user fa-4x" style="color:blue"></i></span>
            <div class="sm-st-info">
                <?php $tampil = mysqli_query($koneksi, "select * from anggota order by id_anggota");
                $total = mysqli_num_rows($tampil);
                ?>
                <span><?php echo "$total"; ?></span>
                Total Anggota
            </div>
        </div>
    </div>
    <div class="col-md-3" style="color:black">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-violet"><i class="fa fa-book fa-4x" style="color:red"></i></span>
            <div class="sm-st-info">
                <?php $tampil = mysqli_query($koneksi, "select * from buku order by id_buku");
                $total = mysqli_num_rows($tampil);
                ?>
                <span><?php echo "$total"; ?></span>
                Total Buku
            </div>
        </div>
    </div>
    <div class="col-md-3" style="color:black">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-blue"><i class="fa fa-upload fa-4x" style="color:brown"></i></span>
            <div class="sm-st-info">
                <?php $tampil = mysqli_query($koneksi, "select * from peminjaman where status='pinjam'");
                $total = mysqli_num_rows($tampil);
                ?>
                <span><?php echo "$total"; ?></span>
                Total Peminjaman Buku
            </div>
        </div>
    </div>
    <div class="col-md-3" style="color:black">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-green"><i class="fa fa-download fa-4x" style="color:green"></i></span>
            <div class="sm-st-info">
                <?php $tampil = mysqli_query($koneksi, "select * from pengembalian order by id_kembali");
                $total = mysqli_num_rows($tampil);
                ?>
                <span><?php echo "$total"; ?></span>
                Total Pengembalian Buku
            </div>
        </div>
    </div>
</div>
</br>
</br>
</br>
<div class="container">
  <div class="row">
    <div class="col">
    <div class="card">
    <div class="card-header bg-primary text-white">
    <font Size="4" face="Helvetica Neue">Buku yang paling sering dipinjam</font><br>
    </div>
      <!-- isi dalam card -->
        <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <tbody>  
                    <?php while($row=mysqli_fetch_assoc($buku)):?>
                    <tr>
                    <td><img style="width: 120px;" src="assets/images/<?php echo $row['gambar']; ?>"></td>
                    <td><?php echo $row['judul_buku']?></td> 
                    </tr>
                    <?php endwhile ?>
                </tbody>
                </thead>
            </table>
        </div>
        </div>
</div>
    </div>
    <div class="col">
    <div class="card">
      <div class="card-header bg-success text-white">
      <font Size="4" face="Helvetica Neue">Anggota yang sering pinjam buku</font><br>
      </div>
   
  <div class="row">
    <div class="col">
    <table class="table">
        <thead>
        <tbody>  
        <?php while($row=mysqli_fetch_assoc($anggota)):?>
                    <tr>
                    <td><img style="width: 120px;" src="assets/images/<?php echo $row['foto']; ?>"></td>
                    <td> <?= $row['nama_siswa'] ?> </td> 
                    </tr>
                    <?php endwhile ?>
        </tbody>
        </thead>
  </table>
    </div>
  </div>
</div>
    </div>
    
  </div>
</div>

</br>
</br>
</br>

    
