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
    
    <!-- Theme style -->
    <?= asset_link('admin/theme-adminlte/adminlte-min.css', 'css') ?>
    <?= asset_link('admin/theme-adminlte/custom.css', 'css') ?>
    <!-- overlayScrollbars -->
    <?= asset_link('admin/theme-adminlte/plugins/overlayScrollbars/css/OverlayScrollbars-min.css', 'css') ?>
        
    <?= asset_link('admin/css/admin-demasjid.css', 'css') ?>
    <!--    
    < ?= asset_link('admin/css/admin.css', 'css') ?>
    < ?= asset_link('other/components/font-awesome/css/all.css', 'css') ?>
    -->
    <style>
      .tf-v1-sidetab-button-text {
          font-size: 14px !important;
          margin-left: 1px !important;
      }
      .tf-v1-sidetab-button {
          left: -40px !important;
          max-width: 390px !important;
          height: 40px !important;
          padding: 0 14px !important;
          /*border-radius: 8px 8px 0 0;*/
    }
    .tf-v1-sidetab-button-icon {
        margin-right: 0px !important;
    }
    </style>
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
    <div class="content-wrapper" style="padding: 5px 0;">      

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <?= $this->renderSection('main') ?>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid" >
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

  <!-- Feedback Form -->
  <div data-tf-sidetab="lWWECIkd" data-tf-width="420" data-tf-height="450" data-tf-custom-icon="https://images.typeform.com/images/dcB899G2zqGn" data-tf-button-color="#026451" data-tf-button-text="<?= lang('app.helpus_grow')?>" data-tf-iframe-props="title=Feedback Form" data-tf-medium="snippet" style="all:unset;"></div>
  <script src="//embed.typeform.com/next/embed.js"></script>
  <!--/Feedback Form -->

<!-- jQuery -->
<?= asset_link('admin/theme-adminlte/plugins/jquery/jquery-min.js', 'js') ?>

<!-- Bootstrap 4 -->
<?= asset_link('admin/theme-adminlte/plugins/bootstrap/js/bootstrap-bundle-min.js', 'js') ?>
<!-- Moment -->
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





<script>
   //Date range picker
   $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )
</script>


<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://unpkg.com/htmx.org@1.7.0"></script>

<?= asset_link('admin/theme-adminlte/plugins/bootstrap-confirmation/bootstrap-confirmation.js', 'js') ?>

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
$(function(){
  $('.no-need').parents('li.nav-item').css('display','none');
})
</script>
<?= $this->renderSection('scripts') ?>
</body>
</html>
