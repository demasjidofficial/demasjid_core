<!doctype html>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= config('App')->siteName ?? 'Demasjid' ?> Panel | [menu]</title>

    <link rel='icon' href='assets/auth/img/demasjid-logo-icon.png' />
    
    <link href='../../themes/Admin/theme-adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4-min.css' rel='stylesheet' /> 
    <link href='../../themes/Admin/theme-adminlte/plugins/fontawesome-free/css/all-min.css' rel='stylesheet' />   
    <!-- Theme style -->
    <link href='../../themes/Admin/theme-adminlte/adminlte-min.css' rel='stylesheet' /> 
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
  <?= $this->renderSection('main') ?>
  </div>

</body>
</html>
