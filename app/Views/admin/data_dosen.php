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

<?= $this->extend('layouts/master/master_adm') ?>

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

  function getRandom() {
    var pwd_dsn = document.getElementById('pwd_dsn');
    pwd_dsn.value = Math.floor(1000 + Math.random() * 9000);
  }
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Daftar Praktikum -->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Dosen</h2>
        <div class="edit_data">
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah_dsn">Tambah</button>
          <!-- Modal Data Dosen -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="tambah_dsn">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Tambah Data Dosen</h4>
                </div>
                <?php echo form_open_multipart('admin/dataDosen/insertData') ?>
                <div class="modal-body">
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12">Foto</label>
                      <div class="col-md-9 col-xs-12">
                        <img src="<?= base_url('assets/gentelella/images/img.jpg') ?>" alt="">
                        <input type="file" id="img_edit" accept="image/*" name="foto">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="nidn">Nidn</label>
                      <div class="col-md-9 col-xs-12">
                        <input onkeyup="getRandom()" name="nidn" type="text" class="form-control" placeholder="Masukkan Nidn Dosen" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="namadsn">Nama Dosen</label>
                      <div class="col-md-9 col-xs-12">
                        <input type="text" name="namadsn" class="form-control" placeholder="Masukkan Nama Dosen" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="pwd_dsn">Password Dosen</label>
                      <div class="col-md-9 col-xs-12">
                        <input id="pwd_dsn" name="pwd_dsn" type="text" class="form-control" placeholder="" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="jekel">Jenis Kelamin</label>
                      <div class="col-md-9 col-xs-12">
                        <div class="radio">
                          <label>
                            <input name="jekel" type="radio" checked="" value="Laki-laki" name="optionsRadios"> Laki-laki
                          </label>
                          <label>
                            <input name="jekel" type="radio" value="Perempuan" name="optionsRadios"> Perempuan
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="email">Email</label>
                      <div class="col-md-9 col-xs-12">
                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="telp">telp</label>
                      <div class="col-md-9 col-xs-12">
                        <input name="telp" type="number" class="form-control" placeholder="Telp/HP" required>
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
          <!-- Modal Data Dosen End -->
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
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nidn</th>
              <th>Password</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Email</th>
              <th>Telp/HP</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php $no = 1;
            foreach ($dataDosen as $key => $value) { ?>
              <tr>
                <td><?= $value['nidn'] ?></td>
                <td><?= $value['pwd_dosen'] ?></td>
                <td><?= $value['nama_dosen'] ?></td>
                <td><?= $value['jenis_kelamin_dsn'] ?></td>
                <td><?= $value['email_dsn'] ?></td>
                <td><?= $value['telp_dsn'] ?></td>
                <td>
                  <a href="#" data-toggle="modal" data-target="#edit<?= $value['nidn'] ?>">Edit</a>
                  <a href="#" data-toggle="modal" data-target="#delete<?= $value['nidn'] ?>">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <?php foreach ($dataDosen as $key => $value) { ?>
        <!-- Modal Edit Dosen -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="edit<?= $value['nidn'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Dosen</h4>
              </div>
              <?php echo form_open_multipart('admin/dataDosen/editData/' . $value['nidn']) ?>
              <div class="modal-body">
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12">Foto</label>
                    <div class="col-md-9 col-xs-12">
                      <img src="<?= base_url('images') . '/' . $value['foto_dsn'] ?>" alt="" width="110px">
                      <input type="file" id="img_edit" accept="image/*" name="foto">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nim">Nim</label>
                    <div class="col-md-9 col-xs-12">
                      <input onkeyup="getRandom()" readonly value="<?= $value['nidn'] ?>" name="nidn" type="text" class="form-control" placeholder="Masukkan Nim Dosen" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="namadsn">Nama Dosen</label>
                    <div class="col-md-9 col-xs-12">
                      <input type="text" name="namadsn" value="<?= $value['nama_dosen'] ?>" class="form-control" placeholder="Masukkan Nama Dosen" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="pwd_dsn">Password Dosen</label>
                    <div class="col-md-9 col-xs-12">
                      <input id="pwd_dsn" name="pwd_dsn" value="<?= $value['pwd_dosen'] ?>" type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="jekel">Jenis Kelamin</label>
                    <div class="col-md-9 col-xs-12">
                      <div class="radio">
                        <label>
                          <input name="jekel" type="radio" value="Laki-laki" name="optionsRadios" <?php if ($value['jenis_kelamin_dsn'] == 'Laki-laki') : ?> checked="checked" <?php endif; ?>> Laki-laki
                        </label>
                        <label>
                          <input name="jekel" type="radio" value="Perempuan" name="optionsRadios" <?php if ($value['jenis_kelamin_dsn'] == 'Perempuan') : ?> checked="checked" <?php endif; ?>> Perempuan
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="email">Email</label>
                    <div class="col-md-9 col-xs-12">
                      <input name="email" type="email" class="form-control" placeholder="Email" required value="<?= $value['email_dsn'] ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="telp">telp</label>
                    <div class="col-md-9 col-xs-12">
                      <input name="telp" type="number" class="form-control" placeholder="Telp/HP" required value="<?= $value['telp_dsn'] ?>">
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
        <!-- Modal Data Dosen End -->
      <?php } ?>
      <?php foreach ($dataDosen as $key => $value) { ?>
        <!-- Modal Delete Dosen -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="delete<?= $value['nidn'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Hapus Data Mahasiswa</h4>
              </div>
              <div class="modal-body">
                Apakah anda ingin menghapus Dosen dengan nidn <b> <?= $value['nidn'] ?></b> ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/dataDosen/deleteData/' . $value['nidn']) ?>" class="btn btn-danger">Hapus</a>
              </div>
              <?php echo form_close() ?>
            </div>
          </div>
        </div>
        <!-- Modal Delete Dosen End -->
      <?php } ?>
    </div>
  </div>
</div>
<?= $this->endSection() ?>