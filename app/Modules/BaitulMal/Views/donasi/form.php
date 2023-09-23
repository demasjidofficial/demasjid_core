<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.donasi') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.donasi') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.donasi') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.donasi') ?>?</a>
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
                    <?= form_label(lang('crud.campaign_id'), '', ['for' => 'campaign_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('campaign_id', $campaignItems, old('campaign_id', $data->campaign_id ?? ''), "class='form-control select2' required disabled placeholder='".lang('crud.campaign_id')."' ") ?>
                        <?php if (has_error('campaign_id')) { ?>
                        <p class="text-danger"><?php echo error('campaign_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.paymentmethod_rek_no'), '', ['for' => 'paymentmethod_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('paymentmethod_id', $paymentMethodRekNoItems, old('paymentmethod_id', $data->paymentmethod_id ?? ''), "class='form-control select2' required disabled placeholder='".lang('crud.paymentmethod_id')."' ") ?>
                        <?php if (has_error('paymentmethod_id')) { ?>
                        <p class="text-danger"><?php echo error('paymentmethod_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.paymentmethod_rek_name'), '', ['for' => 'paymentmethod_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('paymentmethod_id', $paymentMethodRekNameItems, old('paymentmethod_id', $data->paymentmethod_id ?? ''), "class='form-control select2' required disabled placeholder='".lang('crud.paymentmethod_id')."' ") ?>
                        <?php if (has_error('paymentmethod_id')) { ?>
                        <p class="text-danger"><?php echo error('paymentmethod_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.dana_in'), '', ['for' => 'dana_in', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('dana_in', old('dana_in', local_currency($data->dana_in) ?? ''), "class='form-control' disabled required placeholder='".lang('crud.dana_in')."' ") ?>
                        <?php if (has_error('dana_in')) { ?>
                        <p class="text-danger"><?php echo error('dana_in'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.date'), '', ['for' => 'date', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('date', old('date', local_date($data->date) ?? ''), "class='form-control date' required disabled placeholder='".lang('crud.date')."' ") ?>
                        <?php if (has_error('date')) { ?>
                        <p class="text-danger"><?php echo error('date'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.state'), '', ['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('state', old('state', (($data->state == 1) ? "Received" : "Waiting") ?? ''), "class='form-control' required disabled placeholder='".lang('crud.state')."' ") ?>
                        <?php if (has_error('state')) { ?>
                        <p class="text-danger"><?php echo error('state'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>
        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
