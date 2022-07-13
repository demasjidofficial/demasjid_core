<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.donatur') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.donatur') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.donatur') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.donatur') ?>?</a>
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
                    <?= form_label(lang('crud.id_donatur_type'),'',['for' => 'id_donatur_type', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('id_donatur_type',$donaturTypeItems ,old('id_donatur_type', $data->id_donatur_type ?? ''), "class='form-control select2' required placeholder='".lang('crud.id_donatur_type')."' ") ?>
                        <?php if (has_error('id_donatur_type')) { ?>
                        <p class="text-danger"><?php echo error('id_donatur_type'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.email'),'',['for' => 'email', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('email', old('email', $data->email ?? ''), "class='form-control varchar'  placeholder='".lang('crud.email')."' ") ?>
                        <?php if (has_error('email')) { ?>
                        <p class="text-danger"><?php echo error('email'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.no_hp'),'',['for' => 'no_hp', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('no_hp', old('no_hp', $data->no_hp ?? ''), "class='form-control varchar'  placeholder='".lang('crud.no_hp')."' ") ?>
                        <?php if (has_error('no_hp')) { ?>
                        <p class="text-danger"><?php echo error('no_hp'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.alamat'),'',['for' => 'alamat', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('alamat', old('alamat', $data->alamat ?? ''), "class='form-control varchar'  placeholder='".lang('crud.alamat')."' ") ?>
                        <?php if (has_error('alamat')) { ?>
                        <p class="text-danger"><?php echo error('alamat'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.donatur') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
