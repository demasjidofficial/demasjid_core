<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.payment_method') ?></h2>
            </div>
            <div class="col-auto">
                <a href="<?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  <?= lang('crud.payment_method') ?></a>
            </div>
            <div class="col-auto">
                <a href="<?= site_url('/admin/baitulmal/masterbank')?>" class="btn btn-warning"><i class="fas fa-plus"></i>  <?= lang('crud.master_bank') ?></a>
            </div>
            <div class="col-auto">
                <a href="<?= site_url('/admin/baitulmal/paymentcategory')?>" class="btn btn-light"><i class="fas fa-plus"></i>  <?= lang('crud.payment_category') ?></a>
            </div>
        </div>
    </x-page-head>

    <x-admin-box>
        <div>
            <div class="row">
                <!-- List payment_methods -->
                <div class="col table-responsive" id="payment_method-list">
                    <?php echo $this->include($viewPrefix.'\_table'); ?>
                    <?php echo $pager->links() ?>
                </div>
            </div>
        </div>

    </x-admin-box>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>

</script>
<?php $this->endSection(); ?>
