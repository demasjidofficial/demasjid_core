<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <div class="row">
        <div class="col">
            <h2><?= lang('crud.balance') ?></h2>
        </div>
        <div class="col-auto">
            <a href="<?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>
                <?= lang('crud.add_new') ?></a>
        </div>
    </div>
</x-page-head>

<x-admin-box>
    <div>
        <div class="row">
            <form action="<?php echo $actionUrl; ?>" method="get">

                <?php echo csrf_field(); ?>

                <fieldset>
                    <div class="row mb-3">
                        <?= form_label(lang('crud.transaction_date'),'',['for' => 'transaction_date', 'class' => 'col-form-label col-auto']) ?>
                        <div class="col-auto">
                            <?= form_input('transaction_date', old('transaction_date', $data->transaction_date ?? ''), "class='form-control date' required readonly") ?>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-success"><i class="fas fa-search"></i>
                            <?= lang('app.search') ?></button>
                        </div>
                    </div>

                </fieldset>                

            </form>
        </div>
        <div class="row">
            <!-- List balances -->
            <div class="col table-responsive" id="balance-list">
                <?php echo $this->include($viewPrefix.'\_table'); ?>
            </div>
        </div>
    </div>

</x-admin-box>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js', 'js') ?>
<script type="text/javascript">
    $(function () {
        $('input[name=transaction_date]').daterangepicker({
            "singleDatePicker": false,
            "autoApply": true,
            "locale": {
                "format": 'YYYY-MM-DD'
            }
        });
    })
</script>
<?php $this->endSection(); ?>
