<?php
//memasukkan file config.php
include('koneksi.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6" face="Helvetica" >Data Pengguna</font></center>
		<hr>
		<a href="pengguna_tambah.php"><button class="btn btn-dark right" style="background: #2A9D8F;">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th> No.  </th>
					<th> Id Pengguna </th>
					<th> Nama </th>
					<th> Username </th>
					<th> Password </th>
					<th> Level </th>
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
                    <input type="text" class="form-control" name="qcari" placeholder="Cari berdasarkan Username" required />
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
                    $data = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE nama LIKE '%".$qcari."%' or username LIKE '%".$qcari."%'")or die(mysql_error());
                    }else{
                    $data = mysqli_query($koneksi,"SELECT * FROM pengguna")or die(mysql_error());
					}
					$no = 1;
					$sql = mysqli_query($koneksi, "SELECT * FROM pengguna") or die(mysqli_error($koneksi));
					if(mysqli_num_rows($sql) > 0){
					}
				?>
				<?php
					while($pengguna=mysqli_fetch_assoc($data)) :
               		?>
					<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $pengguna['id_pengguna']; ?></td>
					<td><?php echo $pengguna['nama']; ?></td>
					<td><?php echo $pengguna['username']; ?></td>
					<td><?php echo $pengguna['password']; ?></td>
					<td><?php echo $pengguna['level']; ?></td>
					<td><?php echo $pengguna['jumlah']; ?></td>
					<td><img style="width: 120px;" src="assets/images/<?php echo $pengguna['foto']; ?>"></td>
					<td>
						<a href="pengguna_edit.php?id_pengguna=<?php echo $pengguna['id_pengguna'];?>" class="btn btn-secondary btn-sm" style="background: #f3722c;">Edit</a>
						<a href="pengguna_delete.php?id_pengguna=<?php echo $pengguna['id_pengguna'];?>" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
					</td>
					</tr>
				<?php endwhile; ?>
			<tbody>
		</table>
	</div>
	</div>


