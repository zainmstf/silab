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
  $('#tgl_daftar').datetimepicker({
    format: 'YYYY-MM-DD'
  });

  $('#tgl_bayar').datetimepicker({
    format: 'YYYY-MM-DD'
  });
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Daftar Praktikum -->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Pendaftaran Praktikum</h2>
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
              <th>Nim</th>
              <th>Tgl Daftar</th>
              <th>Mata Kuliah</th>
              <th>Biaya</th>
              <th>Tgl Bayar</th>
              <th>Keterangan</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
            foreach ($pendaftaran as $key => $value) { ?>
              <tr>
                <td><?= $value['nim'] ?></td>
                <td><?= $value['prodi'] ?></td>
                <td><?= $value['matkul'] ?></td>
                <td><?= $value['biaya'] ?></td>
                <td><?= date("l, d F Y", strtotime($value['tgl_bayar'])) ?></td>
                <td><?= $value['ket_bayar'] ?></td>
                <td>
                  <a href="#" data-toggle="modal" data-target="#edit<?= $value['id_pendaftaran'] ?>">Edit</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <?php foreach ($pendaftaran as $key => $value) { ?>
        <!-- Modal Data Praktikum -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="edit<?= $value['id_pendaftaran'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit Pendaftaran</h4>
              </div>
              <?php echo form_open_multipart('admin/pendaftaran/editData/' . $value['id_pendaftaran']) ?>
              <div class="modal-body">
                <div class="form-group">
                  <div class="row">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Daftar </label>
                    <div class='col-md-9 col-xs-12 input-group date tgl_daftar'>
                      <input value="<?= $value['tgl_daftar'] ?>" name="tgl_daftar" type='text' class="form-control" readonly />
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nim">Nim</label>
                    <div class="col-md-9 col-xs-12">
                      <input type="text" name="nim" class="form-control" value="<?= $value['nim'] ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nama_mhs">Nama Mahasiswa</label>
                    <div class="col-md-9 col-xs-12">
                      <input type="text" name="nama_mhs" class="form-control" value="<?= $value['nama_mhs'] ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="prodi">Program Studi</label>
                    <div class="col-md-9 col-xs-12">
                      <select name="prodi" class="form-control" disabled>
                        <option>Teknik Informatika</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="semester">Semester</label>
                    <div class="col-md-9 col-xs-12">
                      <input type="text" name="semester" class="form-control" value="<?= $value['semester'] ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="id_matkul">Mata Kuliah</label>
                    <div class="col-md-9 col-xs-12">
                      <select name="id_matkul" class="form-control" disabled>
                        <?php foreach ($matkul as $key => $data) { ?>
                          <option value="<?= $data['id_matkul'] ?>" <?= ($data['matkul'] == $value['matkul']) ? "selected" : ''; ?>><?= $data['matkul'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="biaya">Biaya</label>
                    <div class="col-md-9 col-xs-12">
                      <input type="text" name="biaya" class="form-control" value="<?= $value['biaya'] ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Bayar </label>
                    <div class='col-md-9 col-xs-12 input-group date tgl_bayar'>
                      <input value="<?= $value['tgl_bayar'] ?>" name="tgl_bayar" type='text' class="form-control" readonly />
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="ruang">Nominal Transfer</label>
                    <div class="col-md-9 col-xs-12">
                      <input type="text" name="biaya" class="form-control" value="<?= $value['nominal_bayar'] ?>" placeholder="Masukkan Ruang" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12">Bukti Transfer</label>
                    <div class="col-md-9 col-xs-12">
                      <img src="<?= base_url('images/bukti') . '/' . $value['bukti_bayar'] ?>" alt="" width="110px">
                      <a href="<?= base_url('images/bukti') . '/' . $value['bukti_bayar'] ?>" download>Link Download</a>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="ket_bayar">Validasi</label>
                    <div class="col-md-9 col-xs-12">
                      <select name="ket_bayar" class="form-control">
                        <option value="Sudah Validasi" <?= ($value['ket_bayar'] == 'Sudah Validasi') ? "selected" : ''; ?>>Sudah Valiidasi</option>
                        <option value="Belum Validasi" <?= ($value['ket_bayar'] == 'Belum Validasi') ? "selected" : ''; ?>>Belum Valiidasi</option>
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
    </div>
  </div>
</div>
<?= $this->endSection() ?>