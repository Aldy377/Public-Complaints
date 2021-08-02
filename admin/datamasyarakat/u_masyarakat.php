<?php
include "../../config/koneksi.php";

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$telp = $_POST['telp'];

$query = "UPDATE masyarakat SET nama = '$nama', username='$username', telp='$telp' where nik='$nik'";

if (mysqli_query($conn,$query)) {
	echo "<script>
	alert ('Data Masyarakat Telah di Rubah');
	window.location = '../index.php?menu=5';
	</script>";
}else{
	echo "<script>
	alert ('Maaf Terjadi Kesalahan !');
	window.location = '../index.php?menu=5';
	</script>";
}
mysqli_close($conn);
?>