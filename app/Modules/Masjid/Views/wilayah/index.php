<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <a href="#" class="back" onclick="history.back()">&larr; <?= lang('crud.back') ?></a>
                <h4><?= lang('crud.zone')?></h4>
            </div>
            <div class="col-auto">


                <a href="<?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  wilayah</a>

                <a href="<?= route_to($baseRoute . '/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  <?= lang('crud.add_new')?></a>
>>>>>>> 

                <a href="<?= route_to($baseRoute . '/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  <?= lang('crud.add_new')?></a>

            </div>
        </div>
    </x-page-head>

    <x-admin-box>
        <div>
            <div class="row">
                <!-- List wilayahs -->
                <div class="col table-responsive" id="wilayah-list">


                    <?php echo $this->include($viewPrefix.'\_table'); ?>
                    <?php echo $pager->links() ?>



                    <?= $this->include($viewPrefix . '\_table'); ?>                    
                </div>

                <!-- Filters -->
                <div class="col-auto" x-show="filtered" x-transition.duration.240ms>
                    <?= view_cell('Bonfire\Libraries\Cells\Filters::renderList', 'model=WilayahFilter target=#wilayah-list') ?>
>>>>>>> 
                </div>
            </div>
        </div>

    </x-admin-box>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script></script>
<?php $this->endSection(); ?>
