<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

$routes->get('/', 'Auth::index');
$routes->get('admin/', 'Auth::login_user');
$routes->get('dosen/', 'Auth::login_dsn');
$routes->get('auth/logout', 'Auth::logout');

// Mahasiswa

$routes->get('mahasiswa/', 'Mahasiswa/Dashboard::index');
$routes->get('mahasiswa/daftarpraktikum', 'Mahasiswa/DaftarPraktikum::index');
$routes->get('mahasiswa/jadwalpraktikum', 'Mahasiswa/JadwalPraktikum::index');
$routes->get('mahasiswa/jadwalpraktikum', 'Mahasiswa/NilaiPraktikum::index');

//Dosen

$routes->get('dosen/dashboard', 'Dosen/Dashboard::index');
$routes->get('dosen/jadwalpraktikum', 'Dosen/JadwalPraktikum::index');
$routes->get('dosen/nilaipraktikum', 'Dosen/NilaiPraktikum::index');

// Admin

$routes->get('admin/dashboard', 'Admin/Dashboard::index');
$routes->get('admin/datamahasiswa', 'Admin/DataMahasiswa::index');
$routes->get('admin/datadosen', 'Admin/DataDosen::index');
$routes->get('admin/datamatkul', 'Admin/DataMatkul::index');
$routes->get('admin/datapraktikum', 'Admin/DataPraktikum::index');
$routes->get('admin/datapengumuman', 'Admin/DataPengumuman::index');
$routes->get('admin/pendaftaran', 'Admin/Pendaftaran::index');
$routes->get('admin/penjadwalan', 'Admin/Penjadwalan::index');
$routes->get('admin/nilai_praktikum', 'Admin/NilaiPraktikum::index');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
