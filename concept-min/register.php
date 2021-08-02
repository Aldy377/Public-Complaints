<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/register.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="signup-form">
    <form action="" method="POST">
      <h2>Register</h2>
      <p class="hint-text">Create your account. It's free and only takes a minute.</p>

      <div class="form-group">
        <input type="text" class="form-control" name="nama" placeholder="Nama" required="required">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
      </div>        
      <div class="form-group">
        <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        <br>
        <div class="text-center">Already have an account? <a href="#">Sign in</a></div>
      </div>
    </form>

  </div>
</body>
</html>