<?php
if ($_SESSION['level'] == "admin") {
  echo '<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Pengaduan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?menu=1"><i class="fa fa-circle-o"></i>Pengaduan Baru</a></li>
            <li><a href="?menu=2"><i class="fa fa-circle-o"></i>Pengaduan Proses</a></li>
            <li><a href="?menu=3"><i class="fa fa-circle-o"></i>Pengaduan Selesai</a></li> 
           <li><a href="?menu=4"><i class="fa fa-circle-o"></i>Data Tanggapan</a></li>   
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Kelola Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?menu=5"><i class="fa fa-circle-o"></i>Data Masyarakat</a></li>
            <li><a href="?menu=6"><i class="fa fa-circle-o"></i>Data Petugas</a></li>
            <li><a href="?menu=7"><i class="fa fa-circle-o"></i>Cetak Laporan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Account</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="logout.php"><i class="fa fa-circle-o"></i> Logout</a></li>
          </ul>
        </li>
      </ul>';
}else{
echo '<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Pengaduan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?menu=1"><i class="fa fa-circle-o"></i>Pengaduan Baru</a></li>
            <li><a href="?menu=2"><i class="fa fa-circle-o"></i>Pengaduan Proses</a></li>
            <li><a href="?menu=3"><i class="fa fa-circle-o"></i>Pengaduan Selesai</a></li> 
           <li><a href="?menu=4"><i class="fa fa-circle-o"></i>Data Tanggapan</a></li>   
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Account</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="logout.php"><i class="fa fa-circle-o"></i> Logout</a></li>
          </ul>
        </li>
      </ul>';
}
?>
