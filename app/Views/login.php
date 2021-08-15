<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <?= $this->include('layouts/head') ?>
  <!-- Animate.css -->
  <link href="<?= base_url('public/assets/gentelella/vendors/animate.css/animate.min.css') ?>" rel="stylesheet">

</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <div>
            <?php
            $errors = session()->getFlashdata('errors');
            if (!empty(session()->getFlashdata('errors'))) { ?>
              <div class="alert alert-danger" role="alert">
                <ul>
                  <?php foreach ($errors as $error) : ?>
                    <li><?= esc($error) ?></li>
                  <?php endforeach ?>
                </ul>
              </div>
            <?php } ?>

            <?php if (session()->getFlashdata('pesan')) {
              echo '<div class="alert alert-danger" role="alert">';
              echo session()->getFlashdata('pesan');
              echo '</div>';
            } ?>

            <img src="<?= base_url('assets/img/logo_ui.png') ?>" alt="Logo Unitomo">
          </div>
          <?php echo form_open('auth/cek_login_user') ?>
          <h1 class="blue"> <strong>SILAB UNITOMO</strong></h1>
          <div>
            <input type="text" name="username" class="form-control" placeholder="Username" required="" />
          </div>
          <div>
            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
            <a class="reset_pass" href="#">Lupa Password ?</a>
          </div>
          <div>
            <button class="btn btn-primary submit" id="login" type="submit">Log in</button>
          </div>

          <div class="clearfix"></div>

          <?php echo form_open() ?>
        </section>
      </div>


    </div>
  </div>
</body>

</html>