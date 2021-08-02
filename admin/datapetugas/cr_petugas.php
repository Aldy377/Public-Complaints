<?php
include "../../config/koneksi.php";

$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$telp = $_POST['telp'];
$level = $_POST['level'];


$query = "INSERT INTO petugas values ('','$nama_petugas','$username','$password','$telp','$level')";

if (mysqli_query($conn,$query)) {
	echo "<script>
	alert ('Data Petugas Berhasil di Simpan');
	window.location = '../index.php?menu=6';
	</script>";
}else{
	echo "<script>
	alert ('Maaf Terjadi Kesalahan');
	window.location = '../index.php?menu=6';
	</script>";
}
mysqli_close($conn);
?>