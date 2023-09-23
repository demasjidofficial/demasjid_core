<?php $this->extend('master') ?>
<?php $this->section('main') ?>

<x-page-head>
    <div class="row">
        <div class="col">
            <h2><?= lang('crud.schedules')?></h2>
        </div>
        <div class="col-auto">
            <!--a href="< ?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> < ?= lang('crud.add_new') ?></a-->
        </div>
    </div>
</x-page-head>

<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <?= view('App\Views\Widgets\_link', [
                'groups'   => $widgets->widget('schedule')->items(),
            ]) ?>      
  </div>
  <!--/. container-fluid -->
</section>

<?php $this->endSection() ?>
