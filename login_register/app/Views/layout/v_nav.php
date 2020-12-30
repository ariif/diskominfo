  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="mt-3 d-flex justify-content-start">
      <div class="image w-25">
        <img src="<?= base_url('assets/images/foto_user/' . session()->get('foto_user')) ?>" class="img-circle elevation-2 h-100 w-100" alt="User Image">
      </div>

      <div class="pull-left info w-75 ml-3">
        <p class="text-white"><?= session()->get('nama_user') ?></p>
        <a href="<?= base_url('profile') ?>"><i class="fa fa-circle text-success"></i> <?php if (session()->get('level_user') == 'superadmin') {
                                                                                          echo 'SuperAdmin';
                                                                                        } else if (session()->get('level_user') == 'admin') {
                                                                                          echo 'Admin';
                                                                                        } else if (session()->get('level_user') == 'user') {
                                                                                          echo 'User';
                                                                                        } else {
                                                                                          echo 'Guest';
                                                                                        } ?></a>
      </div>
      <!--  <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div> -->
    </div>
    <hr class="bg-white p-0">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <?php if (session()->get('level') == 'admin') { ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fas fa-address-card"></i>
              <p>
                Administration
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('register') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('role') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User & Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('karyawan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('departemen') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Departemen</p>
                </a>
              </li>

            </ul>
          </li>



      


          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe-asia"></i>
              <p>
                Geografis Regional
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('map') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seluruh Regional</p>
                </a>
              </li>
              <li class="nav-item">
                <?php
                $kode = urlencode(base64_encode("RE-001"));
                ?>
                <a href="<?php echo base_url('map/regional?kode=' . $kode) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Regional Sumatera</p>
                </a>
              </li>
              <li class="nav-item">
                <?php
                $kode = urlencode(base64_encode("RE-002"));
                ?>
                <a href="<?php echo base_url('map/regional?kode=' . $kode) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Regional Jawa</p>
                </a>
              </li>
              <li class="nav-item">
                <?php
                $kode = urlencode(base64_encode("RE-003"));
                ?>
                <a href="<?php echo base_url('map/regional?kode=' . $kode) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Regional Kalimantan</p>
                </a>
              </li>
              <li class="nav-item">
                <?php
                $kode = urlencode(base64_encode("RE-004"));
                ?>
                <a href="<?php echo base_url('map/regional?kode=' . $kode) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Regional Sulawesi</p>
                </a>
              </li>
              <li class="nav-item">
                <?php
                $kode = urlencode(base64_encode("RE-005"));
                ?>
                <a href="<?php echo base_url('map/regional?kode=' . $kode) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Regional Papua</p>
                </a>
              </li>
            </ul>
          </li>



          <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Departemen

            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Pengguna

            </p>
          </a>
        </li>

         <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Register User

            </p>
          </a>
        </li> -->


        <?php } ?>

        <?php if (session()->get('level_user') == 'admin') {

        ?>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fas fa-address-card"></i>
              <p>
                Administration
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('register') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('role') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User & Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('karyawan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karyawan</p>
                </a>
              </li>


            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('gitransmisi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Gardu Induk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('transmisi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Transmisi</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <?php
            $kode = urlencode(base64_encode(session()->get('kode_reg_user')));
            ?>

            <a href="<?php echo base_url('map/regional') ?>?kode=<?= $kode; ?>" class="nav-link">
              <i class="nav-icon fas fa-globe-asia"></i>
              <p>
                Regional
              </p>
            </a>
          </li>
        <?php } ?>

        <?php if (session()->get('level_user') == 'user') { ?>
          <li class="nav-item">
            <?php
            $kode = urlencode(base64_encode(session()->get('kode_reg_user')));
            ?>

            <a href="<?php echo base_url('map/regional') ?>?kode=<?= $kode; ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Regional
              </p>
            </a>
          </li>

        <?php } ?>


        <?php if (session()->get('level_user') == 'guest') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url('map/regional') ?>?kode=<?= session()->get('kode_reg_user'); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Regional
              </p>
            </a>
          </li>


        <?php } ?>



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
        <div class="row mb-2">
          <div class="">
            <h1 class="m-0 text-dark"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col">
            <?php
            if ($title == "Seluruh Regional") {
            ?>
              <div class="btn-group dropright float-left" id="main_nav">

                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <div class="btn-group dropright">
                      <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Search
                      </button>
                      <ul class="dropdown-menu">
                        <?php

                        foreach ($regional as $reg) {
                        ?>
                          <li><a class="dropdown-item" href="#"><b>Regional <?= $reg->nama_reg; ?></b> <i class="fas fa-angle-right"></i></a>
                            <ul class="submenu dropdown-menu">
                              <li><a class="dropdown-item" href=""><b>Gardu Induk</b> <i class="fas fa-angle-right"></i></a>
                                <ul class="submenu dropdown-menu" style="overflow: scroll; height:10rem;">
                                  <?php
                                  $kode_reg = $reg->kode_reg;
                                  foreach ($gardu as $gi) {
                                    if ($gi->kode_reg_gi_trans == $kode_reg) {
                                      $kode_gi = urlencode(base64_encode($gi->kode_gi_trans));
                                  ?>
                                      <li>
                                        <a href="<?php echo base_url('map/gardu_transmisi?kode=' . $kode_gi) ?>" style="float: right;" class="dropdown-item link"><b><?= $gi->nama_gi_trans; ?></b></a>
                                      </li>

                                  <?php
                                    }
                                  }
                                  ?>
                                </ul>
                              </li>
                              <li><a class="dropdown-item" href=""><b>Transmisi</b> <i class="fas fa-angle-right"></i></a>
                                <ul class="submenu dropdown-menu" style="overflow: scroll; height:10rem;">
                                  <?php
                                  $kode_reg = $reg->kode_reg;
                                  foreach ($transmisi as $trans) {
                                    if ($trans->kode_reg_trans == $kode_reg) {
                                      $kode_trans = urlencode(base64_encode($trans->kode_trans));
                                  ?>

                                      <li>
                                        <a href="<?php echo base_url('map/transmisi?kode=' . $kode_trans) ?>" style="float: right;" class="dropdown-item link"><b><?= $trans->nama_trans; ?></b></a>
                                      </li>
                                  <?php
                                    }
                                  }
                                  ?>
                                </ul>
                              </li>
                            </ul>
                          </li>

                        <?php
                        }
                        ?>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div> <!-- navbar-collapse.// -->

              <?php
              $jumlah_gi = 0;
              $jumlah_trans = 0;
              $panjang_trans = 0;
              $total_mva = 0;

              foreach ($bay as $bay) {
                if ($bay->jenis_bay == "Transformator 150" or $bay->jenis_bay == "IBT 275" or $bay->jenis_bay == "IBT 500") {
                  $total_mva = $total_mva + $bay->mva_bay;
                }
              }
              foreach ($gardu as $gi) {
                $jumlah_gi++;
              }

              foreach ($transmisi as $trans) {
                $jumlah_trans++;
                $panjang_trans = $panjang_trans + $trans->panjang_trans;
              }

              ?>

              <div class="btn-group dropleft float-right">
                <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Keterangan
                </button>
                <div class="dropdown-menu">
                  <table class="dropdown-item table table-borderless m-0">
                    <tr>
                      <td>Banyak Gardu Induk</td>
                      <td>:</td>
                      <td><b><?= number_format($jumlah_gi, 0, ",", "."); ?></b></td>
                      <td>Gardu</td>
                    </tr>
                    <tr>
                      <td>Total Kapasitas Gardu Induk</td>
                      <td>:</td>
                      <td><b><?= number_format($total_mva, 0, ",", "."); ?></b></td>
                      <td>MVA</td>
                    </tr>
                    <tr>
                      <td>Banyak Transmisi</td>
                      <td>:</td>
                      <td><b><?= number_format($jumlah_trans, 0, ",", "."); ?></b></td>
                      <td>Transmisi</td>
                    </tr>
                    <tr>
                      <td>Total Panjang Transmisi</td>
                      <td>:</td>
                      <td><b><?= number_format($panjang_trans, 3, ",", "."); ?></b></td>
                      <td>KMS</td>
                    </tr>
                  </table>
                </div>
              </div>

            <?php
            } elseif ($title == "Regional") {


              if (isset($_GET['kode'])) {
                $kode = base64_decode(urldecode($_GET['kode']));
              } elseif ($_POST['kode_regional']) {
                $kode = $_POST['kode_regional'];
              }

            ?>
              <div class="btn-group dropright float-left" id="main_nav">

                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <div class="btn-group dropright">
                      <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Search
                      </button>
                      <ul class="dropdown-menu">
                        <?php

                        foreach ($regional as $reg) {
                          if ($reg->kode_reg == $kode) {
                        ?>
                            <li><a class="dropdown-item" href="#"><b>Regional <?= $reg->nama_reg; ?></b> <i class="fas fa-angle-right"></i></a>
                              <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href=""><b>Gardu Induk</b> <i class="fas fa-angle-right"></i></a>
                                  <ul class="submenu dropdown-menu" style="overflow: scroll; height:10rem;">
                                    <?php
                                    foreach ($gardu as $gi) {
                                      if ($gi->kode_reg_gi_trans == $kode) {
                                        $kode_gi = urlencode(base64_encode($gi->kode_gi_trans));
                                    ?>
                                        <li>
                                          <a href="<?php echo base_url('map/gardu_transmisi?kode=' . $kode_gi) ?>" style="float: right;" class="dropdown-item link"><b><?= $gi->nama_gi_trans; ?></b></a>
                                        </li>
                                    <?php
                                      }
                                    }
                                    ?>
                                  </ul>
                                </li>
                                <li><a class="dropdown-item" href=""><b>Transmisi</b> <i class="fas fa-angle-right"></i></a>
                                  <ul class="submenu dropdown-menu" style="overflow: scroll; height:10rem;">
                                    <?php
                                    foreach ($transmisi as $trans) {
                                      if ($trans->kode_reg_trans == $kode) {
                                        $kode_trans = urlencode(base64_encode($trans->kode_trans));
                                    ?>
                                        <li>
                                          <a href="<?php echo base_url('map/transmisi?kode=' . $kode_trans) ?>" style="float: right;" class="dropdown-item link"><b><?= $trans->nama_trans; ?></b></a>
                                        </li>
                                    <?php
                                      }
                                    }
                                    ?>
                                  </ul>
                                </li>
                              </ul>
                            </li>

                        <?php
                          }
                        }
                        ?>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div> <!-- navbar-collapse.// -->

              <?php
              $jumlah_gi = 0;
              $jumlah_trans = 0;
              $jumlah_mva = 0;
              $panjang_trans = 0;
              foreach ($gardu as $gi) {
                if ($kode == $gi->kode_reg_gi_trans) {
                  $jumlah_gi++;
                  $kode_gi = $gi->kode_gi_trans;
                  foreach ($bay as $by) {
                    if ($by->kode_gi_trans_bay == $kode_gi) {
                      if ($by->jenis_bay == "Transformator 150" or $by->jenis_bay == "IBT 275" or $by->jenis_bay == "IBT 500") {
                        $jumlah_mva = $jumlah_mva + $by->mva_bay;
                      }
                    }
                  }
                }
              }

              foreach ($transmisi as $trans) {
                if ($kode == $trans->kode_reg_trans) {
                  $jumlah_trans++;
                  $panjang_trans = $panjang_trans + $trans->panjang_trans;
                }
              }

              ?>
              <div class="btn-group dropleft float-right">
                <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Keterangan
                </button>
                <div class="dropdown-menu">
                  <table class="dropdown-item table table-borderless m-0">
                    <tr>
                      <td>Banyak Gardu Induk</td>
                      <td>:</td>
                      <td><b><?= number_format($jumlah_gi, 0, ",", "."); ?></b></td>
                      <td>Gardu</td>
                    </tr>
                    <tr>
                      <td>Total Kapasitas Gardu Induk</td>
                      <td>:</td>
                      <td><b><?= number_format($jumlah_mva, 0, ",", "."); ?></b></td>
                      <td>MVA</td>
                    </tr>
                    <tr>
                      <td>Banyak Transmisi</td>
                      <td>:</td>
                      <td><b><?= number_format($jumlah_trans, 0, ",", "."); ?></b></td>
                      <td>Transmisi</td>
                    </tr>
                    <tr>
                      <td>Total Panjang Transmisi</td>
                      <td>:</td>
                      <td><b><?= number_format($panjang_trans, 3, ",", "."); ?></b></td>
                      <td>KMS</td>
                    </tr>
                  </table>
                </div>
              </div>

            <?php
            }
            ?>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">