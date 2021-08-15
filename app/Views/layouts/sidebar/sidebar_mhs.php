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
        <img src="<?= base_url('images') . '/' . session()->get('foto') ?>" alt="..." class="img-circle profile_img">
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
          <li class="<?= ($activePage == 'dashboard') ? 'active' : '' ?>"><a href="<?= base_url('mahasiswa/') ?>"><i class="fa fa-home"></i> Home</a>
          </li>
          <li class="<?= ($activePage == 'daftarpraktikum') ? 'active' : '' ?>"><a href="<?= base_url('mahasiswa/daftarpraktikum') ?>"><i class="fa fa-edit"></i> Daftar Praktikum </a>
          </li>
          <li class="<?= ($activePage == 'jadwalpraktikum') ? 'active' : '' ?>"><a href="<?= base_url('mahasiswa/jadwalpraktikum') ?>"><i class="fa fa-desktop"></i> Jadwal Praktikum </a>
          </li>
          <li class="<?= ($activePage == 'nilaipraktikum') ? 'active' : '' ?>"><a href="<?= base_url('mahasiswa/nilaipraktikum') ?>"><i class="fa fa-table"></i> Nilai Praktikum </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>