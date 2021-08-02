<?php
include ('../config/koneksi.php');
$query = "SELECT * FROM tanggapan ORDER BY id_tanggapan DESC";
$result = mysqli_query($conn, $query);

?>
<div class="box">
	<div class="box-header">
		<h3>DATA TANGGAPAN</h3>
	</div>
	<div class="box-body">
		<table id="example" class="table table-hover">
			<thead>
				<tr>
					<th>ID PENGADUAN</th>
					<th>ISI TANGGAPAN</th>
					<th>TANGGAL</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {

					?>
					<tr>
						<td><?php echo $row['id_pengaduan'];?></td>
						<td><?php echo $row['tanggapan'];?></td>
						<td><?php echo $row['tgl_tanggapan'];?></td>
						<td>
							<a class="btn btn-info" data-toggle="modal" href='#edit-<?php echo $row['id_tanggapan'];?>'>Edit</a>
						</td>
					</tr>


					<div class="modal fade" id="edit-<?php echo $row['id_tanggapan'];?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Form Edit Tanggapan</h4>
								</div>
								<div class="modal-body">
									<form action="datatanggapan/u_tanggapan.php" method="POST" role="form">
										<?php
										$id = $row['id_tanggapan'];
										$query2 = "SELECT * FROM tanggapan WHERE id_tanggapan='$id'";
										$result2 = mysqli_query($conn, $query2);
										$row2 = mysqli_fetch_assoc($result2);
										?>
										<div class="form-group">
											<label for="">ID TANGGAPAN</label>
											<input type="text" class="form-control" name="id_tanggapan" value="<?php echo $row2['id_tanggapan'];?>" readonly>
										</div>
										<div class="form-group">
											<label for="">TANGGAPAN</label>
											<textarea class="form-control" name="tanggapan"><?php echo $row2['tanggapan'];?></textarea>
										</div>

										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Rubah Tanggapan</button>
									</form>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

