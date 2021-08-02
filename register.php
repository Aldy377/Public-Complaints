<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/register.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body style="background-color: red;">
  <div class="signup-form">
    <form action="cr_register.php" method="POST">
      <h2>Daftar Akun</h2>
      <p class="hint-text">Masukan Data Pribadi Anda</p>

      <div class="form-group">
        <input type="text" class="form-control" name="nik" placeholder="NIK" required="required">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="nama" placeholder="Nama" required="required">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="telp" placeholder="Nomor Telepon" required="required">
      </div>        
      <div class="form-group">
        <label class="checkbox-inline"><input type="checkbox" required="required">Saya Setuju
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Daftarkan Sekarang</button>
        <br>
        <div class="text-center">Sudah Punya Akun? <a href="login.php" style="color:red;">Ke Halaman Login</a></div>
      </div>
    </form>
  </div>
</body>
</html>