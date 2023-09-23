<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr;<?= lang('crud.balance') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.balance') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This<?= lang('crud.balance') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore<?= lang('crud.balance') ?>?</a>
        </div>
    <?php } ?>


    <x-admin-box>


        <form action="<?php echo $actionUrl; ?>" method="post" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            <?php if (isset($data) && null !== $data) { ?>
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="id" value="<?php echo $data->id; ?>">
            <?php } ?>

            <fieldset>                
                <div class="row mb-3">
                    <?= form_label(lang('crud.transaction_date'), '', ['for' => 'transaction_date', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('transaction_date', old('transaction_date', $data->transaction_date ?? ''), "class='form-control date' required readonly") ?>
                        <?php if (has_error('transaction_date')) { ?>
                        <p class="text-danger"><?php echo error('transaction_date'); ?></p>
                        <?php } ?>
                    </div>
                </div>                
                <div class="row mb-3">
                    <?= form_label(lang('crud.description'), '', ['for' => 'description', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_textarea('description', old('description', $data->description ?? ''), "class='form-control varchar' required rows=3") ?>
                        <?php if (has_error('description')) { ?>
                        <p class="text-danger"><?php echo error('description'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.type'), '', ['for' => 'type', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <div class="row col-sm-12">
                            <div class="form-check col-sm-6">
                                <?= form_radio(['name' => 'type'], 'debit', (isset($data->type) ? ($data->type == 'debit' ? true : false) : true), "class='form-check-input' required") ?>
                                <label class="form-check-label">Kas Masuk</label>
                            </div>
                            <div class="form-check col-sm-6">
                                <?= form_radio(['name' => 'type'], 'credit', (isset($data->type) ? ($data->type == 'credit' ? true : false) : false), "class='form-check-input' required") ?>
                                <label class="form-check-label">Kas Keluar</label>
                            </div>                     
                        </div>                           
                        <?php if (has_error('type')) { ?>
                        <p class="text-danger"><?php echo error('type'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <?= form_label(lang('crud.chart_of_account'), '', ['for' => 'chart_of_account_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('chart_of_account_id', $chart_of_accountItems, old('chart_of_account_id', $data->chart_of_account_id ?? ''), "class='form-control select2' required") ?>
                        <?php if (has_error('chart_of_account_id')) { ?>
                        <p class="text-danger"><?php echo error('chart_of_account_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                

                <div class="row mb-3">
                    <?= form_label(lang('crud.amount'), '', ['for' => 'amount', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('amount', old('amount', $data->amount ?? ''), "class='form-control int' required") ?>
                        <?php if (has_error('amount')) { ?>
                        <p class="text-danger"><?php echo error('amount'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.account'), '', ['for' => 'account_balance_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('account_balance_id', $account_balanceItems, old('account_balance_id', $data->account_balance_id ?? ''), "class='form-control select2' required") ?>
                        <?php if (has_error('account_balance_id')) { ?>
                        <p class="text-danger"><?php echo error('account_balance_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                                
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.balance') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
<?php $this->section('styles') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css'), 'css') ?>
<?php $this->endSection(); ?>
<?php $this->section('scripts') ?>
    <!-- bs-custom-file-input -->    
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js'), 'js') ?>
    
    <script type="text/javascript">
        $(function () {
            $('input[name=transaction_date]').daterangepicker({
                "singleDatePicker": true,
                "autoApply": true,
                "locale": {
                    "format": 'YYYY-MM-DD'
                }                
            });
            $('input[name=amount]').inputmask({
                'alias': 'numeric',
                'groupSeparator': '.',
                'radixPoint': ',',
                'digits': 0, 
                'autoGroup': true
            })
        });            
    </script>
<?php $this->endSection() ?>
