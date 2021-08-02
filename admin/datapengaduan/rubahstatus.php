<?php
include ('../../config/koneksi.php');
$id = $_GET['id'];
$query = "SELECT * FROM pengaduan where id_pengaduan = '$id'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">RUBAH STATUS</h4>
			</div>
			<div class="modal-body">
				<form action="datapengaduan/u_pengaduan.php" method="POST" role="form">
				
				
					<div class="form-group">
						<label for="">ID PENGADUAN</label>
						<input type="text" class="form-control" name="id_pengaduan" value="<?php echo $row['id_pengaduan'];?>" readonly>

					</div>

					<div class="form-group">
						<label for="">Status</label>
						<select class="form-control" name="status">
							<option value="0">Baru</option>
							<option value="proses">Proses</option>
						</select>
					</div>
				
					
				
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
			
		</div>
	</div>
	<?php
}
?>