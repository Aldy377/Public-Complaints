<?php
session_start();
if (isset($_SESSION['id_petugas'])) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Inventaris Sekolah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="adminlte/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- dataTables --> 
  <link rel="stylesheet" href="adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="adminlte/dist/css/skins/_all-skins.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>LPR</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>LAPOR</b>!</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="adminlte/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nama_petugas'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="adminlte/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nama_petugas'];?> - <?php echo $_SESSION['level'];?>
                  
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>   
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
          <img src="adminlte/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama_petugas'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['level'];?></a>
        </div>
    </div>
      <?php 
        include('sidemenu.php');
      ?>


    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content aplikasi -->
   
         <?php
                if(!empty($_GET['menu'])){
                    $menu = $_GET['menu'];
                    if($menu==1){
                      include('datapengaduan/view_pengaduan.php');
                    }elseif($menu==2){
                      include('datapengaduan/view_pengaduan2.php');
                    }elseif($menu==3){
                      include('datapengaduan/view_pengaduan3.php');
                    }elseif($menu==4){
                      include('datatanggapan/view_tanggapan.php');
                    }elseif($menu==5){
                      include('datamasyarakat/view_masyarakat.php');
                    }elseif($menu==6){
                      include('datapetugas/view_petugas.php');
                    }elseif($menu==7){
                      include('laporan/view_laporan.php');
                    }elseif($menu==8){
                      include('datamasyarakat/pass_masyarakat.php');
                    }elseif($menu==9){
                      include('datapetugas/pass_petugas.php');
                    }else{
                      include('view.php');
                    }
                }else{
                  include('datapengaduan/view_pengaduan.php');
                }
            ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2019 <a href="https://adminlte.io">ADMIN LTE @ Nama - Anda</a>.</strong> All rights
    reserved.
  </footer>


<!-- jQuery 3 -->
<script src="adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="adminlte/bower_components/datatables.net/js/jquery.dataTables.js"></script>
<script src="adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.js"></script>
<!-- Data Tables -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example2').DataTable();
} );
</script>
<!-- Posisi Harus dibawah databales js -->

<script src="adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script><!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.min.js"></script>
<script src="adminlte/js/modaljs.js"></script>
</body>
</html>
<?php
}else{
  echo "<script>
  alert('Harap Login Terlebih Dahulu');
  window.location = '../petugas/home.php';
  </script>";
}
?>

