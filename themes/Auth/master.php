<!doctype html>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= config('App')->siteName ?? 'Demasjid' ?> Panel </title>

    <link rel='icon' href='assets/auth/img/demasjid-logo-icon.png' />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <?= asset_link('admin/theme-adminlte/plugins/fontawesome-free/css/all-min.css', 'css') ?>
    <!-- iCheck -->
    <?= asset_link('admin/theme-adminlte/plugins/icheck-bootstrap/icheck-bootstrap-min.css', 'css') ?>
    <!-- Select2 -->
    <?= asset_link('admin/theme-adminlte/plugins/select2/css/select2.css', 'css') ?>
    <!-- Theme style -->
    <?= asset_link('admin/theme-adminlte/adminlte-min.css', 'css') ?>
    <!-- Demasjid style -->
    <?= asset_link('admin/css/admin-demasjid.css', 'css') ?>

    <?= $this->renderSection('styles') ?>
</head>
<body class="hold-transition login-page bg-demasjid">

<div class="login-box">
  <div class="login-logo">
    <a href="<?= ADMIN_AREA ?>">
        <!--b>< ?= setting('App.siteName') ?? 'Demasjid' ?></b>Panel-->
        <img src="assets/auth/img/demasjid-logo2.png" style="width:65%" />
    </a>
  </div>
  <!-- /.login-logo -->
  
  <?= $this->renderSection('main') ?>

</div>
<!-- /.login-box -->

<!-- jQuery -->
<?= asset_link('admin/theme-adminlte/plugins/jquery/jquery-min.js', 'js') ?>
<!-- Bootstrap 4 -->
<?= asset_link('admin/theme-adminlte/plugins/bootstrap/js/bootstrap-bundle-min.js', 'js') ?>
<!-- AdminLTE App -->
<?= asset_link('admin/theme-adminlte/adminlte.js', 'js') ?>

<?= $this->renderSection('scripts') ?>
</body>
</html>
