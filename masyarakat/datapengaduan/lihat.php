<?php
include ('../../config/koneksi.php');
$id = $_GET['id'];
$query = "SELECT * FROM tanggapan where id_pengaduan = '$id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
	echo '<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">TANGGAPAN</h4>
			</div>
			<div class="modal-body">
				MAAF BELUM ADA TANGGAPAN
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>';
}

while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">TANGGAPAN</h4>
			</div>
			<div class="modal-body">
				TANGGAPAN DARI ADMIN : " <?php echo $row['tanggapan'];?> "
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	<?php
}
?>