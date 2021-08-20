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
  $('.tgl_pelaksanaan').datetimepicker({
    format: 'YYYY-MM-DD'
  });

  $('.waktu_pelaksanaan').datetimepicker({
    format: 'HH:mm'
  });

  $(document).ready(function() {
    $('#nim').change(function() {
      var nim = $('#nim').val();
      $.ajax({
        type: 'GET',
        url: '<?= base_url('admin/penjadwalan/dataMahasiswa') ?>/' + nim,
        success: function(html) {
          $('#nama_mhs').html(html);
        }
      });
    });
  });

  $(document).ready(function() {
    $('#id_jadwal').change(function() {
      var getNidn = $('#id_jadwal').val();
      $.ajax({
        type: 'GET',
        url: '<?= base_url('admin/penjadwalan/dataDosen') ?>/' + getNidn,
        success: function(html) {
          $('#namadsn').html(html);
        }
      });
    });
  });

  $(document).ready(function() {
    $('.id_matkul').change(function() {
      var id_matkul = $('.id_matkul').val();
      $.ajax({
        type: 'GET',
        url: '<?= base_url('admin/penjadwalan/dataMatkul') ?>/' + id_matkul,
        success: function(html) {
          $('.id_jadwal').html(html);
        }
      });
    });
  });

  $(document).ready(function() {
    $('.id_matkul2').mouseover(function() {
      var key = $(this).attr('data-key');
      var id_matkul2 = $('#id_matkul' + key).val();
      $.ajax({
        type: 'GET',
        url: '<?= base_url('admin/penjadwalan/dataMatkul') ?>/' + id_matkul2,
        success: function(html) {
          $('#id_jadwal' + key).html(html);
        }
      });
    });
  });

  $('.nim2').attr('disabled', true);

  function enableSelect() {
    $('.nim2').attr('disabled', false);
  }

  $(document).ready(function() {
    $('.id_jadwal2').mouseover(function() {
      var key = $(this).attr('data-key');
      var id_jadwal2 = $('#id_jadwal' + key).val();
      $.ajax({
        type: 'GET',
        url: '<?= base_url('admin/penjadwalan/dataDosen') ?>/' + id_jadwal2,
        success: function(html) {
          $('#namadsn' + key).html(html);
        }
      });
    });
  });



  $('#waktu_pelaksanaan').datetimepicker({
    format: 'HH:mm A'
  });
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Daftar Praktikum -->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Penjadwalan Mahasiswa</h2>
        <div class="edit_data">
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah_jadwal">Tambah</button>
          <!-- Modal Data Mahasiswa -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="tambah_jadwal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Tambah Jadwal Praktikum Mahasiswa</h4>
                </div>
                <?php echo form_open_multipart('admin/penjadwalan/insertData') ?>
                <div class="modal-body">
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="nim">Nim</label>
                      <div class="col-md-9 col-xs-12">
                        <select id="nim" name="nim" class="form-control">
                          <option value="">-- Pilih Nim --</option>
                          <?php foreach ($mhs as $key => $value) { ?>
                            <option value="<?= $value['nim'] ?>"><?= $value['nim'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="nama_mhs">Nama Mahasiswa</label>
                      <div class="col-md-9 col-xs-12" id="nama_mhs">
                        <input type="text" name="nama_mhs" class="form-control" readonly>
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
                      <label class="col-md-3 col-xs-12" for="id_matkul">Mata Kuliah</label>
                      <div class="col-md-9 col-xs-12">
                        <select name="id_matkul" class="form-control id_matkul">
                          <option value="">-- Pilih Matkul --</option>
                          <?php foreach ($matkul as $key => $value) { ?>
                            <option value="<?= $value['id_matkul'] ?>"><?= $value['matkul'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="id_jadwal">Jadwal</label>
                      <div class="col-md-9 col-xs-12">
                        <select name="id_jadwal" class="form-control id_jadwal" id="id_jadwal">
                          <option value="">-- Pilih Jadwal --</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="nama_dsn">Nama Dosen</label>
                      <div class="col-md-9 col-xs-12" id="namadsn">
                        <input type="text" name="" class="form-control" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Waktu Pelaksanaan </label>
                      <div class='col-md-9 col-xs-12 input-group date waktu_pelaksanaan'>
                        <input name="waktu" type='text' class="form-control" />
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
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
              <th>Nim</th>
              <th>Nama Mahasiswa</th>
              <th>Program Studi</th>
              <th>Mata Kuliah</th>
              <th>Semester</th>
              <th>Tahun</th>
              <th>Kelompok</th>
              <th>Ruang</th>
              <th>Tgl Pelaksanaan</th>
              <th>Pukul</th>
              <th>Nama Dosen</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
            foreach ($penjadwalan as $key => $value) { ?>
              <tr>
                <td><?= $value['nim'] ?></td>
                <td><?= $value['nama_mhs'] ?></td>
                <td><?= $value['prodi'] ?></td>
                <td><?= $value['matkul'] ?></td>
                <td><?= $value['semester'] ?></td>
                <td><?= $value['tahun'] ?></td>
                <td><?= $value['kelompok'] ?></td>
                <td><?= $value['ruang'] ?></td>
                <td><?= date("l, d F Y", strtotime($value['tgl_pelak'])) ?></td>
                <td><?= $value['waktu'] ?></td>
                <td><?= $value['nama_dosen'] ?></td>
                <td>
                  <a href="#" data-toggle="modal" data-target="#edit<?= $value['id_jadwal_mhs'] ?>">Edit</a>
                  <a href="#" data-toggle="modal" data-target="#delete<?= $value['id_jadwal_mhs'] ?>">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <?php
      $no = 1;
      foreach ($penjadwalan as $key => $value) { ?>
        <!-- Modal Data Mahasiswa -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="edit<?= $value['id_jadwal_mhs'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit Jadwal Praktikum Mahasiswa</h4>
              </div>
              <?php echo form_open_multipart('admin/penjadwalan/editData/' . $value['id_jadwal_mhs']) ?>
              <div class="modal-body">
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nim">Nim</label>
                    <div class="col-md-9 col-xs-12">
                      <select id="nim2" name="nim" class="form-control nim2">
                        <option value="">-- Pilih Nim --</option>
                        <?php foreach ($mhs as $key => $data) { ?>
                          <option value="<?= $data['nim'] ?>" <?= ($data['nim'] == $value['nim']) ? "selected" : "" ?>><?= $value['nim'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nama_mhs">Nama Mahasiswa</label>
                    <div class="col-md-9 col-xs-12" id="nama_mhs">
                      <input type="text" value="<?= $value['nama_mhs'] ?>" name="nama_mhs" class="form-control" readonly>
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
                    <label class="col-md-3 col-xs-12" for="id_matkul">Mata Kuliah</label>
                    <div class="col-md-9 col-xs-12">
                      <select name="id_matkul" class="form-control matkul id_matkul2" id="id_matkul<?= $no ?>" data-key="<?= $no ?>">
                        <option value="">-- Pilih Matkul --</option>
                        <?php foreach ($matkul as $key => $data) { ?>
                          <option value="<?= $data['id_matkul'] ?>" <?= ($data['id_matkul'] == $value['id_matkul']) ? "selected" : "" ?>><?= $data['matkul'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="id_jadwal">Jadwal</label>
                    <div class="col-md-9 col-xs-12">
                      <select name="id_jadwal" class="form-control id_jadwal2" id="id_jadwal<?= $no ?>" data-key="<?= $no ?>">>
                        <option value="" selected>-- Pilih Jadwal --</option>
                        <?php foreach ($jadwal as $key => $data) { ?>
                          <option value="<?= $data['id_jadwal'] ?>" <?= ($data['id_jadwal'] == $value['id_jadwal']) ? "selected" : "" ?>><?= $data['matkul'] . ' ' .  $value['ruang'] . ' - ' . date("l, d F Y", strtotime($value['tgl_pelak'])) ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nama_dsn">Nama Dosen</label>
                    <div class="col-md-9 col-xs-12" id="namadsn<?= $no ?>">
                      <input value="" type="text" name="namadosen" class="form-control" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Waktu Pelaksanaan </label>
                    <div class='col-md-9 col-xs-12 input-group date waktu_pelaksanaan'>
                      <input value="<?= $value['waktu'] ?>" name="waktu" type='text' class="form-control" />
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" onclick="enableSelect()">Simpan</button>
              </div>
              <?php echo form_close() ?>
            </div>
          </div>
        </div>
        <!-- Modal Data Mahasiswa End -->
      <?php $no++;
      } ?>
      <?php foreach ($penjadwalan as $key => $value) { ?>
        <!-- Modal Delete Mahasiswa -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="delete<?= $value['id_jadwal_mhs'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Hapus Jadwal Praktikum Mahasiswa</h4>
              </div>
              <div class="modal-body">
                Apakah anda ingin menghapus jadawl praktikum mahasiswa dengan dengan id <b> <?= $value['id_jadwal_mhs'] ?></b> ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/penjadwalan/deleteData/' . $value['id_jadwal_mhs']) ?>" class="btn btn-danger">Hapus</a>
              </div>
              <?php echo form_close() ?>
            </div>
          </div>
        </div>
        <!-- Modal Edit Mahasiswa End -->
      <?php
      } ?>
    </div>
  </div>
</div>
<?= $this->endSection() ?>