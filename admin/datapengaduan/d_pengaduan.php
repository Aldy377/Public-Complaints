<?php
include ('../../config/koneksi.php');
$id = $_GET['id'];

$query = "DELETE FROM pengaduan where id_pengaduan = '$id'";
if (mysqli_query($conn, $query)) {
	echo "<script>
	alert ('Databerhasil dihapus');
	window.location = '../index.php?menu=1';
	</script>";
}else{
	echo "<script>
	alert ('Maaf Terjadi kesalahan penyimpanan ke database');
	window.location = '../index.php?menu=2';
	</script>";
}

?>