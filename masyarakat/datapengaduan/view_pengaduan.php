<?php
include ('../config/koneksi.php');
$nik = $_SESSION['nik'];
$query = "SELECT * FROM pengaduan where nik='$nik'";
$result = mysqli_query($conn, $query);

?>
<div class="box">
	<div class="box-header">
		<h3>DATA ASPIRASI DAN PENGADUAN ANDA !</h3>
		<!-- <a href="?menu=2" class="btn btn-info">Tambah Data</a> -->
	</div>
	<div class="box-body">
		<table id="example" class="table table-hover">
			<thead>
				<tr>
					<th>ID PENGADUAN</th>
					<th>ISI LAPORAN</th>
					<th>FOTO</th>
					<th>STATUS</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {

				?>
				<tr>
					<td><?php echo $row['id_pengaduan'];?></td>
					<td><?php echo $row['isi_laporan'];?></td>
					<td><img src="../assets/foto/<?php echo $row['foto'];?>" style="width: 150px;"></td>
					<td>
						<?php
						if ($row['status'] == '0') {
							echo '<a class="btn btn-danger">Baru</a>';	
						}elseif ($row['status'] == 'proses') {
							echo '<a class="btn btn-info">Proses</a>';	
						}elseif ($row['status'] == 'selesai') {
							echo '<a class="btn btn-success">Selesai</a>';	
						}
						?>
					</td>
					<td>
						<a href="" class="btn btn-warning lihat" id="<?php echo $row['id_pengaduan'];?>" data-toggle="modal" data-target="#lihat">LIHAT TANGGAPAN</a>
						<a href="?menu=3&id=<?php echo $row['id_pengaduan'];?>" class="btn btn-warning">Edit</a>
						<a href="datapengaduan/d_pengaduan.php?id=<?php echo $row['id_pengaduan'];?>" class="btn btn-danger" onclick="return confirm('Yakin Data Akan di Hapus ??');">DELETE</a>
					</td>
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>
	</div>
</div>


<div class="modal fade" id="lihat">
	
</div>