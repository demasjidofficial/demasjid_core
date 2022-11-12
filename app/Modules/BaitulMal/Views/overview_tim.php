<?php $this->extend('master') ?>

<?php $this->section('styles') ?>
<?= asset_link('admin/theme-adminlte/plugins/chart-js/Chart.css', 'css'); ?>
<?php $this->endSection() ?>


<?php $this->section('main') ?>

<x-page-head>
    <div class="row de_infobox_top">
        <div class="col">
            <h2><?= lang('app.overview_tim') ?></h2>
        </div>
        <div class="col-auto">
            <!--a href="< ?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> < ?= lang('crud.add_new') ?></a-->
        </div>
    </div>
</x-page-head>

<section class="content">
    <div class="container-fluid" id="overview_tim">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-9">
        <?= view('App\Views\Widgets\_stats', [
            'stats'   => $widgets->widget('stats')->items(),
        ]) ?>
        </div>
            <div class="card col-md-3" id="de_menu_gradient">

                <div class="card-header" style="">
                    <h3 style="color:white;" class="card-title">

                        Menu
                    </h3>
                </div>
                <div class="body" style="">


                    <div class="info-box bg-default">
                        <span class="info-box-icon"><i class="icon-icon_add_user"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><?= lang('crud.add_donasi') ?></span>

                            <span class="progress-description">
                                <a href="<?= site_url('admin/baitulmal/donaturfundraising/new') ?>" class="small-box-footer">
                                    <?= lang('app.open_menu') ?> <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->




                    <!-- /.info-box -->

                </div>


            </div>
        </div>




        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col">

                <!-- /.card -->
                <?= view('App\Views\Widgets\_panel', [
                    'panel'   => $widgets->widget('tugasfund')->items(),
                    'title'  => 'Tugas'
                ]) ?>
                <a href="<?php echo site_url('/admin/baitulmal/tugastim'); ?>" class="btn btn-primary"><i class="fa fa-database"></i> <?= lang('crud.selengkapnya') ?></a>

                <?= view('App\Views\Widgets\_panel', [
                    'panel'   => $widgets->widget('donatur')->items(),
                    'title'  => 'Donatur'
                ]) ?>

                <a href="<?php echo site_url('/admin/baitulmal/donaturfundraising'); ?>" class="btn btn-primary"><i class="fa fa-database"></i> <?= lang('crud.selengkapnya') ?></a>


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