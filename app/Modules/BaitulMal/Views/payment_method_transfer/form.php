<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.payment_method') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.payment_method') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.payment_method') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.payment_method') ?>?</a>
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
                    <?= form_label(lang('crud.bank'),'',['for' => 'master_payment_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('master_payment_id',$bankItems ,old('master_payment_id', $data->master_payment_id ?? ''), "class='form-control select2' required ") ?>
                        <?php if (has_error('master_payment_id')) { ?>
                        <p class="text-danger"><?php echo error('master_payment_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.rek_no'),'',['for' => 'rek_no', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('rek_no', old('rek_no', $data->rek_no ?? ''), "class='form-control int'  placeholder='".lang('crud.rek_no')."' ") ?>
                        <?php if (has_error('rek_no')) { ?>
                        <p class="text-danger"><?php echo error('rek_no'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.rek_name'),'',['for' => 'rek_name', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('rek_name', old('rek_name', $data->rek_name ?? ''), "class='form-control varchar'  placeholder='".lang('crud.rek_name')."' ") ?>
                        <?php if (has_error('rek_name')) { ?>
                        <p class="text-danger"><?php echo error('rek_name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.payment_method') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
