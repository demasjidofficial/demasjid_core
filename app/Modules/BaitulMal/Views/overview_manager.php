<?php $this->extend('master') ?>

<?php $this->section('styles') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/chart-js/Chart.css'), 'css'); ?>
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
  <div class="container-fluid" id="overview_manager">
    <div class="row">
      <!-- Left col -->
      <div class="col-md-8">
        <?= view('App\Views\Widgets\_stats_target', [
          'stats'   => $widgets->widget('target')->items(),
        ]) ?>




        <?= view('App\Views\Widgets\_stats_fund', [
          'stats'   => $widgets->widget('stats')->items(),
        ]) ?>





      </div>
      <div style="" id="de_menu_gradient" class="card col-md-4">

        <div class="card-header">
          <h3 style="color:white;" class="card-title">

            Menu
          </h3>
        </div>


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




    <?= view('App\Views\Widgets\_grafik_fundraising', [
      'stats'   => $widgets->widget('fundraising')->items(),
    ]) ?>

    <!-- Info boxes -->


    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
      <div class="col-md-12">

        <!-- /.card -->
        <?= view('App\Views\Widgets\_tim_fundraising', [
          'panel'   => $widgets->widget('targetfund')->items(),
          'title'  => 'Target Fundraising'
        ]) ?>
 <a href="<?php echo site_url('/admin/baitulmal/targetfundraising'); ?>" class="btn btn-primary"><i class="fa fa-database"></i> <?= lang('crud.selengkapnya') ?></a>


        <!-- /.card -->
      </div>
      <!-- Left col -->
      <div class="col-md-12">

        <!-- /.card -->
        <?= view('App\Views\Widgets\_tim_fundraising', [
          'panel'   => $widgets->widget('timfund')->items(),
          'title'  => 'Tim Fundraising'
        ]) ?>
 <a href="<?php echo site_url('/admin/baitulmal/timfundraising'); ?>" class="btn btn-primary"><i class="fa fa-database"></i> <?= lang('crud.selengkapnya') ?></a>


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
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/chart-js/Chart.js'), 'js'); ?>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?= assetUrlLink(assetUrl('admin/theme-adminlte/adminlte-dashboard2.js'), 'js'); ?>

<!-- Chart.js Demasjid -->
<?= assetUrlLink(assetUrl('admin/js/admin-demasjid-chart.js'), 'js'); ?>



<?php $this->endSection() ?>