<?php $this->extend('master') ?>

<?php $this->section('styles') ?>
<?= asset_link('admin/theme-adminlte/plugins/chart-js/Chart.css', 'css'); ?>
<?php $this->endSection() ?>


<?php $this->section('main') ?>

<x-page-head>
    <div class="row">
        <div class="col">
            <h2><?= lang('app.overview_spv') ?></h2>
        </div>
        <div class="col-auto">
            <!--a href="< ?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> < ?= lang('crud.add_new') ?></a-->
        </div>
    </div>
</x-page-head>

<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->

        <?= view('App\Views\Widgets\_stats', [
            'stats'   => $widgets->widget('stats')->items(),
        ]) ?>




        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-9">

                <!-- /.card -->
                <?= view('App\Views\Widgets\_panel', [
                    'panel'   => $widgets->widget('tugasfund')->items(),
                    'title'  => 'Tugas'
                ]) ?>
                <a href="<?php echo site_url('/admin/baitulmal/tugastim'); ?>" class="btn btn-primary"><i class="fa fa-database"></i> <?= lang('crud.selengkapnya') ?></a>

            </div>
            <!-- /.col -->
            <div  class="card col-md-3" style="height: 50px;">

                <div class="card-header" style="background-color:#067D68 ;">
                    <h3 style="color:white;" class="card-title">

                        Menu
                    </h3>
                </div>
                <div class="body" style="background-color:#067D68 ;">


                    <div class="info-box bg-default">
                        <span class="info-box-icon"><i class="icon-icon_donatur"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><?= lang('crud.add_tugas_tim') ?></span>

                            <span class="progress-description">
                                <a href="<?= site_url('/admin/baitulmal/timstaff') ?>" class="small-box-footer">
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
        <div class="col-md-12">

            <!-- /.card -->
            <?= view('App\Views\Widgets\_tim_fundraising', [
                'panel'   => $widgets->widget('timfund')->items(),
                'title'  => 'Tim Fundraising'
            ]) ?>


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