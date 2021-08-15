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
    key = $('#jadwalpraktikum').attr('data-key');
    for (let index = 0; index <= key; index++) {
      var id_jadwal = $('.id_jadwal' + index).val();
      $.ajax({
        type: 'GET',
        url: '<?= base_url('dosen/jadwalpraktikum/getJumlahMahasiswa') ?>/' + id_jadwal,
        success: function(html) {
          $('.jumlahmhs' + index).html(html);
        }
      });
    }
    for (let index = 1; index <= key; index++) {
      var id_jadwal = $('.id_jadwal' + index).val(); //1
      var index2 = index - 1; //0
      var id_jadwal2 = $('.id_jadwal' + index2).val(); //0
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
        <h2>Jadwal Praktikum</h2>
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
              <th hidden>Id Jadwal</th>
              <th>Kode Mata Kuliah</th>
              <th>Mata Kuliah</th>
              <th>Ruang</th>
              <th>Kelompok</th>
              <th>Tgl Pelaksanaan</th>
              <th>Waktu</th>
              <th>Jumlah Mahasiswa</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($jadwalpraktikum as $key => $value) {
              $no++; ?>
              <tr id="jadwalpraktikum" class="jadwalpraktikum<?= $no ?>" data-key=<?= $jumlahjadwal ?>>
                <td hidden><input class="id_jadwal<?= $no ?>" type="text" value="<?= $value['id_jadwal'] ?>"></td>
                <td><?= $value['kode_matkul'] ?></td>
                <td><?= $value['matkul'] ?></td>
                <td><?= $value['ruang'] ?></td>
                <td><?= $value['kelompok'] ?></td>
                <td><?= $value['tgl_pelak'] ?></td>
                <td><?= $value['waktu'] ?></td>
                <td class="jumlahmhs<?= $no ?>"></td>
                <td>
                  <a href="#" data-toggle="modal" data-target="#lihat<?= $value['id_jadwal_mhs'] ?>">Lihat</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <?php
      $no = 1;
      foreach ($jadwalpraktikum as $key => $value) {
        $no++; ?>
        <!-- Modal Data Praktikum -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="lihat<?= $value['id_jadwal_mhs'] ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Lihat Jadwal Praktikum</h4>
              </div>
              <div class="modal-body">
                <div class="x_panel">
                  <div class="x_content">
                    <table class="table table-striped table-bordered">
                      <tbody>
                        <tr class="jadwalpraktikum<?= $no ?>" data-key=<?= $jumlahjadwal ?>>
                          <td hidden><input class="id_jadwal<?= $no ?>" type="text" value="<?= $value['id_jadwal'] ?>"></td>
                        </tr>
                        <tr>
                          <td scope="row">Nidn</td>
                          <td><?= $value['nidn'] ?></td>
                        </tr>
                        <tr>
                          <td scope="row">Nama</td>
                          <td><?= $value['nama_dosen'] ?></td>
                        </tr>
                        <tr>
                          <td scope="row">Kode Mata Kuliah</td>
                          <td><?= $value['matkul'] ?></td>
                        </tr>
                        <tr>
                          <td scope="row">Mata Kuliah</td>
                          <td><?= $value['matkul'] ?></td>
                        </tr>
                        <tr>
                          <td scope="row">Ruang</td>
                          <td><?= $value['ruang'] ?></td>
                        </tr>
                        <tr>
                          <td scope="row">Kelompok</td>
                          <td><?= $value['kelompok'] ?></td>
                        </tr>
                        <tr>
                          <td scope="row">Tanggal Pelaksanaan</td>
                          <td><?= $value['tgl_pelak'] ?></th>
                        </tr>
                        <tr>
                          <td scope="row">Waktu Pelaksanaan</td>
                          <td><?= $value['waktu'] ?></th>
                        </tr>
                        <tr>
                          <td scope="row">Jumlah Mahasiswa</td>
                          </td>
                          <td class="jumlahmhs<?= $no ?>"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Edit Mahasiswa End -->
      <?php } ?>
    </div>
  </div>
</div>
<?= $this->endSection() ?>