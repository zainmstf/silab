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
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Daftar Praktikum -->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Mata Kuliah</h2>
        <div class="edit_data">
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah_matkul">Tambah</button>
          <!-- Modal Data Mahasiswa -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="tambah_matkul">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Tambah Data Mata Kuliah</h4>
                </div>
                <?php echo form_open_multipart('admin/dataMatkul/insertData') ?>
                <div class="modal-body">
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="kode_matkul">Kode Mata Kuliah</label>
                      <div class="col-md-9 col-xs-12">
                        <input name="kode_matkul" type="text" class="form-control" placeholder="Masukkan Kode Mata Kuliah" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="nama_matkul">Nama Mata Kuliah</label>
                      <div class="col-md-9 col-xs-12">
                        <input type="text" name="nama_matkul" class="form-control" placeholder="Masukkan Nama Mata Kuliah" required>
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
                      <label class="col-md-3 col-xs-12" for="sks">Sks</label>
                      <div class="col-md-9 col-xs-12">
                        <input name="sks" type="text" pattern="[0-9.]+" maxlength="2" class="form-control" placeholder="Masukkan Jumlah SKS" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="nama_dsn">Nama Dosen</label>
                      <div class="col-md-9 col-xs-12">
                        <select name="nama_dsn" class="form-control">
                          <?php foreach ($dsn as $key => $value) { ?>
                            <option value="<?= $value['nidn'] ?>"><?= $value['nama_dosen'] ?></option>
                          <?php } ?>
                        </select>
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
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Kode Matkul</th>
              <th>Nama Matkul</th>
              <th>Prodi</th>
              <th>Sks</th>
              <th>Nama Dosen</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
            foreach ($datamatkul as $key => $value) { ?>
              <tr>
                <td><?= $value['kode_matkul'] ?></td>
                <td><?= $value['matkul'] ?></td>
                <td><?= $value['prodi'] ?></td>
                <td><?= $value['sks'] ?></td>
                <td><?= $value['nama_dosen'] ?></td>
                <td>
                  <a href="#" data-toggle="modal" data-target="#edit<?= $value['id_matkul'] ?>">Edit</a>
                  <a href="#" data-toggle="modal" data-target="#delete<?= $value['id_matkul'] ?>">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <?php foreach ($datamatkul as $key => $value) { ?>
        <!-- Modal Edit Mahasiswa -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="edit<?= $value['id_matkul'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Mata Kuliah</h4>
              </div>
              <?php echo form_open_multipart('admin/dataMatkul/editData/' . $value['id_matkul']) ?>
              <div class="modal-body">
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="kode_matkul">Kode Mata Kuliah</label>
                    <div class="col-md-9 col-xs-12">
                      <input name="kode_matkul" type="text" class="form-control" value="<?= $value['kode_matkul'] ?>" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nama_matkul">Nama Mata Kuliah</label>
                    <div class="col-md-9 col-xs-12">
                      <input type="text" name="nama_matkul" class="form-control" value="<?= $value['matkul'] ?>" required>
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
                    <label class="col-md-3 col-xs-12" for="sks">Sks</label>
                    <div class="col-md-9 col-xs-12">
                      <input name="sks" type="text" pattern="[0-9.]+" maxlength="2" class="form-control" value="<?= $value['sks'] ?>" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nama_dsn">Nama Dosen</label>
                    <div class="col-md-9 col-xs-12">
                      <select name="nidn" class="form-control">
                        <?php foreach ($dsn as $key => $data) { ?>
                          <option value="<?= $data['nidn'] ?>" <?= ($data['nama_dosen'] == $value['nama_dosen']) ? "selected" : ''; ?>><?= $data['nama_dosen'] ?></option>
                        <?php } ?>
                      </select>
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
        <!-- Modal Edit Mahasiswa End -->
      <?php } ?>
      <?php foreach ($datamatkul as $key => $value) { ?>
        <!-- Modal Delete Mahasiswa -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="delete<?= $value['id_matkul'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Hapus Data Mata Kuliah</h4>
              </div>
              <div class="modal-body">
                Apakah anda ingin menghapus mata kuliah dengan id matkul <b> <?= $value['id_matkul'] ?></b> ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/dataMatkul/deleteData/' . $value['id_matkul']) ?>" class="btn btn-danger">Hapus</a>
              </div>
              <?php echo form_close() ?>
            </div>
          </div>
        </div>
        <!-- Modal Edit Mahasiswa End -->
      <?php } ?>
    </div>
  </div>
</div>
</div>
</div>
<?= $this->endSection() ?>