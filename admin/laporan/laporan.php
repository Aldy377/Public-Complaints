<?php
include ('../../config/koneksi.php');
$query = "SELECT * FROM pengaduan";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="window.print()">
<h2 align="center">LAPORAN PENGADUAN MASYARAKAT</h2>
<table border="1" width="800" align="center">
			<thead>
				<tr>
					<th>ID PENGADUAN</th>
					<th>ISI LAPORAN</th>
					<th>FOTO</th>
					<th>STATUS</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {

				?>
				<tr>
					<td align="center"><?php echo $row['id_pengaduan'];?></td>
					<td><?php echo $row['isi_laporan'];?></td>
					<td><img src="../../assets/foto/<?php echo $row['foto'];?>" style="width: 150px;"></td>
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
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>
</body>
</html>