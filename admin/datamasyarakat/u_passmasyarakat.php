<?php
include ('../../config/koneksi.php');
$nik = $_POST['nik'];
$pass1 = md5($_POST['pass1']);
$pass2 = md5($_POST['pass2']);

$qcek = "SELECT * FROM masyarakat where nik='$nik' AND password='$pass1'";
$rcek = mysqli_query($conn, $qcek);

if (mysqli_num_rows($rcek) == 0) {
	echo "<script>
	alert ('Password lama yang anda masukan salah !');
	window.location = '../index.php?menu=8&id=$nik';
	</script>";
}else{
	$query = "UPDATE masyarakat set password='$pass2' where nik='$nik'";
	if (mysqli_query($conn, $query)) {
		echo "<script>
		alert ('Password Berhasil Di Rubah');
		window.location = '../index.php?menu=5';
		</script>";
	}else{
		echo "<script>
		alert ('Maaf Terjadi kesalahan penyimpanan ke database');
		window.location = '../index.php?menu=8&id=$nik';
		</script>";
	}
}


?>