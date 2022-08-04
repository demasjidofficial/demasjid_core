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
                    <?= form_label(lang('crud.campaign_id'),'',['for' => 'campaign_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('campaign_id',$campaignItems ,old('campaign_id', $data->campaign_id ?? ''), "class='form-control select2' required placeholder='".lang('crud.campaign_id')."' ") ?>
                        <?php if (has_error('campaign_id')) { ?>
                        <p class="text-danger"><?php echo error('campaign_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.donatur_id'),'',['for' => 'donatur_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('donatur_id',$donaturItems ,old('donatur_id', $data->donatur_id ?? ''), "class='form-control select2' required placeholder='".lang('crud.donatur_id')."' ") ?>
                        <?php if (has_error('donatur_id')) { ?>
                        <p class="text-danger"><?php echo error('donatur_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.paymentmethod_id'),'',['for' => 'paymentmethod_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('paymentmethod_id',$paymentMethodItems ,old('paymentmethod_id', $data->paymentmethod_id ?? ''), "class='form-control select2' required placeholder='".lang('crud.paymentmethod_id')."' ") ?>
                        <?php if (has_error('paymentmethod_id')) { ?>
                        <p class="text-danger"><?php echo error('paymentmethod_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.dana_in'),'',['for' => 'dana_in', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('dana_in', old('dana_in', $data->dana_in ?? ''), "class='form-control int' required placeholder='".lang('crud.dana_in')."' ") ?>
                        <?php if (has_error('dana_in')) { ?>
                        <p class="text-danger"><?php echo error('dana_in'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.date'),'',['for' => 'date', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('date', old('date', $data->date ?? ''), "class='form-control date' required placeholder='".lang('crud.date')."' ") ?>
                        <?php if (has_error('date')) { ?>
                        <p class="text-danger"><?php echo error('date'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.path_image'),'',['for' => 'path_image', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('path_image', old('path_image', $data->path_image ?? ''), "class='form-control blob' required placeholder='".lang('crud.path_image')."' ") ?>
                        <?php if (has_error('path_image')) { ?>
                        <p class="text-danger"><?php echo error('path_image'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.state'),'',['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('state', old('state', $data->state ?? ''), "class='form-control blob' required placeholder='".lang('crud.state')."' ") ?>
                        <?php if (has_error('state')) { ?>
                        <p class="text-danger"><?php echo error('state'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.donasi') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
