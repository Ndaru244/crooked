<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <?= form_open(base_url('login')) ?>
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Crooked</b> Ind</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Masuk untuk memulai sesi.</p>
        <?php if ($this->session->flashdata('message_login_error')) : ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <!-- <h5><i class="icon fas fa-thumbs-up"></i> Alert!</h5> -->
            <?= $this->session->flashdata('message_login_error');
            $this->session->unset_userdata('sukses'); ?>
          </div>
        <?php endif ?>

        <div class="input-group mb-3 <?= form_error('username') ? 'is-invalid' : '' ?>">
          <input type="text" name="username" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" value="<?= set_value('username') ?>" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-at"></span>
            </div>
          </div>
        </div>
        <div class="invalid-feedback">
          <?= form_error('username') ?>
        </div>
        <div class="input-group mb-3 <?= form_error('password') ? 'is-invalid' : '' ?>">
          <input type="password" name="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>" value="<?= set_value('password') ?>" id="password" placeholder="Password">
          <div class="input-group-append" onclick="password_show_hide();">
            <div class="input-group-text">
              <i class="fas fa-eye" id="show_eye"></i>
              <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
            </div>
          </div>
        </div>
        <div class="invalid-feedback">
          <?= form_error('password') ?>
        </div>
        <div class="input-group mb-3">
          <button type="submit" class="btn btn-block btn-primary">Masuk</button>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <?= form_close() ?>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
  <!-- Specific Script -->
  <script>
    function password_show_hide() {
      var x = document.getElementById("password");
      var show_eye = document.getElementById("show_eye");
      var hide_eye = document.getElementById("hide_eye");
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
      } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
      }
    }
  </script>
</body>

</html>