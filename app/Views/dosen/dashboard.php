<?= $this->section('head') ?>
<!-- iCheck -->
<link href="<?= base_url('assets/gentelella/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
<!-- bootstrap-progressbar -->
<?= $this->endSection() ?>

<?= $this->extend('layouts/master/master_dsn') ?>

<?= $this->section('foot') ?>
<!-- iCheck -->
<script src="<?= base_url('assets/gentelella/vendors/iCheck/icheck.min.js') ?>"></script>
<!-- Datatables -->
<script src="<?= base_url('assets/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/jszip/dist/jszip.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/pdfmake/build/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/pdfmake/build/vfs_fonts.js') ?>"></script>
<script>
  function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
<script>
  $(document).ready(function() {
    key = $('#jadwalpraktikum').attr('data-key');
    for (let index = 0; index <= key; index++) {
      var id_jadwal = $('.jadwal' + index).val(); //1
      var index2 = index - 1; //0
      var id_jadwal2 = $('.jadwal' + index2).val(); //0
      if (id_jadwal == id_jadwal2) { //if id_jadwal2 ==id_jadwal1
        $('.jadwalpraktikum' + index).hide();
      } else {
        $('.jadwalpraktikum' + index).show();
      }
    }
  })
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Daftar Praktikum -->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Dosen <small><?= session()->get('nama') ?> - <?= session()->get('username') ?></small></h2>
        <div class="edit_data">
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editdsn">Edit</button>
          <!-- Modal Data Mahasiswa -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="editdsn">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Edit Data Dosen</h4>
                </div>
                <?php echo form_open_multipart('dosen/dashboard/editData/' . session()->get('username')) ?>
                <div class="modal-body">
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12">Foto</label>
                      <div class="col-md-9 col-xs-12">
                        <img src="<?= base_url('images' . '/' . $datadsn['foto_dsn']) ?>" alt="">
                        <input type="file" id="img_edit" accept="image/*" name="foto">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="nidn">Nidn</label>
                      <div class="col-md-9 col-xs-12">
                        <input onkeyup="getRandom()" name="nidn" type="text" pattern="[0-9.]+" maxlength="10" class="form-control" placeholder="Masukkan Nim Mahasiswa" value="<?= $datadsn['nidn'] ?>" readonly required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="namadsn">Nama Dosen</label>
                      <div class="col-md-9 col-xs-12">
                        <input type="text" name="namadsn" class="form-control" placeholder="Masukkan Nama Mahasiswa" value="<?= $datadsn['nama_dosen'] ?>" readonly required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="pwd_dsn">Password Dosen</label>
                      <div class="col-md-9 col-xs-12">
                        <input id="password" name="pwd_dsn" type="password" class="form-control" placeholder="Password tergenerator otomatis" value="<?= $datadsn['pwd_dosen'] ?>">
                        <div class="show_password">
                          <input type="checkbox" onclick="myFunction()"><span>Show Password </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="jekel">Jenis Kelamin</label>
                      <div class="col-md-9 col-xs-12">
                        <div class="radio">
                          <label>
                            <input name="jekel" type="radio" <?= ($datadsn['jenis_kelamin_dsn'] == 'Laki-laki') ? "checked" : '' ?> value="Laki-laki" name="optionsRadios"> Laki-laki
                          </label>
                          <label>
                            <input name="jekel" type="radio" <?= ($datadsn['jenis_kelamin_dsn'] == 'Perempuan') ? "checked" : '' ?> value="Perempuan" name="optionsRadios"> Perempuan
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="email">Email</label>
                      <div class="col-md-9 col-xs-12">
                        <input name="email" type="email" class="form-control" placeholder="Email" value="<?= $datadsn['email_dsn'] ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="telp">telp</label>
                      <div class="col-md-9 col-xs-12">
                        <input name="telp" type="text" pattern="[0-9.]+" maxlength="10" class="form-control" placeholder="Telp/HP" value="<?= $datadsn['telp_dsn'] ?>" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                <?php echo form_close() ?>
              </div>
            </div>
          </div>
          <!-- Modal Data Mahasiswa End -->
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <?php
        if (session()->getFlashdata('tambah')) {
          echo '<div class="alert alert-success alert-dismissible fade in">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close" aria-hidden="true">
          <span aria-hidden="true">×</span></button><h5>';
          echo session()->getFlashdata('tambah');
          echo '</h5>
          </div>';
        } ?>

        <?php
        if (session()->getFlashdata('edit')) {
          echo '<div class="alert alert-success alert-dismissible fade in">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close" aria-hidden="true">
          <span aria-hidden="true">×</span></button><h5>';
          echo session()->getFlashdata('edit');
          echo '</h5>
          </div>';
        } ?>
        <?php
        if (session()->getFlashdata('delete')) {
          echo '<div class="alert alert-danger alert-dismissible fade in">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close" aria-hidden="true">
          <span aria-hidden="true">×</span></button><h5>';
          echo session()->getFlashdata('delete');
          echo '</h5>
          </div>';
        } ?>
        <table class="table table-striped">
          <tbody>
            <tr>
              <th scope="row">Foto</th>
              <th><img src="<?= base_url('images') . '/' . $datadsn['foto_dsn'] ?>" alt=""></th>
            </tr>
            <tr>
              <th scope="row">Nim</th>
              <th><?= $datadsn['nidn'] ?></th>
            </tr>
            <tr>
              <th scope="row">Password</th>
              <th>****</th>
            </tr>
            <tr>
              <th scope="row">Nama</th>
              <th><?= $datadsn['nama_dosen'] ?></th>
            </tr>
            <tr>
              <th scope="row">Jenis Kelamin</th>
              <th><?= $datadsn['jenis_kelamin_dsn'] ?></th>
            </tr>
            <tr>
              <th scope="row">Email</th>
              <th><?= $datadsn['email_dsn'] ?></th>
            </tr>
            <tr>
              <th scope="row">Telp/Hp</th>
              <th><?= $datadsn['telp_dsn'] ?></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Pengumaman -->
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Pengumuman</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="dashboard-widget-content">

            <ul class="list-unstyled timeline widget">
              <?php foreach ($datapengumuman as $key => $value) { ?>
                <li>
                  <div class="block">
                    <div class="block_content">
                      <h2 class="title">
                        <a><?= $value['judul'] ?></a>
                      </h2>
                      <div class="byline">
                        <span><?= $value['tanggal'] . ' ' . $value['waktu'] ?></span> by <a><?= $value['penulis'] ?></a>
                      </div>
                      <p class="excerpt"><?= $value['isi'] ?></a>
                      </p>
                    </div>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Pengumuman End -->

    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Jadwal Dosen</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <div class="">
            <ul class="to_do">
              <?php
              $no = 0;
              foreach ($jadwal as $key => $value) {
                $no++; ?>
                <li id="jadwalpraktikum" class="jadwalpraktikum<?= $no ?>" data-key='<?= $no ?>'>
                  <p>
                    <input type="checkbox" class="flat jadwal<?= $value['id_jadwal'] ?>" <?= ($value['tgl_pelak'] >  date('Y-m-d'))  ? "checked" : "" ?>> <?= $value['matkul'] . ' ' . $value['ruang'] . ' - ' . date("l, d F Y", strtotime($value['tgl_pelak'])) . ' ' . $value['waktu'] ?>
                  </p>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Jadwal Dosen End -->
  </div>
</div>
<?= $this->endSection() ?>