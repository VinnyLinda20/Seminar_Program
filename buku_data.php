<?php
//memasukkan file config.php
include('koneksi.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6" face="Helvetica" >Data Buku</font></center>
		<hr>
		<a href="buku_tambah.php"><button class="btn btn-dark right" style="background: #2A9D8F;">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th> No.  </th>
					<th> Kode Buku </th>
					<th> Judul Buku </th>
					<th> Pengarang </th>
					<th> Penerbit </th>
					<th> Tahun Terbit </th>
					<th> Jumlah </th>
					<th> Gambar </th>
					<th>  </th>
				</tr>
			</thead>
			<tbody>
			</div>
			<form action="" method="POST">
			<div class="title_right">
                <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" name="qcari" placeholder="Cari berdasarkan Judul" required />
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
                    $data = mysqli_query($koneksi,"SELECT * FROM buku WHERE judul_buku LIKE '%".$qcari."%' or pengarang LIKE '%".$qcari."%'")or die(mysql_error());
                    }else{
                    $data = mysqli_query($koneksi,"SELECT * FROM buku")or die(mysql_error());
					}
					$no = 1;
					$sql = mysqli_query($koneksi, "SELECT * FROM buku") or die(mysqli_error($koneksi));
					if(mysqli_num_rows($sql) > 0){
					}
				?>
				<?php
					while($buku=mysqli_fetch_assoc($data)) :
               		?>
					<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $buku['id_buku']; ?></td>
					<td><?php echo $buku['judul_buku']; ?></td>
					<td><?php echo $buku['pengarang']; ?></td>
					<td><?php echo $buku['penerbit']; ?></td>
					<td><?php echo $buku['tahun_terbit']; ?></td>
					<td><?php echo $buku['jumlah']; ?></td>
					<td><img style="width: 120px;" src="assets/images/<?php echo $buku['gambar']; ?>"></td>
					<td>
						<a href="buku_edit.php?id_buku=<?php echo $buku['id_buku'];?>" class="btn btn-secondary btn-sm" style="background: #f3722c;">Edit</a>
						<a href="buku_delete.php?id_buku=<?php echo $buku['id_buku'];?>" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
					</td>
					</tr>
				<?php endwhile; ?>
			<tbody>
		</table>
	</div>
	</div>
