<?php
include ('../../config/koneksi.php');
$id_tanggapan = $_POST['id_tanggapan'];
$tanggapan = $_POST['tanggapan'];

$query = "UPDATE tanggapan set tanggapan='$tanggapan', tgl_tanggapan=NOW() where id_tanggapan='$id_tanggapan'";
if (mysqli_query($conn, $query)) {
	echo "<script>
	alert ('Tanggapan Telah di Rubah');
	window.location = '../index.php?menu=4';
	</script>";
}else{
	echo "<script>
	alert ('Maaf Terjadi kesalahan penyimpanan ke database');
	window.location = '../index.php?menu=4';
	</script>";
}

?>