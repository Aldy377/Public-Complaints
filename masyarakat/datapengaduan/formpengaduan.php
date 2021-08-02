<?php
include ('../config/autonumber.php');
?>
<div class="box">
	<div class="box-header">
		<h3>TAMBAH PENGADUAN MASYARAKAT</h3>
	</div>
	<div class="box-body">
		<form action="datapengaduan/cr_pengaduan.php" method="POST" role="form" enctype="multipart/form-data">
			
			<div class="form-group">
				<label for="">ID PENGADUAN</label>
				<input type="text" class="form-control" name="id_pengaduan" placeholder="Input field" value="<?php echo autonumber('pengaduan','id_pengaduan',3,'P');?>" required readonly>
			</div>

			<div class="form-group">
				<label for="">NIK</label>
				<input type="text" class="form-control" name="nik" placeholder="Input field" value="<?php echo $_SESSION['nik'];?>" readonly required>
			</div>

			<div class="form-group">
				<label for="">ISI LAPORAN</label>
				<textarea class="form-control" name="isi_laporan" required></textarea>
			</div>
		
			<div class="form-group">
				<label for="">FOTO</label>
				<input type="file" class="form-control" name="foto" required>
			</div>
		
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>