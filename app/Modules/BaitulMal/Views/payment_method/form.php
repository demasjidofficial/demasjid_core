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
                    <?= form_label(lang('crud.id_bank'),'',['for' => 'id_bank', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('id_bank',$bankItems ,old('id_bank', $data->id_bank ?? ''), "class='form-control select2' required placeholder='".lang('crud.id_bank')."' ") ?>
                        <?php if (has_error('id_bank')) { ?>
                        <p class="text-danger"><?php echo error('id_bank'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.no_rek'),'',['for' => 'no_rek', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('no_rek', old('no_rek', $data->no_rek ?? ''), "class='form-control int'  placeholder='".lang('crud.no_rek')."' ") ?>
                        <?php if (has_error('no_rek')) { ?>
                        <p class="text-danger"><?php echo error('no_rek'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.nama_rek'),'',['for' => 'nama_rek', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('nama_rek', old('nama_rek', $data->nama_rek ?? ''), "class='form-control varchar'  placeholder='".lang('crud.nama_rek')."' ") ?>
                        <?php if (has_error('nama_rek')) { ?>
                        <p class="text-danger"><?php echo error('nama_rek'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.id_payment_category'),'',['for' => 'id_payment_category', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('id_payment_category',$payment_categoryItems ,old('id_payment_category', $data->id_payment_category ?? ''), "class='form-control select2' required placeholder='".lang('crud.id_payment_category')."' ") ?>
                        <?php if (has_error('id_payment_category')) { ?>
                        <p class="text-danger"><?php echo error('id_payment_category'); ?></p>
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
