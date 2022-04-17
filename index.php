<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","tabungan");

if (!isset($_SESSION['admin']))
{
    echo "<script>alert('anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/bower_components/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css" />
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css" />
    <link rel="stylesheet" href="assets/dist/css/skins/skin-blue.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
  </head>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>M</b>I</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!--tombol disini-->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="assets/dist/img/logo2.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <br />
              <p>MI Al-Islamiyah</p>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="pencarian.php" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="keyword" class="form-control" placeholder="Search..." />
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" data-widget="tree">
            <!-- Optionally, you can add icons to the links -->
            <li>
              <a href="index.php"><span>Home</span></a>
            </li>
            <li>
              <a href="index.php?halaman=admin"><span>Data Admin</span></a>
            </li>
            <li>
              <a href="index.php?halaman=siswa"><span>Data Siswa</span></a>
            </li>
            <li>
              <a href="index.php?halaman=transaksi"><span>Transaksi</span></a>
            </li>
            <li>
              <a href="index.php?halaman=setoran"><span>Setoran</span></a>
            </li>
            <li>
              <a href="index.php?halaman=penarikan"><span>Penarikan</span></a>
            </li>
            <li class="treeview">
              <a href="#"><span>Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php?halaman=laporanmasuk">Tabungan Masuk</a></li>
                <li><a href="index.php?halaman=laporankeluar">Tabungan Keluar</a></li>
              </ul>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a>
            </li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="background-color: white;" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
          <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="admin")
                    {
                        include 'admin/admin.php' ;
                    }
                    elseif($_GET['halaman']=="tambahadmin")
                    {
                        include 'admin/tambahadmin.php' ;
                    }
                    elseif($_GET['halaman']=="hapusadmin")
                    {
                        include 'admin/hapusadmin.php' ;
                    }
                    elseif($_GET['halaman']=="editadmin")
                    {
                        include 'admin/editadmin.php' ;
                    }
                    elseif($_GET['halaman']=="siswa")
                    {
                        include 'siswa/siswa.php' ;
                    }
                    elseif($_GET['halaman']=="hapussiswa")
                    {
                        include 'siswa/hapussiswa.php' ;
                    }
                    elseif($_GET['halaman']=="tambahsiswa")
                    {
                        include 'siswa/tambahsiswa.php' ;
                    }
                    elseif($_GET['halaman']=="editsiswa")
                    {
                        include 'siswa/editsiswa.php' ;
                    }
                    elseif($_GET['halaman']=="transaksi")
                    {
                        include 'transaksi/transaksi.php' ;
                    }
                    elseif($_GET['halaman']=="tambahtransaksi")
                    {
                        include 'transaksi/tambahtransaksi.php' ;
                    }
                    elseif($_GET['halaman']=="hapustransaksi")
                    {
                        include 'transaksi/hapustransaksi.php' ;
                    }
                    elseif($_GET['halaman']=="edittransaksi")
                    {
                        include 'transaksi/edittransaksi.php' ;
                    }
                    elseif($_GET['halaman']=="penarikan")
                    {
                        include 'penarikan/penarikan.php' ;
                    }
                    elseif($_GET['halaman']=="tambahpenarikan")
                    {
                        include 'penarikan/tambahpenarikan.php' ;
                    }
                    elseif($_GET['halaman']=="hapuspenarikan")
                    {
                        include 'penarikan/hapuspenarikan.php' ;
                    }
                    elseif($_GET['halaman']=="editpenarikan")
                    {
                        include 'penarikan/editpenarikan.php' ;
                    }
                    elseif($_GET['halaman']=="setoran")
                    {
                        include 'setoran/setoran.php' ;
                    }
                    elseif($_GET['halaman']=="tambahsetoran")
                    {
                        include 'setoran/tambahsetoran.php' ;
                    }
                    elseif($_GET['halaman']=="hapussetoran")
                    {
                        include 'setoran/hapussetoran.php' ;
                    }
                    elseif($_GET['halaman']=="editsetoran")
                    {
                        include 'setoran/editsetoran.php' ;
                    }
                    elseif($_GET['halaman']=="login")
                    {
                        include 'login.php' ;
                    }
                    elseif($_GET['halaman']=="logout")
                    {
                        include 'logout.php' ;
                    }
                    elseif($_GET['halaman']=="pencarian")
                    {
                        include 'pencarian.php' ;
                    }
                    elseif($_GET['halaman']=="laporanmasuk")
                    {
                        include 'laporanmasuk.php' ;
                    }
                    elseif($_GET['halaman']=="laporankeluar")
                    {
                        include 'laporankeluar.php' ;
                    }
                }
                else
                {
                    include 'home.php' ;
                }
                ?>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->


      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active">
            <a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a>
          </li>
          <li>
            <a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="pull-right-container">
                      <span class="label label-danger pull-right">70%</span>
                    </span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->
          </div>
          <!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
          <!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked />
                </label>

                <p>Some information about this general settings option</p>
              </div>
              <!-- /.form-group -->
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
      </aside>
      <div class="control-sidebar-bg"></div>
    </div>
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/dist/js/adminlte.min.js"></script>
  </body>
</html>
