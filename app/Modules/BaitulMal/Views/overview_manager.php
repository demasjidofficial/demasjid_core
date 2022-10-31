<?php $this->extend('master') ?>

<?php $this->section('styles') ?>
<?= asset_link('admin/theme-adminlte/plugins/chart-js/Chart.css', 'css'); ?>
<?php $this->endSection() ?>


<?php $this->section('main') ?>

<x-page-head>
  <div class="row">
    <div class="col">
      <h2><?= lang('crud.overview_manager') ?></h2>
    </div>
    <div class="col-auto">
      <!--a href="< ?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> < ?= lang('crud.add_new') ?></a-->
    </div>
  </div>
</x-page-head>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- Left col -->
      <div class="col-md-9">
        <?= view('App\Views\Widgets\_stats_target', [
          'stats'   => $widgets->widget('target')->items(),
        ]) ?>




        <?= view('App\Views\Widgets\_stats_fund', [
          'stats'   => $widgets->widget('stats')->items(),
        ]) ?>





      </div>
      <div style="background-color:#067D68 ;" class="card col-md-3">

        <div class="card-header">
          <h3 style="color:white;" class="card-title">

            Menu
          </h3>
        </div>
        <div class="body">


          <div class="info-box bg-default">
            <span class="info-box-icon"><i class="icon-icon_donatur"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><?= lang('crud.donaturcategory') ?></span>

              <span class="progress-description">
                <a href="<?= site_url('/admin/baitulmal/donaturcategory') ?>" class="small-box-footer">
                  <?= lang('app.open_menu') ?> <i class="fas fa-arrow-circle-right"></i>
                </a>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

          <div class="info-box bg-default">
            <span class="info-box-icon"><i class="icon-icon_mapping"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><?= lang('crud.target_fundraising') ?></span>

              <span class="progress-description">
                <a href="<?= site_url('/admin/baitulmal/targetfundraising') ?>" class="small-box-footer">
                  <?= lang('app.open_menu') ?> <i class="fas fa-arrow-circle-right"></i>
                </a>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->


          <div class="info-box bg-default">
            <span class="info-box-icon"><i class="icon-icon_organisasi"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><?= lang('crud.tim_fundraising') ?></span>

              <span class="progress-description">
                <a href="<?= site_url('/admin/baitulmal/timfundraising') ?>" class="small-box-footer">
                  <?= lang('app.open_menu') ?> <i class="fas fa-arrow-circle-right"></i>
                </a>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

        </div>


      </div>

    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Grafik Fundraising</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <!-- <div class="btn-group">
            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-wrench"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
              <a href="#" class="dropdown-item">Mingguan</a>
              <a href="#" class="dropdown-item">Bulanan</a>
              <a href="#" class="dropdown-item">Tahunan</a>
              <a class="dropdown-divider"></a>
              <a href="#" class="dropdown-item">Separated link</a>
            </div>
          </div> -->
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <?= view('App\Views\Widgets\_charts', [
                  'charts'   => $widgets->widget('charts')->items(),
                ]) ?>


              </div>
              <!-- /.col -->
              <div class="col-md-4">


                <?= view('App\Views\Widgets\_progress', [
                  'stats'   => $widgets->widget('fundraising')->items(),
                ]) ?>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>

          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>



    <!-- Info boxes -->


    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="col-md-12">

        <!-- /.card -->
        <?= view('App\Views\Widgets\_tim_fundraising', [
          'panel'   => $widgets->widget('timfund')->items(),
          'title'  => 'Tim Fundraising'
        ]) ?>

        <!-- /.card -->
      </div>
      <!-- /.col -->



    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  </div>
  <!--/. container-fluid -->
</section>

<?php $this->endSection() ?>


<?= $this->section('scripts') ?>

<!-- OPTIONAL SCRIPTS -->
<?= asset_link('admin/theme-adminlte/plugins/chart-js/Chart.js', 'js'); ?>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?= asset_link('admin/theme-adminlte/adminlte-dashboard2.js', 'js'); ?>



<?php $this->endSection() ?>