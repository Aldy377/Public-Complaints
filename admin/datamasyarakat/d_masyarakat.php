<?php
include "../../config/koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM masyarakat where nik='$id'";

if (mysqli_query($conn, $query)) {
	echo "<script>
	alert ('Data berhasil dihapus');
	window.location = '../index.php?menu=5';
	</script>";
}else{
	echo "<script>
	alert ('Maaf Terjadi kesalahan');
	window.location = '../index.php?menu=5';
	</script>";
}
mysqli_close($conn);
?>