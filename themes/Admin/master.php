<!doctype html>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= config('App')->siteName ?? 'Demasjid' ?> Panel | [menu]</title>

    <link rel='icon' href='assets/auth/img/demasjid-logo-icon.png' />

    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"-->
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <?= asset_link('admin/theme-adminlte/plugins/fontawesome-free/css/all-min.css', 'css') ?>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <?= asset_link('admin/theme-adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4-min.css', 'css') ?>
    <!-- iCheck -->
    <?= asset_link('admin/theme-adminlte/plugins/icheck-bootstrap/icheck-bootstrap-min.css', 'css') ?>
    <!-- JQVMap -->
    <?= asset_link('admin/theme-adminlte/plugins/jqvmap/jqvmap-min.css', 'css') ?>
    <!-- Theme style -->
    <?= asset_link('admin/theme-adminlte/adminlte-min.css', 'css') ?>
    <!-- overlayScrollbars -->
    <?= asset_link('admin/theme-adminlte/plugins/overlayScrollbars/css/OverlayScrollbars-min.css', 'css') ?>
    <!-- Daterange picker -->
    <?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css', 'css') ?>
    <!-- summernote -->
    <?= asset_link('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.css', 'css') ?>
    <!-- flags -->
    <?= asset_link('admin/theme-adminlte/plugins/flag-icon-css/css/flag-icon-min.css', 'css') ?>
    <?= asset_link('admin/css/admin-demasjid.css', 'css') ?>
    <!--    
    < ?= asset_link('admin/css/admin.css', 'css') ?>
    < ?= asset_link('other/components/font-awesome/css/all.css', 'css') ?>
    -->

    <?= $this->renderSection('styles') ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/assets/admin/images/spinner.gif" alt="" height="60" width="60">
  </div>

  <!-- Header -->
  <?= $this->include('_header') ?>
  <!-- /Header -->
  
  <!-- Main Sidebar Container -->
  <x-sidebar />
  <!-- /.main-sidebar -->
 
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dasbor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Dasbor</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?= $this->renderSection('main') ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?= $this->include('_footer') ?>
  <!-- /Footer -->

</div><!--/.wrapper-->

<!-- jQuery -->
<?= asset_link('admin/theme-adminlte/plugins/jquery/jquery-min.js', 'js') ?>
<!-- jQuery UI 1.11.4 -->
<?= asset_link('admin/theme-adminlte/plugins/jquery-ui/jquery-ui-min.js', 'js') ?>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<?= asset_link('admin/theme-adminlte/plugins/bootstrap/js/bootstrap-bundle-min.js', 'js') ?>
<!-- Sparkline -->
<?= asset_link('admin/theme-adminlte/plugins/sparklines/sparkline.js', 'js') ?>
<!-- JQVMap -->
<?= asset_link('admin/theme-adminlte/plugins/jqvmap/jquery-vmap-min.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/jqvmap/maps/jquery-vmap-usa.js', 'js') ?>
<!-- jQuery Knob Chart -->
<?= asset_link('admin/theme-adminlte/plugins/jquery-knob/jquery-knob-min.js', 'js') ?>
<!-- daterangepicker -->
<?= asset_link('admin/theme-adminlte/plugins/moment/moment-min.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js', 'js') ?>
<!-- Tempusdominus Bootstrap 4 -->
<?= asset_link('admin/theme-adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js', 'js') ?>
<!-- Summernote -->
<?= asset_link('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.js', 'js') ?>
<!-- overlayScrollbars -->
<?= asset_link('admin/theme-adminlte/plugins/overlayScrollbars/js/jquery-overlayScrollbars-min.js', 'js') ?>
<!-- AdminLTE App -->
<?= asset_link('admin/theme-adminlte/adminlte.js', 'js') ?>
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://unpkg.com/htmx.org@1.7.0"></script>
<!-- AdminLTE for demo purposes --
<script src="/assets/admin/theme-adminlte/adminlte-demo.js"></script>
< !-- AdminLTE dashboard demo (This is only for demo purposes) --
<script src="/assets/admin/theme-adminlte/adminlte-dashboard.js"></script>
-->
<script>
document.body.addEventListener('htmx:configRequest', (event) => {
  event.detail.headers['<?= csrf_header() ?>'] = '<?= csrf_hash() ?>';
})
</script>
<?= $this->renderSection('scripts') ?>
</body>
</html>
