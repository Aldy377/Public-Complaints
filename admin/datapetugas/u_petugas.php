<?php
include "../../config/koneksi.php";

$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$telp = $_POST['telp'];

$query = "UPDATE petugas SET nama_petugas = '$nama_petugas', username='$username', telp='$telp' where id_petugas='$id_petugas'";

if (mysqli_query($conn,$query)) {
	echo "<script>
	alert ('Data Masyarakat Telah di Rubah');
	window.location = '../index.php?menu=6';
	</script>";
}else{
	echo "<script>
	alert ('Maaf Terjadi Kesalahan !');
	window.location = '../index.php?menu=6';
	</script>";
}
mysqli_close($conn);
?>