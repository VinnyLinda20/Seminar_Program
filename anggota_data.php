<?php
//memasukkan file config.php
include('koneksi.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6" face="Helvetica" >Data Anggota</font></center>
		<hr>
		<a href="anggota_tambah.php"><button class="btn btn-dark right" style="background: #2A9D8F;">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th> No.  </th>
					<th> Nomor Anggota </th>
					<th> Nama Siswa </th>
					<th> JK </th>
					<th> Kelas </th>
					<th> Nomor Induk</th>
					<th> NISN </th>
					<th> Alamat </th>
					<th> Foto </th>
					<th>  </th>
				</tr>
			</thead>
			<tbody>
			</div>
			<form action="" method="POST">
			<div class="title_right">
                <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" name="qcari" placeholder="Cari berdasarkan Nama" required />
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
                    $data = mysqli_query($koneksi,"SELECT * FROM anggota WHERE nama_siswa LIKE '%".$qcari."%' or id_anggota LIKE '%".$qcari."%'")or die(mysql_error());
                    }else{
                    $data = mysqli_query($koneksi,"SELECT * FROM anggota")or die(mysql_error());
					}
					$no = 1;
					$sql = mysqli_query($koneksi, "SELECT * FROM anggota") or die(mysqli_error($koneksi));
					if(mysqli_num_rows($sql) > 0){
					}
					
				?>
				<?php
					while($anggota=mysqli_fetch_assoc($data)) :
               		?>
					<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $anggota['id_anggota']; ?></td>
					<td><?php echo $anggota['nama_siswa']; ?></td>
					<td><?php echo $anggota['jk']; ?></td>
					<td><?php echo $anggota['kelas']; ?></td>
					<td><?php echo $anggota['nomor_induk']; ?></td>
					<td><?php echo $anggota['nisn']; ?></td>
					<td><?php echo $anggota['alamat']; ?></td>
					<td><img style="width: 120px;" src="assets/images/<?php echo $anggota['foto']; ?>"></td>
					<td>
						<a href="anggota_edit.php?id_anggota=<?php echo $anggota['id_anggota'];?>" class="btn btn-secondary btn-sm" style="background: #f3722c;">Edit</a>
						<a href="anggota_delete.php?id_anggota=<?php echo $anggota['id_anggota'];?>" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
					</td>
					</tr>
				<?php endwhile; ?>
			<tbody>
		</table>
	</div>
	</div>
