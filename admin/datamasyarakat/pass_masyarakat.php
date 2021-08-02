<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM masyarakat where nik='$id'"); 
while($row= mysqli_fetch_array($sql)){
	?> 
	<div class="box">
		<div class="box-header">
			<h3>FORM RUBAH PASSWORD</h3>
		</div>
		<div class="box-body">
			<form action="datamasyarakat/u_passmasyarakat.php" method="POST" role="form">

				<div class="form-group">
					<label for="">NIK</label>
					<input type="text" class="form-control" name="nik" value="<?php echo $row['nik'];?>" readonly>
				</div>
				<div class="form-group">
					<label for="">USERNAME</label>
					<input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>" required>
				</div>
				<div class="form-group">
					<label for="">PASSWORD LAMA</label>
					<input type="password" class="form-control" name="pass1" placeholder="PASSWORD LAMA" required>
				</div>
				<div class="form-group">
					<label for="">PASSWORD BARU</label>
					<input type="password" class="form-control" name="pass2" placeholder="PASSWORD BARU" required>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	<?php
}
?>