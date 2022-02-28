<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2>jabatan</h2>
            </div>
            <div class="col-auto">
                <a href="<?= route_to($baseRoute . '/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  jabatan</a>
            </div>
        </div>
    </x-page-head>

    <x-admin-box>
        <div>            
            <div class="row">
                <div x-data="{filtered: false}">
                    <x-filter-link />

                    <div class="row">
                        <!-- List Users -->
                        <div class="col" id="user-list">
                            <?= $this->include('Bonfire\Modules\Users\Views\_table') ?>
                        </div>

                        <!-- Filters -->
                        <div class="col-auto" x-show="filtered" x-transition.duration.240ms>
                            <?= view_cell('Bonfire\Libraries\Cells\Filters::renderList', 'model=UserFilter target=#user-list') ?>
                        </div>
                    </div>
                </div>
                <!-- List jabatans -->
                <div class="col table-responsive" id="jabatan-list">
                    <?= $this->include($viewPrefix . '\_table'); ?>
                    <?= $pager->links() ?>
                </div>
            </div>
        </div>

    </x-admin-box>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>

</script>
<?php $this->endSection(); ?>
