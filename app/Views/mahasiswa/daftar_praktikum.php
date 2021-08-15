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
  $('.tglbayar').datetimepicker({
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
        <h2>Pendaftaran Praktikum</h2>
        <div class="edit_data">
          <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah_praktikum">Daftar Praktikum</button>
          <!-- Modal Data Mahasiswa -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="tambah_praktikum">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Tambah Data Praktikum</h4>
                </div>
                <?php echo form_open_multipart('mahasiswa/daftarpraktikum/insertData') ?>
                <div class="modal-body">
                  <div class="detail_rekening">
                    <h3>Silahkan melakukan pembayaran ke nomor :</h3>
                    <p>Rekening BNI</p>
                    <table>
                      <tbody>
                        <tr>
                          <td style="min-width: 150px;">No Rek</td>
                          <td style="min-width: 10px;">:</td>
                          <th style="min-width: 50px;">071842xxx</th>
                        </tr>
                        <tr>
                          <td style="min-width: 150px;">Atas nama</td>
                          <td style="min-width: 10px;">:</td>
                          <th style="min-width: 50px;">Fakultas Teknik Unitomo</th>
                        </tr>
                        <tr>
                          <td style="min-width: 150px;">Sebesar </td>
                          <td style="min-width: 10px;">:</td>
                          <th style="min-width: 50px;">Rp. 150.000</th>
                        </tr>
                      </tbody>
                    </table>
                    <p>Apabila anda sudah melakukan pembayaran, segera upload bukti pembayaran di bawah ini :</p>
                  </div>
                  <br>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="nim">Nim</label>
                      <div class="col-md-9 col-xs-12">
                        <input name="nim" type="text" class="form-control" placeholder="Masukkan Nim Mahasiswa" value="<?= session()->get('username') ?>" readonly required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="namamhs">Nama Mahasiswa</label>
                      <div class="col-md-9 col-xs-12">
                        <input name="namamhs" type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa" value="<?= session()->get('nama') ?>" readonly required>
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
                          <?php foreach ($matkul as $key => $value) { ?>
                            <option value="<?= $value['id_matkul'] ?>"><?= $value['matkul'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Pembayaran </label>
                      <div class='col-md-9 col-xs-12 input-group date tglbayar'>
                        <input value="" name="tgl_bayar" type='text' class="form-control" />
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12" for="nominal">Nominal Bayar</label>
                      <div class="col-md-9 col-xs-12">
                        <input value="0" name="nominal" type="text" class="form-control" data-inputmask="'mask': '999.999'" id="nominal_bayar">
                        <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-3 col-xs-12">Bukti Pembayaran</label>
                      <div class="col-md-9 col-xs-12">
                        <h5 class="upload_bukti_note"><strong>Silahkan Upload file (JPG) bukti pembayaran, ukuran tidak lebih dari 2mb</strong></h5>
                        <div class="x_panel">
                          <div class="x_content">
                            <input type="file" class="pilih_file" accept="image/*" name="foto">
                            <br />
                            <br />
                          </div>
                        </div>
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
              <th>Tanggal Daftar</th>
              <th>Mata Kuliah</th>
              <th>Biaya</th>
              <th>Tanggal Bayar</th>
              <th>Keterangan</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
            foreach ($daftarpraktikum as $key => $value) { ?>
              <tr>
                <td><?= $value['tgl_daftar'] ?></td>
                <td><?= $value['matkul'] ?></td>
                <td><?= $value['biaya'] ?></td>
                <td><?= ($value['tgl_bayar'] == "0000-00-00") ? "Belum Bayar" : $value['tgl_bayar'] ?></td>
                <td><?= $value['ket_bayar'] ?></td>
                <td>
                  <a href="#" data-toggle="modal" data-target="#edit<?= $value['id_pendaftaran'] ?>">Edit</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <?php foreach ($daftarpraktikum as $key => $value) { ?>
        <!-- Modal Data Praktikum -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="edit<?= $value['id_pendaftaran'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit Pendaftaran Praktikum</h4>
              </div>
              <?php echo form_open_multipart('mahasiswa/daftarpraktikum/editData/' . $value['id_pendaftaran']) ?>
              <div class="modal-body">
                <div class="detail_rekening">
                  <h3>Silahkan melakukan pembayaran ke nomor :</h3>
                  <p>Rekening BNI</p>
                  <table>
                    <tbody>
                      <tr>
                        <td style="min-width: 150px;">No Rek</td>
                        <td style="min-width: 10px;">:</td>
                        <th style="min-width: 50px;">071842xxx</th>
                      </tr>
                      <tr>
                        <td style="min-width: 150px;">Atas nama</td>
                        <td style="min-width: 10px;">:</td>
                        <th style="min-width: 50px;">Fakultas Teknik Unitomo</th>
                      </tr>
                      <tr>
                        <td style="min-width: 150px;">Sebesar </td>
                        <td style="min-width: 10px;">:</td>
                        <th style="min-width: 50px;">Rp. 150.000</th>
                      </tr>
                    </tbody>
                  </table>
                  <p>Apabila anda sudah melakukan pembayaran, segera upload bukti pembayaran di bawah ini :</p>
                </div>
                <br>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nim">Nim</label>
                    <div class="col-md-9 col-xs-12">
                      <input name="nim" type="text" class="form-control" placeholder="Masukkan Nim Mahasiswa" value="<?= session()->get('username') ?>" readonly required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="namamhs">Nama Mahasiswa</label>
                    <div class="col-md-9 col-xs-12">
                      <input name="namamhs" type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa" value="<?= session()->get('nama') ?>" readonly required>
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
                          <option value="<?= $data['id_matkul'] ?>" <?= ($data['id_matkul'] == $value['id_matkul']) ? "selected" : '' ?>><?= $data['matkul'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Pembayaran </label>
                    <div class='col-md-9 col-xs-12 input-group date tglbayar'>
                      <input value="<?= $value['tgl_bayar'] ?>" name="tgl_bayar" type='text' class="form-control" />
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12" for="nominal">Nominal Bayar</label>
                    <div class="col-md-9 col-xs-12">
                      <input value="<?= ($value['nominal_bayar'] == '0') ? '' : $value['nominal_bayar'] ?>" name="nominal" type="text" class="form-control" data-inputmask="'mask': '999.999'" id="nominal_bayar">
                      <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-md-3 col-xs-12">Bukti Pembayaran</label>
                    <div class="col-md-9 col-xs-12">
                      <h5 class="upload_bukti_note"><strong>Silahkan Upload file (JPG) bukti pembayaran, ukuran tidak lebih dari 2mb</strong></h5>
                      <div class="x_panel">
                        <div class="x_content">
                          <input value="<?= $value['bukti_bayar'] ?>" type="file" class="pilih_file" accept="image/*" name="foto">
                          <br />
                          <br />
                        </div>
                      </div>
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
      <?php foreach ($daftarpraktikum as $key => $value) { ?>
        <!-- Modal Delete Mahasiswa -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="delete<?= $value['id_pendaftaran'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Hapus Data Mahasiswa</h4>
              </div>
              <div class="modal-body">
                Apakah anda ingin menghapus data praktikum dengan id praktikum <b> <?= $value['id_pendaftaran'] ?></b> ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/daftarpraktikum/deleteData/' . $value['id_pendaftaran']) ?>" class="btn btn-danger">Hapus</a>
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