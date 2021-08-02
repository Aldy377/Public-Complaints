<?php
include ('../../config/koneksi.php');
$id_pengaduan = $_POST['id_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];

$query = "UPDATE pengaduan set isi_laporan='$isi_laporan' where id_pengaduan='$id_pengaduan'";
if (mysqli_query($conn, $query)) {
	echo "<script>
	alert ('Data DIUPDATE Pengaduan Berhasil Di Simpan');
	window.location = '../index.php?menu=1';
	</script>";
}else{
	echo "<script>
	alert ('Maaf Terjadi kesalahan penyimpanan ke database');
	window.location = '../index.php?menu=2';
	</script>";
}

?>