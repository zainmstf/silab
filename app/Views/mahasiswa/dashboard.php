<?= $this->section('head') ?>
<!-- iCheck -->
<link href="<?= base_url('assets/gentelella/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="<?= base_url('assets/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">
<!-- JQVMap -->
<link href="<?= base_url('assets/gentelella/vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet" />
<!-- bootstrap-daterangepicker -->
<link href="<?= base_url('assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link href="<?= base_url('assets/gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') ?>" rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link href="<?= base_url('assets/gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') ?>" rel="stylesheet">
<!-- Dropzone.js -->
<link href="<?= base_url('assets/gentelella/vendors/dropzone/dist/min/dropzone.min.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->extend('layouts/master/master_mhs') ?>

<?= $this->section('foot') ?>
<!-- iCheck -->
<script src="<?= base_url('assets/gentelella/vendors/iCheck/icheck.min.js') ?>"></script>
<!-- Skycons -->
<script src="<?= base_url('assets/gentelella/vendors/skycons/skycons.js') ?>"></script>
<!-- DateJS -->
<script src="<?= base_url('assets/gentelella/vendors/DateJS/build/date.js') ?>"></script>
<!-- Flot -->
<script src="<?= base_url('assets/gentelella/vendors/Flot/jquery.flot.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/Flot/jquery.flot.pie.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/Flot/jquery.flot.time.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/Flot/jquery.flot.stack.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/Flot/jquery.flot.resize.js') ?>"></script>
<!-- Flot plugins -->
<script src="<?= base_url('assets/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/flot.curvedlines/curvedLines.js') ?>"></script>
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
<!-- bootstrap-daterangepicker -->
<script src="<?= base_url('assets/gentelella/vendors/moment/min/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<!-- bootstrap-datetimepicker -->
<script src="<?= base_url('assets/gentelella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') ?>"></script>
<!-- jquery.inputmask -->
<script src="<?= base_url('assets/gentelella/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') ?>"></script>
<!-- Dropzone.js -->
<script src="<?= base_url('assets/gentelella/vendors/dropzone/dist/min/dropzone.min.js') ?>"></script>
<script>
  $('#myDatepicker2').datetimepicker({
    format: 'DD.MM.YYYY'
  });

  function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Daftar Praktikum -->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Mahasiswa <small><?= session()->get('nama') ?> - <?= session()->get('username') ?></small></h2>
        <div class="edit_data">
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editmhs">Edit</button>
          <!-- Modal Data Mahasiswa -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="editmhs">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Tambah Data Mahasiswa</h4>
                </div>
                <?php echo form_open_multipart('mahasiswa/dashboard/editData/' . session()->get('username')) ?>
                <div class="modal-body">
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12">Foto</label>
                      <div class="col-md-9 col-xs-12">
                        <img src="<?= base_url('images' . '/' . $datamhs['foto_mhs']) ?>" alt="">
                        <input type="file" id="img_edit" accept="image/*" name="foto">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="nim">Nim</label>
                      <div class="col-md-9 col-xs-12">
                        <input onkeyup="getRandom()" name="nim" type="text" pattern="[0-9.]+" maxlength="10" class="form-control" placeholder="Masukkan Nim Mahasiswa" value="<?= $datamhs['nim'] ?>" readonly required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="namamhs">Nama Mahasiswa</label>
                      <div class="col-md-9 col-xs-12">
                        <input type="text" name="namamhs" class="form-control" placeholder="Masukkan Nama Mahasiswa" value="<?= $datamhs['nama_mhs'] ?>" readonly required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="pwd_mhs">Password Mahasiswa</label>
                      <div class="col-md-9 col-xs-12">
                        <input id="pwd_mhs" name="pwd_mhs" type="text" class="form-control" placeholder="Password tergenerator otomatis" value="<?= $datamhs['pwd_mhs'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="jekel">Jenis Kelamin</label>
                      <div class="col-md-9 col-xs-12">
                        <div class="radio">
                          <label>
                            <input name="jekel" type="radio" <?= ($datamhs['jenis_kelamin_mhs'] == 'Laki-laki') ? "checked" : '' ?> value="Laki-laki" name="optionsRadios"> Laki-laki
                          </label>
                          <label>
                            <input name="jekel" type="radio" <?= ($datamhs['jenis_kelamin_mhs'] == 'Perempuan') ? "checked" : '' ?> value="Perempuan" name="optionsRadios"> Perempuan
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="prodi">Program Studi</label>
                      <div class="col-md-9 col-xs-12">
                        <select name="prodi" class="form-control">
                          <option>Teknik Informatika</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="semester">Semester</label>
                      <div class="col-md-9 col-xs-12">
                        <input name="semester" type="text" pattern="[0-9.]+" maxlength="2" class="form-control" placeholder="Semester" value="<?= $datamhs['semester'] ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="semester">Kelas</label>
                      <div class="col-md-9 col-xs-12">
                        <select name="kelas" class="form-control">
                          <option value="Pagi" <?= ($datamhs['kelas'] == 'Pagi') ? "selected" : '' ?>>Pagi</option>
                          <option value="Sore" <?= ($datamhs['kelas'] == 'Sore') ? "selected" : '' ?>>Sore</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="email">Email</label>
                      <div class="col-md-9 col-xs-12">
                        <input name="email" type="email" class="form-control" placeholder="Email" value="<?= $datamhs['email_mhs'] ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="telp">telp</label>
                      <div class="col-md-9 col-xs-12">
                        <input name="telp" type="text" pattern="[0-9.]+" maxlength="10" class="form-control" placeholder="Telp/HP" value="<?= $datamhs['telp_mhs'] ?>" required>
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
              <th><img src="<?= base_url('images') . '/' . $datamhs['foto_mhs'] ?>" alt=""></th>
            </tr>
            <tr>
              <th scope="row">Nim</th>
              <th><?= $datamhs['nim'] ?></th>
            </tr>
            <tr>
              <th scope="row">Password</th>
              <th>****</th>
            </tr>
            <tr>
              <th scope="row">Nama</th>
              <th><?= $datamhs['nama_mhs'] ?></th>
            </tr>
            <tr>
              <th scope="row">Jenis Kelamin</th>
              <th><?= $datamhs['jenis_kelamin_mhs'] ?></th>
            </tr>
            <tr>
              <th scope="row">Prodi</th>
              <th><?= $datamhs['prodi'] ?></th>
            </tr>
            <tr>
              <th scope="row">Semester</th>
              <th><?= $datamhs['semester'] ?></th>
            </tr>
            <tr>
              <th scope="row">Email</th>
              <th><?= $datamhs['email_mhs'] ?></th>
            </tr>
            <tr>
              <th scope="row">Telp/Hp</th>
              <th><?= $datamhs['telp_mhs'] ?></th>
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
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                    </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                    </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                    </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                    </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Pengumuman End -->

    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Jadwal Mahasiswa</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <div class="">
            <ul class="to_do">
              <li>
                <p>
                  <input type="checkbox" class="flat" disabled checked> Schedule meeting with new client
                </p>
              </li>
              <li>
                <p>
                  <input type="checkbox" class="flat" disabled> Create email address for new intern
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Jadwal Mahasiswa End -->
  </div>
  <?= $this->endSection() ?>