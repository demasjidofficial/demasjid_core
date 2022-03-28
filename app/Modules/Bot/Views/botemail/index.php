<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.bot_email') ?></h2>
            </div>
            <!--div class="col-auto">
                <a href="< ?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  < ?= lang('bmdonationtype') ?></a>
            </div-->
        </div>
    </x-page-head>

    <x-admin-box>
        <div>
            <div class="row">
                <div class="col-md-12">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/n-f8B76Hozk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </x-admin-box>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script></script>
<?php $this->endSection(); ?>
