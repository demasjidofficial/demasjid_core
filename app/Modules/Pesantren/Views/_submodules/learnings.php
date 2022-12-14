<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('app.learnings') ?></h2>
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

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
</script>
<?php $this->endSection(); ?>