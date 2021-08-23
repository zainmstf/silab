<?= $this->section('head') ?>
<!-- iCheck -->
<link href="<?= base_url('assets/gentelella/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->extend('layouts/master/master_mhs') ?>

<?= $this->section('foot') ?>
<!-- iCheck -->
<script src="<?= base_url('assets/gentelella/vendors/iCheck/icheck.min.js') ?>"></script>
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
                        <input id="password" name="pwd_mhs" type="password" class="form-control" placeholder="Password tergenerator otomatis" value="<?= $datamhs['pwd_mhs'] ?>">
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
              <?php foreach ($jadwal as $key => $value) { ?>
                <li>
                  <p>
                    <input type="checkbox" class="flat" <?= ($value['tgl_pelak'] >  date('Y-m-d'))  ? "checked" : "" ?>> <?= $value['matkul'] . ' ' . $value['ruang'] . ' - ' . date("l, d F Y", strtotime($value['tgl_pelak'])) . ' ' . $value['waktu'] ?>
                  </p>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Jadwal Mahasiswa End -->
  </div>
</div>
<?= $this->endSection() ?>