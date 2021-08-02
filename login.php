<?php
include ('config/koneksi.php');
session_start();
if (isset($_POST['login'])) {
  $username = mysqli_escape_string($conn, $_POST['username']);
  $password = md5(mysqli_escape_string($conn, $_POST['password']));

  $query = "SELECT * FROM masyarakat where username='$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  $data = mysqli_fetch_array($result);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['nik'] = $data['nik'];
    $_SESSION['nama'] = $data['nama'];
    echo "<script>
    alert('Login berhasil');
    window.location = 'masyarakat/index.php';
    </script>";
  }else{
   $e = mysqli_error($conn);
    echo ":$e";
  }

}
?>

