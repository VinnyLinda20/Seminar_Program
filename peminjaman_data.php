<?php
//memasukkan file config.php
include('koneksi.php');
?>


<div class="container" style="margin-top:20px">
	<center>
		<font size="6" face="Helvetica">Data Transaksi Peminjaman Buku</font>
	</center>
	<hr>
	<a href="peminjaman_tambah.php"><button class="btn btn-dark right" style="background: #2A9D8F;">Pinjam Buku</button></a>
	<div class="table-responsive">
		<table  id="datatable-buttons" class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th> No. </th>
					<th> Id Pinjam </th>
					<th> Nama Siswa </th>
					<th> Tgl Pinjam </th>
					<th> Tgl Kembali </th>
					<th> Status </th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
				<form action="" method="POST">
					<div class="title_right">
						<div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">
							<div class="input-group">
								<input type="text" class="form-control" name="qcari" placeholder="Cari berdasarkan Nama Siswa" required />
								<span class="input-group-btn">
									<button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
					</div>
				</form>


				<?php
				if (isset($_POST['qcari'])) {
					$qcari = $_POST['qcari'];
					$data = mysqli_query($koneksi, "SELECT * FROM peminjaman  where nama_siswa LIKE '%" . $qcari . "%' or id_pinjam LIKE '%" . $qcari . "%'") or die(mysql_error());
				} else {
					$data = mysqli_query($koneksi, "SELECT * FROM peminjaman ") or die(mysql_error());
				}
				$no = 1;
				$sql = mysqli_query($koneksi, "SELECT * FROM peminjaman ") or die(mysqli_error($koneksi));
				if (mysqli_num_rows($sql) > 0) {
				}
				?>
				<?php
				while ($peminjaman = mysqli_fetch_assoc($data)) :
					$tgl_pinjam = date_format(date_create($peminjaman['tgl_pinjam']), "d M Y");

				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $peminjaman['id_pinjam']; ?></td>
						<td><?php echo $peminjaman['nama_siswa']; ?></td>
						<td><?php echo $peminjaman['tgl_pinjam']; ?></td>
						<td><?php echo $peminjaman['tgl_kembali']; ?></td>
						<td><?php echo $peminjaman['status']; ?></td>
						<td>
							<a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal<?php echo $peminjaman['id_pinjam'] ?>">Lihat</a>
							<?php if($peminjaman['status'] != 'return'){?><a href="kembali_buku.php?id_pinjam=<?php echo $peminjaman['id_pinjam']; ?>" class="btn btn-secondary btn-sm" style="background: #f3722c;">Kembalikan</a> <?php } ?>
							<a href="peminjaman_delete.php?id_pinjam=<?php echo $peminjaman['id_pinjam']; ?>" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
						</td>
					</tr>

					<!-- Modal -->
					<div class="modal fade" id="modal<?php echo $peminjaman['id_pinjam'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Detail Buku</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
											<?php
											$no2 = 1;
											$id = $peminjaman['id_pinjam'];
											$detail =  mysqli_query($koneksi, "SELECT * FROM detail_pinjam where id_pinjam='$id'") or die(mysql_error());
											while ($row = mysqli_fetch_assoc($detail)) :
											?>
												<p><?= $no2.". ".$row['judul_buku']." ( ". $row['jumlah']." Buku )" ?></p>

											<?php $no2++;endwhile; ?>

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>