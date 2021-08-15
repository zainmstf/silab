<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?= base_url('') ?>" class="site_title"><span><img src="<?= base_url('assets/img/logo_ui_long2.png') ?>" alt=""></span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="<?= base_url('images/userx.jpg') ?>" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2><?= session()->get('nama') ?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a href="<?= base_url('admin/dashboard') ?>"><i class="fa fa-home"></i> Home</a>
          </li>
          <li><a><i class="fa fa-edit"></i> Master Data <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="<?= ($activePage == 'datamahasiswa') ? 'active' : '' ?>"><a href="<?= base_url('admin/datamahasiswa') ?>">Data Mahasiswa</a>
              </li>
              <li class="<?= ($activePage == 'datadosen') ? 'active' : '' ?>"><a href="<?= base_url('admin/datadosen') ?>">Data Dosen</a>
              </li>
              <li class="<?= ($activePage == 'datamatkul') ? 'active' : '' ?>"><a href="<?= base_url('admin/datamatkul') ?>">Data Mata Kuliah</a>
              </li>
              <li class="<?= ($activePage == 'datapraktikum') ? 'active' : '' ?>"><a href="<?= base_url('admin/datapraktikum') ?>">Data Praktikum</a>
              </li>
              <li class="<?= ($activePage == 'datapengumuman') ? 'active' : '' ?>"><a href="<?= base_url('admin/datapengumuman') ?>">Data Pengumuman</a>
              </li>
            </ul>
          </li>
          <li><a><i class="fa fa-desktop"></i> Pendaftaran <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="<?= ($activePage == 'pendaftaran') ? 'active' : '' ?>"><a href="<?= base_url('admin/pendaftaran') ?>">Pendaftaran Praktikum</a>
              </li>
            </ul>
          </li>
          <li><a><i class="fa fa-table"></i> Penjadwalan Praktikum <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="<?= ($activePage == 'penjadwalan') ? 'active' : '' ?>"><a href="<?= base_url('admin/penjadwalan') ?>">Jadwal Mahasiswa</a>
              </li>
            </ul>
          </li>
          <li><a><i class="fa fa-bar-chart-o"></i> Laporan dan Nilai <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="<?= ($activePage == 'nilaipraktikum') ? 'active' : '' ?>"><a href="<?= base_url('admin/nilai_praktikum') ?>">Nilai Praktikum</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>