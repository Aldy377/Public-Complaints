<?php
include ('../../config/koneksi.php');
$id_petugas = $_POST['id_petugas'];
$pass1 = md5($_POST['pass1']);
$pass2 = md5($_POST['pass2']);

$qcek = "SELECT * FROM petugas where id_petugas='$id_petugas' AND password='$pass1'";
$rcek = mysqli_query($conn, $qcek);

if (mysqli_num_rows($rcek) == 0) {
	echo "<script>
	alert ('Password lama yang anda masukan salah !');
	window.location = '../index.php?menu=9&id=$id_petugas';
	</script>";
}else{
	$query = "UPDATE petugas set password='$pass2' where id_petugas='$id_petugas'";
	if (mysqli_query($conn, $query)) {
		echo "<script>
		alert ('Password Berhasil Di Rubah');
		window.location = '../index.php?menu=6';
		</script>";
	}else{
		echo "<script>
		alert ('Maaf Terjadi kesalahan penyimpanan ke database');
		window.location = '../index.php?menu=9&id=$id_petugas';
		</script>";
	}
}


?>