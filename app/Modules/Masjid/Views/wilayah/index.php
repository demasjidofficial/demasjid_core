<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2>wilayah</h2>
            </div>
            <div class="col-auto">
                <a href="<?= route_to($baseRoute . '/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  wilayah</a>
            </div>
        </div>
    </x-page-head>

    <x-admin-box>
        <div x-data="{filtered: false}">
            <x-filter-link />
            <div class="row">
                <!-- List wilayahs -->
                <div class="col table-responsive" id="wilayah-list">
                    <?= $this->include($viewPrefix . '\_table'); ?>                    
                </div>

                <!-- Filters -->
                <div class="col-auto" x-show="filtered" x-transition.duration.240ms>
                    <?= view_cell('Bonfire\Libraries\Cells\Filters::renderList', 'model=WilayahFilter target=#wilayah-list') ?>
                </div>
            </div>
        </div>

    </x-admin-box>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>

</script>
<?php $this->endSection(); ?>
