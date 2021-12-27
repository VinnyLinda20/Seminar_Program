<?php
//memasukkan file config.php
include('koneksi.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6" face="Helvetica" >Laporan Data Pengembalian Buku</font></center>
		<hr>
        <div class="row">
        &nbsp;&nbsp;&nbsp;&nbsp;<h6 class="h5 mb-0 text-gray"><strong>Periode Tanggal Awal s/d Tanggal Akhir</strong></h6>
        </div>
        <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->

            <br>
                    <form method="post" action="tampilan_lap_kembali.php">
                    <div class="row">
                        <!-- tanggal awal -->
                        <div class="col-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Awal</label>
                            <input type="date" class="form-control" id="start_pekerjaan" name="start_pekerjaan"  value="">
                        </div>
                        </div>
                        <!-- tanggal start -->
                        <div class="col-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="end_pekerjaan" name="end_pekerjaan"  value="">   
                        </div>
                        </div>
                        <!-- button -->
                        <div class="col-2">
                        <div class="form-group">
                            <br>
                            <button class="btn btn-success" type="submit" name="tampilkan" >Tampilkan</button>
                        </div>
                        </div>
                    </div>
                    </form>
					<br>
		
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th> No. </th>
					<th> Id Pinjam </th> 
					<th> Nama Siswa </th>
					<th> Judul Buku </th>
					<th> Tgl Dikembalikan </th>
					<th> Tgl Kembali </th>
					<th> Tgl Pinjam </th>
					<th> Jumlah </th>
					<th> Status </th>
					<th> Ket </th>
					<th>  </th>
				</tr>
			</thead>
			<tbody>
			</div>
			<form action="" method="POST">
			<div class="title_right">
                <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" name="qcari" placeholder="Cari berdasarkan Nama Siswa" required />
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
			</form>
                </div>
              </div>
            </div>
			<?php
                    if (isset($_POST['qcari'])) {
                    $qcari = $_POST['qcari'];
                    $data = mysqli_query($koneksi,"SELECT * FROM pengembalian,detail_pinjam,peminjaman where peminjaman.id_pinjam = detail_pinjam.id_pinjam and detail_pinjam.id_detailpinjam = pengembalian.id_pinjam and nama_siswa LIKE '%".$qcari."%' or id_kembali LIKE '%".$qcari."%'");
                    }else{
                    $data = mysqli_query($koneksi,"SELECT * FROM pengembalian,detail_pinjam,peminjaman where peminjaman.id_pinjam = detail_pinjam.id_pinjam and detail_pinjam.id_detailpinjam = pengembalian.id_pinjam ")or die(mysqli_error());
					}
					$no = 1;
					$sql = mysqli_query($koneksi, "SELECT * FROM pengembalian,detail_pinjam,peminjaman where peminjaman.id_pinjam = detail_pinjam.id_pinjam and detail_pinjam.id_detailpinjam = pengembalian.id_pinjam") or die(mysqli_error($koneksi));
					if(mysqli_num_rows($sql) > 0){
					}
				?>
				<?php
					while($pengembalian=mysqli_fetch_assoc($data)) :
               		?>
					<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $pengembalian['id_pinjam']; ?></td>
					<td><?php echo $pengembalian['nama_siswa']; ?></td>
					<td><?php echo $pengembalian['judul_buku']; ?></td>
					<td><?php echo $pengembalian['tgl_dikembalikan']; ?></td>
					<td><?php echo $pengembalian['tgl_kembali']; ?></td>
					<td><?php echo $pengembalian['tgl_pinjam']; ?></td>
					<td><?php echo $pengembalian['jumlah']; ?></td>
					<td><?php echo $pengembalian['status']; ?></td>
					<td><?php echo $pengembalian['keterangan']; ?></td>
					</tr>
				<?php endwhile; ?>
			<tbody>
		</table>
	</div>
	</div>
