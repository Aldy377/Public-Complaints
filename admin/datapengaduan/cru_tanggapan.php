<?php
include('../../config/koneksi.php');
$id_pengaduan = $_POST['id_pengaduan'];
$id_petugas = $_POST['id_petugas'];
$tanggapan = $_POST['tanggapan'];

$query = "INSERT INTO tanggapan VALUES ('','$id_pengaduan',now(),'$tanggapan','$id_petugas')";

if (mysqli_query($conn, $query)) {
	$query2 = "UPDATE pengaduan set status='selesai' where id_pengaduan='$id_pengaduan'";
	mysqli_query($conn, $query2);
	echo "<script>
	alert ('ANDA BERHASIL MENYIMPAN TANGGAPAN');
	window.location = '../index.php?menu=2';
	</script>";
}else{
	echo "<script>
	alert ('Maaf Terjadi Kesalahan');
	window.location = '../index.php?menu=2';
	</script>";
}

?>