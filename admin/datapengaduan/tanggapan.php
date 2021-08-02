<?php
include ('../../config/koneksi.php');
session_start();
$id = $_GET['id'];
$query = "SELECT * FROM pengaduan where id_pengaduan = '$id'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">ISI TANGGAPAN</h4>
			</div>
			<div class="modal-body">
				<form action="datapengaduan/cru_tanggapan.php" method="POST" role="form">
				
				
					<div class="form-group">
						<label for="">ID PENGADUAN</label>
						<input type="text" class="form-control" name="id_pengaduan" value="<?php echo $row['id_pengaduan'];?>" readonly>
					</div>

					<div class="form-group">
						<label for="">ID PETUGAS</label>
						<input type="text" class="form-control" name="id_petugas" value="<?php echo $_SESSION['id_petugas'];?>" readonly>
					</div>

					<div class="form-group">
						<label for="">TANGGAPAN</label>
						<textarea class="form-control" name="tanggapan"></textarea>
					</div>
				
					
				
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
			
		</div>
	</div>
	<?php
}
?>