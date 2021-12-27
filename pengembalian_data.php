<?php
//memasukkan file config.php
include('koneksi.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6" face="Helvetica" >Data Transaksi Pengembalian Buku</font></center>
		<hr>
		
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
					<td>
						<a href="pengembalian_delete.php?id_kembali=<?php echo $pengembalian['id_kembali'];?>" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
					</td>
					</tr>
				<?php endwhile; ?>
			<tbody>
		</table>
	</div>
	</div>
