<?php
//memasukkan file config.php
include('koneksi.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6" face="Helvetica" >Laporan Data Peminjaman Buku</font></center>
		<hr>
         <div class="row">
        &nbsp;&nbsp;&nbsp;&nbsp;<h6 class="h5 mb-0 text-gray"><strong>Periode Tanggal Awal s/d Tanggal Akhir</strong></h6>
        </div>
        <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->

                    <br>
                    <form method="post" action="tampilan_lap_pinjam.php">
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
					<th> Tgl Pinjam </th>
					<th> Tgl Kembali </th>
					<th> Status </th>
					<th> </th>
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
					$data = mysqli_query($koneksi, "SELECT * FROM peminjaman  where nama_siswa LIKE '%" . $qcari . "%' or id_pinjam LIKE '%" . $qcari . "%'") or die(mysql_error());
				} else {
					$data = mysqli_query($koneksi, "SELECT * FROM peminjaman  ") or die(mysql_error());
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
			<tbody>
		</table>
	</div>
	</div>
