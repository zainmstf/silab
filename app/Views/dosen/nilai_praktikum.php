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

<?= $this->extend('layouts/master/master_dsn') ?>

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
  $('.tglbayar').datetimepicker({
    format: 'YYYY-MM-DD'
  });
</script>
<script>
  $(document).ready(function() {
    $('#nim').change(function() {
      var nim = $('#nim').val();
      $.ajax({
        type: 'GET',
        url: '<?= base_url('dosen/nilaipraktikum/dataMahasiswa') ?>/' + nim,
        success: function(html) {
          $('#nama_mhs').html(html);
        }
      });
    });
  });

  $(document).ready(function() {
    $('#nim').change(function() {
      var nim = $('#nim').val();
      $.ajax({
        type: 'GET',
        url: '<?= base_url('dosen/nilaipraktikum/dataSemesterMhs') ?>/' + nim,
        success: function(html) {
          $('#semester').html(html);
        }
      });
    });
  });

  function getNilai() {
    var nilaimhs = $('#nilaimhs').val();
    var grade = document.getElementById('grademhs');
    var ketmhs = document.getElementById('ketmhs');
    if (nilaimhs > 80) {
      grade.value = "A";
      ketmhs.value = "Lulus";
    } else if (nilaimhs > 70) {
      grade.value = "B";
      ketmhs.value = "Lulus";
    } else if (nilaimhs > 60) {
      grade.value = "C";
      ketmhs.value = "Lulus";
    } else {
      grade.value = "D"
      ketmhs.value = "Tidak Lulus";
    }
  }

  function getNilai2() {
    key = $('.getnilai2').attr("data-key");
    var nilaimhs = $('#nilaimhs' + key).val();
    var grade = $('#grademhs' + key);
    var ketmhs = $('#ketmhs' + key);
    if (nilaimhs > 80) {
      grade.val('A');
      ketmhs.val('Lulus');
    } else if (nilaimhs > 70) {
      grade.val('B');
      ketmhs.val('Lulus');
    } else if (nilaimhs > 60) {
      grade.val('C');
      ketmhs.val('Lulus');
    } else {
      grade.val('D')
      ketmhs.val('Tidak Lulus');
    }
  }
</script>

<script>
  $('.nim2').attr('disabled', true);

  function enableSelect() {
    $('.nim2').attr('disabled', false);
  }
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Daftar Praktikum -->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Nilai Praktikum</h2>
        <div class="edit_data">
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah_nilai">Tambah</button>
          <!-- Modal Data Mahasiswa -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="tambah_nilai">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Tambah Nilai Praktikum</h4>
                </div>
                <?php echo form_open_multipart('dosen/nilaipraktikum/insertData') ?>
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
                        <input value="" type="text" name="nama_mhs" class="form-control" readonly>
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
                      <label class="col-md-3 col-xs-12" for="nama_dsn">Mata Kuliah</label>
                      <div class="col-md-9 col-xs-12">
                        <select name="id_matkul" class="form-control">
                          <?php foreach ($matkul as $key => $data) { ?>
                            <option value="<?= $data['id_matkul'] ?>"><?= $data['matkul'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="semster">Semester</label>
                      <div class="col-md-9 col-xs-12" id="semester">
                        <input type="text" name="semester" class="form-control" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="nilai">Nilai</label>
                      <div class="col-md-9 col-xs-12">
                        <input onkeyup="getNilai()" type="text" name="nilai" class="form-control" id="nilaimhs">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="grade">Grade</label>
                      <div class="col-md-9 col-xs-12">
                        <input type="text" name="grade" class="form-control" id="grademhs" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="keterangan">Keterangan</label>
                      <div class="col-md-9 col-xs-12">
                        <input type="text" name="keterangan" class="form-control" id="ketmhs" readonly>
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
            <!-- Modal Data Mahasiswa End -->
          </div>
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
              <th>Nilai</th>
              <th>Grade</th>
              <th>Keterangan</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
            foreach ($nilai as $key => $value) { ?>
              <tr>
                <td><?= $value['nim'] ?></td>
                <td><?= $value['nama_mhs'] ?></td>
                <td><?= $value['prodi'] ?></td>
                <td><?= $value['matkul'] ?></td>
                <td><?= $value['semester'] ?></td>
                <td><?= $value['nilai'] ?></td>
                <td><?= $value['grade'] ?></td>
                <td><?= $value['keterangan'] ?></td>
                <td>
                  <a href="#" data-toggle="modal" data-target="#edit<?= $value['id_nilai'] ?>">Edit</a>
                  <a href="#" data-toggle="modal" data-target="#delete<?= $value['id_nilai'] ?>">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <?php
      $no = 1;
      foreach ($nilai as $key => $value) {
        $no++; ?>
        <!-- Modal Data Praktikum -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="edit<?= $value['id_nilai'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit Nilai Praktikum</h4>
              </div>
              <?php echo form_open_multipart('dosen/nilaipraktikum/editData/' . $value['id_nilai']) ?>
              <div class="modal-body getnilai2" data-key="<?= $no ?>">
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nim">Nim</label>
                    <div class="col-md-9 col-xs-12">
                      <select name="nim" class="form-control nim2">
                        <option value="">-- Pilih Nim --</option>
                        <?php foreach ($mhs as $key => $data) { ?>
                          <option value="<?= $data['nim'] ?>" <?= ($data['nim'] == $value['nim']) ? "selected" : '' ?>><?= $data['nim'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nama_mhs">Nama Mahasiswa</label>
                    <div class="col-md-9 col-xs-12" id="nama_mhs">
                      <input value="<?= $value['nama_mhs'] ?>" type="text" name="nama_mhs" class="form-control" readonly>
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
                    <label class="col-md-3 col-xs-12" for="nama_dsn">Mata Kuliah</label>
                    <div class="col-md-9 col-xs-12">
                      <select name="id_matkul" class="form-control .nim2">
                        <?php foreach ($matkul as $key => $data) { ?>
                          <option value="<?= $data['id_matkul'] ?>" <?= ($data['id_matkul'] == $value['id_matkul']) ? "selected" : "" ?>><?= $data['matkul'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="semster">Semester</label>
                    <div class="col-md-9 col-xs-12" id="semester">
                      <input value="<?= $value['semester'] ?>" type="text" name="semester" class="form-control" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nilai">Nilai</label>
                    <div class="col-md-9 col-xs-12">
                      <input value="<?= $value['nilai'] ?>" onkeyup="getNilai2()" type="text" name="nilai" class="form-control" id="nilaimhs<?= $no ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="grade">Grade</label>
                    <div class="col-md-9 col-xs-12">
                      <input value="<?= $value['grade'] ?>" type="text" name="grade" class="form-control" id="grademhs<?= $no ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="keterangan">Keterangan</label>
                    <div class="col-md-9 col-xs-12">
                      <input value="<?= $value['keterangan'] ?>" type="text" name="keterangan" class="form-control" id="ketmhs<?= $no ?>" readonly>
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
      <?php foreach ($nilai as $key => $value) { ?>
        <!-- Modal Delete Mahasiswa -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="delete<?= $value['id_nilai'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Hapus Data Mahasiswa</h4>
              </div>
              <div class="modal-body">
                Apakah anda ingin menghapus Nilai praktikum dengan id nilai <b> <?= $value['id_nilai'] ?></b> ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="<?= base_url('dosen/nilaipraktikum/deleteData/' . $value['id_nilai']) ?>" class="btn btn-danger">Hapus</a>
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