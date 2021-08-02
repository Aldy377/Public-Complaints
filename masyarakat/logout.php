<?php
session_start();
session_destroy();
echo "<script>
	alert('Anda Telah Logout Dari Aplikasi !');
	window.location='../login/index.html';
	</script>";
?>