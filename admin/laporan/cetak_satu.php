<?php
include ('../../config/koneksi.php');
$tgl = date('d-m-Y');
$id = $_GET['id'];
$query = "SELECT * FROM pengaduan where id_pengaduan = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);

$id_pengaduan = $data['id_pengaduan'];
$nik = $data['nik'];
$isi_laporan = $data['isi_laporan'];
$tgl_pengaduan = $data['tgl_pengaduan'];
$foto = $data['foto'];
$status = $data['status'];

$q2 = "SELECT * FROM masyarakat where nik = '$nik'";
$r2 = mysqli_query($conn, $q2);
$d2 = mysqli_fetch_array($r2);

$nama_masyarakat = $d2['nama'];
$telp = $d2['telp'];

$q3 = "SELECT * FROM tanggapan where id_pengaduan = '$id_pengaduan'";
$r3 = mysqli_query($conn, $q3);
$d3 = mysqli_fetch_array($r3);

$tanggapan = $d3['tanggapan'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="">
<h2><u>KARTU PENGADUAN</u></h2>
<table border="1" width="700">
	<tr>
		<td width="200">ID PENGADUAN : </td>
		<td><?php echo $id_pengaduan;?></td>
	</tr>
	<tr>
		<td width="200">TANGGAL PENGADUAN : </td>
		<td><?php echo $tgl_pengaduan;?></td>
	</tr>
	<tr>
		<td width="200">Bukti / Foto :</td>
		<td><img src="../../assets/foto/<?php echo $foto;?>" style="width: 150px;"></td>
	</tr>
	<tr>
		<td width="200">Isi Laporan :</td>
		<td><?php echo $isi_laporan;?></td>
	</tr>
	<tr>
		<td width="200">Pelapor :</td>
		<td><?php echo $nama_masyarakat;?></td>
	</tr>
	<tr>
		<td width="200">No Telepon/HP Pelapor :</td>
		<td><?php echo $telp;?></td>
	</tr>
	<tr>
		<td width="200">Tanggapan Dari Admin :</td>
		<td><?php echo $tanggapan;?></td>
	</tr>
</table>
<br>
Bandung, <?php echo $tgl;?>
<br>
<br>
<br>
(............................)

</body>
</html>