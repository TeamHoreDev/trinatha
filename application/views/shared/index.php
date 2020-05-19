<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Trinatha Group</title>

  <link rel="icon" href="<?= base_url("assets/images/logo.jpeg") ?>" type="image/jpeg">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/fontawesome-free/css/all.min.css") ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css") ?>">
  <!-- jQuery -->
  <script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
  <!-- DataTables -->
  <script src="<?= base_url("assets/plugins/datatables/jquery.dataTables.min.js") ?>"></script>
  <script src="<?= base_url("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js") ?>"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/dist/css/adminlte.min.css") ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url() ?>" class="brand-link">
        <img src="<?= base_url("assets/images/logo.jpeg") ?>" alt="AdminLTE Logo" class="brand-image">
        <span class="brand-text font-gray-900">TRINATHA GROUP</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://avatars2.githubusercontent.com/u/63731205?s=200&v=4" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Team Hore Dev</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?php echo base_url('dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link <?= $this->uri->segment(1) == 'solar' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Transaksi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('solar') ?>" class="nav-link <?= $this->uri->segment(1) == 'solar' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Solar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jam Kerja Alat</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview menu-close">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-print"></i>
                <p>
                  Laporan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jam Kerja Alat</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Stok Solar</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link <?= $this->uri->segment(1) == 'user' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-database"></i>
                <p>
                  Data Master
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('alat') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'alat' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Master Alat</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('user') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'user' ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Master User</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>
                  Setting
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <?= $contents ?>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <!-- /.DISINI KONTEN UTAMA -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        PT TRINATHA UTAMA MINERAL
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; <?= date('Y') ?> <a href="https://github.com/TeamHoreDev" target="_blank">TeamHoreDev</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->


  <!-- Bootstrap 4 -->
  <script src="<?= base_url("assets/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url("assets/dist/js/adminlte.min.js") ?>"></script>
  <script src="<?= base_url("assests/plugins/jquery-knob/jquery.knob.min.js") ?>"></script>
</body>

</html>