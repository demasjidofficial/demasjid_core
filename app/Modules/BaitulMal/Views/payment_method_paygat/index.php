<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.payment_method') ?></h2>
            </div>
            <div class="col-auto">
                <a href="<?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  <?= lang('crud.payment_method_paygat') ?></a>
            </div>
            <div class="col-auto">
                <a href="<?= site_url('/admin/baitulmal/masterpaymentgateway')?>" class="btn btn-warning"><i class="fas fa-plus"></i>  <?= lang('crud.paymentgateway') ?></a>
            </div>
        </div>
    </x-page-head>

    <div class="row">
       <div class="col-md-12 fl-tabnav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('/admin/baitulmal/paymentmethod_transfer')?>">Transfer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page"  href="<?= site_url('/admin/baitulmal/paymentmethod_paygat')?>">Payment Gateway</a>
            </li>
        </ul>
       </div>
    </div>
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