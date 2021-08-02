<?php
include ('../../config/koneksi.php');
$id_pengaduan = $_POST['id_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "../../assets/foto/".$fotobaru;

if (move_uploaded_file($tmp_foto, $path)) {
	$query = "INSERT INTO pengaduan VALUES ('$id_pengaduan',now(),'$nik','$isi_laporan','$fotobaru','0')";
	if (mysqli_query($conn, $query)) {
		echo "<script>
		alert ('Data Pengaduan Berhasil Di Simpan');
		window.location = '../index.php?menu=1';
		</script>";
	}else{
		echo "<script>
		alert ('Maaf Terjadi kesalahan penyimpanan ke database');
		window.location = '../index.php?menu=2';
		</script>";
	}
}else{
	echo "<script>
	alert ('gambar Gagal di Pindahkan');
	window.location = '../index.php?menu=2';
	</script>";
}
?>