<?= $this->section('head') ?>
<!-- bootstrap-daterangepicker -->
<link href="<?= base_url('assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="<?= base_url('assets/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">

<!-- FullCalendar -->
<link href="<?= base_url('assets/gentelella/vendors/fullcalendar/dist/fullcalendar.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/gentelella/vendors/fullcalendar/dist/fullcalendar.print.css') ?>" rel="stylesheet" media="print">
<?= $this->endSection() ?>

<?= $this->extend('layouts/master/master_adm') ?>

<?= $this->section('foot') ?>
<!-- Chart.js -->
<script src="<?= base_url('assets/gentelella/vendors/Chart.js/dist/Chart.min.js') ?>"></script>
<!-- bootstrap-progressbar -->
<script src="<?= base_url('assets/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= base_url('assets/gentelella/vendors/moment/min/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<!-- Calendar -->
<script src="<?= base_url('assets/gentelella/vendors/moment/min/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/gentelella/vendors/fullcalendar/dist/fullcalendar.min.js') ?>"></script>
<?php foreach ($matkul as $key => $value) {
  $mtkl[] = $value['matkul'];
} ?>
<script>
  var ctx = document.getElementById('linechart')
  var lineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: <?php echo json_encode($mtkl); ?>,
      datasets: [{
        label: 'Mahasiswa Laki-laki',
        backgroundColor: 'rgba(38, 185, 154, 0.31)',
        borderColor: 'rgba(38, 185, 154, 0.7)',
        pointBorderColor: 'rgba(38, 185, 154, 0.7)',
        pointBackgroundColor: 'rgba(38, 185, 154, 0.7)',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: 'rgba(220,220,220,1)',
        pointBorderWidth: 1,
        data: [<?php echo $matkulmhsl ?>,
          <?php echo $matkulmhsp ?>
        ],
      }, ],
    },
  });
</script>
<script>
  $(document).ready(function() {
    var BASE_URL = "<?= base_url() ?>";
    var calendar = $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      height: 500,
      editable: true,
      events: BASE_URL + "admin",
      displayEventTime: false,
      selectable: true,
      selectHelper: true,
    });
  });
</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- top tiles -->
<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-book"></i> Total Mahasiswa</span>
    <div class="count"><?= $totalmhs ?></div>
    <span class="count_bottom"><i class="green"></i>Mahasiswa</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-book"></i> Total Mata Kuliah</span>
    <div class="count"><?= $totalmatkul ?></div>
    <span class="count_bottom"><i class="green"></i>Mata Kuliah</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-users"></i> Total Dosen</span>
    <div class="count"><?= $totaldosen ?></div>
    <span class="count_bottom"><i class="green"></i>Dosen</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-money"></i> Total Pembayaran</span>
    <div class="count">
      <?php
      $sum = 0;
      foreach ($totalbayar as $key => $value) {
        $sum += str_replace('', '', $value['nominal_bayar']);
      }
      echo number_format($sum / 1000000, 2);
      ?>
    </div>
    <span class="count_bottom"><i class="red"></i> Juta Rupiah</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-check-square"></i> Total Praktikum Selesai</span>
    <div class="count"><?= $totalpraktikum ?></div>
    <span class="count_bottom"><i class="green"></i>Selesai</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-newspaper-o"></i> Total Pengumuman</span>
    <div class="count"><?= $totalpengumuman ?></div>
    <span class="count_bottom"><i class="green"></i>Pengumuman</span>
  </div>
</div>
<!-- /top tiles -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="dashboard_graph">

      <div class="row x_title">
        <div class="col-md-6">
          <h3>Data Mahasiswa Yang Mengikuti Mata Kuliah</h3>
        </div>
      </div>
      <div class="col-md-9 col-sm-9 col-xs-12">
        <canvas id="linechart" class="demo-placeholder">
        </canvas>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
        <div class="x_title">
          <h2>Mahasiswa Unitomo</h2>
          <div class="clearfix"></div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-6">
          <div>
            <p>Mahasiswa Laki-laki</p>
            <div class="">
              <div class="progress progress_sm" style="width: 76%;">
                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?= ($mhslaki / $totalmhs) * 100 ?>"></div>
              </div>
            </div>
          </div>
          <div>
            <p>Mahasiswa Perempuan</p>
            <div class="">
              <div class="progress progress_sm" style="width: 76%;">
                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?= ($mhsperempuan / $totalmhs) * 100 ?>"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<br />
<div class="">
  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Kalendar</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div id='calendar'></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- calendar modal -->
<div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
      </div>
      <div class="modal-body">
        <div id="testmodal" style="padding: 5px 20px;">
          <form id="antoform" class="form-horizontal calender" role="form">
            <div class="form-group">
              <label class="col-sm-3 control-label">Title</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="title" name="title">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Description</label>
              <div class="col-sm-9">
                <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary antosubmit">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
      </div>
      <div class="modal-body">

        <div id="testmodal2" style="padding: 5px 20px;">
          <form id="antoform2" class="form-horizontal calender" role="form">
            <div class="form-group">
              <label class="col-sm-3 control-label">Title</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="title2" name="title2">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Description</label>
              <div class="col-sm-9">
                <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
              </div>
            </div>

          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
<div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
<!-- /calendar modal -->
<?= $this->endSection() ?>