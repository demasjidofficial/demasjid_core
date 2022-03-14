<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2>account_balance</h2>
            </div>
            <div class="col-auto">
                <a href="<?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  account_balance</a>
            </div>
        </div>
    </x-page-head>

    <x-admin-box>
        <div>
            <div class="row">
                <!-- List account_balances -->
                <div class="col table-responsive" id="account_balance-list">
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
