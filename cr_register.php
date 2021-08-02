<?php
include('config/koneksi.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$telp = $_POST['telp'];

$query = "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp')";

if (mysqli_query($conn, $query)) {
	echo "<script>
	alert ('Anda Berhasil Mendaftarkan Akun');
	window.location = 'home.php';
	</script>";
}else{
	echo "<script>
	alert ('Maaf Terjadi Kesalahan');
	window.location = 'register.php';
	</script>";
}

?>