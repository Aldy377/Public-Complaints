<?php
include ('../config/koneksi.php');
$query = "SELECT * FROM pengaduan";
$result = mysqli_query($conn, $query);

?>
<!-- Bagian yang bisa anda hapus apabila tidak dibutuhkan cetak per status -->
<div class="box">
	<div class="box-body">
		<form action="laporan/laporan_status.php" method="POST" role="form" target="_blank">
			<h3>PENGADUAN MASYARAKAT</h3>
		
			<div class="form-group">
				<label for="">Cetak Berdasarkan Status :</label>
				<select class="form-control" name="status">
					<option value="0">Baru</option>
					<option value="proses">Proses</option>
					<option value="selesai">Selesai</option>
				</select>
			</div>
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
<!-- Bagian ini ke atas -->

<div class="box">
	<div class="box-header">
		
		<a href="laporan/laporan.php" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> Cetak Semua</a>
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
						<a href="laporan/cetak_satu.php?id=<?php echo $row['id_pengaduan'];?>" class="btn btn-info" target="_blank"><i class="fa fa-print"></i></a>
					</td>
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>
	</div>
</div>
