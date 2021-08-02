<?php
include ('../../config/koneksi.php');
$id_pengaduan = $_POST['id_pengaduan'];
$status = $_POST['status'];

$query = "UPDATE pengaduan set status='$status' where id_pengaduan='$id_pengaduan'";
if (mysqli_query($conn, $query)) {
	echo "<script>
	alert ('Status Pengaduan Telah di Rubah');
	window.location = '../index.php?menu=1';
	</script>";
}else{
	echo "<script>
	alert ('Maaf Terjadi kesalahan penyimpanan ke database');
	window.location = '../index.php?menu=1';
	</script>";
}

?>