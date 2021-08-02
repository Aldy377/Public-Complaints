<?php
include ('../config/autonumber.php');
include ('../config/koneksi.php');
$id_pengaduan = $_GET['id'];
$query = "SELECT * FROM pengaduan where id_pengaduan = '$id_pengaduan'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="box">
	<div class="box-header">
		<h3>EDIT PENGADUAN MASYARAKAT</h3>
		<a href="?menu=2" class="btn btn-info">Tambah Data</a>
	</div>
	<div class="box-body">
		<form action="datapengaduan/u_pengaduan.php" method="POST" role="form" enctype="multipart/form-data">
			
			<div class="form-group">
				<label for="">ID PENGADUAN</label>
				<input type="text" class="form-control" name="id_pengaduan" placeholder="Input field" value="<?php echo $row['id_pengaduan'];?>"  readonly>
			</div>

			<div class="form-group">
				<label for="">NIK</label>
				<input type="text" class="form-control" name="nik" placeholder="Input field" value="<?php echo $row['nik'];?>" readonly >
			</div>

			<div class="form-group">
				<label for="">ISI LAPORAN</label>
				<textarea class="form-control" name="isi_laporan" required><?php echo $row['isi_laporan'];?></textarea>
			</div>
		
		
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

<?php
}
?>