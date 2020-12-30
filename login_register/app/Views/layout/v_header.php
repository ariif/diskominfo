<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <!--  <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown text-decoration-none" data-toggle="dropdown" data-target="#menu-profile">
          Pengaturan <i class="fas fa-cog"></i>
        </a>
        <ul class="dropdown-menu" style="border-radius: 5%;" id="menu-profile">
          <!-- User image -->
          <li class="user-header">
            <img src="<?= base_url('assets/images/foto_user/' . session()->get('foto_user')) ?>" class="img-circle" alt="User Image">

            <p class=><?= session()->get('nama_user') ?></p>
            <!-- <p><?= session()->get('nik_user') ?></p> -->
            <p>
              <?php
              if (session()->get('level_user') == 'superadmin') {
                echo 'Super Admin';
              } else if (session()->get('level_user') == 'admin') {
                echo 'Admin';
              } else if (session()->get('level_user') == 'user') {
                echo 'User';
              } else {
                echo 'Guest';
              }
              ?>
            </p>


          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div style="float: left;">
              <a href="<?= base_url('profile') ?>" class="btn btn-primary">Profile</a>
            </div>
            <div style="float: right;">
              <a href="<?= base_url('login/logout') ?>" class="btn btn-danger">Sign out</a>
            </div>
            <!-- /.row -->
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <!-- <li>
        <a href="#" data-toggle="control-sidebar"><i class="fas fa-cog"></i></a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->




  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url() ?>/assets/dist/img/AdminLTELogo1.png" alt="AdminLTE Logo" class="brand-image  elevation-3" <span class="brand-text font-weight-light"><b>DISKOMINFO<br/>KOTA MEDAN</b></span>
    </a>