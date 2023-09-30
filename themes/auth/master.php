<!doctype html>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= config('App')->siteName ?? 'Demasjid' ?> Panel </title>
    
    <link rel='icon' href='<?= assetUrl('auth/img/demasjid-logo-icon.png') ?>' />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/fontawesome-free/css/all-min.css'), 'css') ?>
    <!-- iCheck -->
    <?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/icheck-bootstrap/icheck-bootstrap-min.css'), 'css') ?>
    <!-- Select2 -->
    <?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/select2/css/select2.css'), 'css') ?>
    <!-- Theme style -->
    <?= assetUrlLink(assetUrl('Admin/theme-adminlte/adminlte-min.css'), 'css') ?>
    <!-- Demasjid style -->
    <?= assetUrlLink(assetUrl('Admin/css/admin-demasjid.css'), 'css') ?>

    <?= $this->renderSection('styles') ?>
</head>
<body class="hold-transition login-page bg-demasjid">

<div class="login-box">
  <div class="login-logo">
    <a href="<?= ADMIN_AREA ?>">
        <!--b>< ?= setting('App.siteName') ?? 'Demasjid' ?></b>Panel-->
        <img src=<?= assetUrl("auth/img/demasjid-logo2.png"); ?> style="width:65%" />
    </a>
  </div>
  <!-- /.login-logo -->
  
  <?= $this->renderSection('main') ?>

</div>
<!-- /.login-box -->

<!-- jQuery -->
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/jquery/jquery-min.js'), 'js') ?>
<!-- Bootstrap 4 -->
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/bootstrap/js/bootstrap-bundle-min.js'), 'js') ?>
<!-- AdminLTE App -->
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/adminlte.js'), 'js') ?>

<?= $this->renderSection('scripts') ?>
</body>
</html>
