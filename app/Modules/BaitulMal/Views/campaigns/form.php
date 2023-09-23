<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.campaigns') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.campaigns') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.campaigns') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.campaigns') ?>?</a>
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
                    <?= form_label(lang('crud.id_program'), '', ['for' => 'id_program', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('id_program', $programItems, old('id_program', $data->id_program ?? ''), "class='form-control select2' required placeholder='".lang('crud.id_program')."' ") ?>
                        <?php if (has_error('id_program')) { ?>
                        <p class="text-danger"><?php echo error('id_program'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.status'), '', ['for' => 'status', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('status', old('status', $data->status ?? ''), "class='form-control varchar'  placeholder='".lang('crud.status')."' ") ?>
                        <?php if (has_error('status')) { ?>
                        <p class="text-danger"><?php echo error('status'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.is_active'), '', ['for' => 'is_active', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('is_active', old('is_active', $data->is_active ?? ''), "class='form-control varchar'  placeholder='".lang('crud.is_active')."' ") ?>
                        <?php if (has_error('is_active')) { ?>
                        <p class="text-danger"><?php echo error('is_active'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.is_delete'), '', ['for' => 'is_delete', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('is_delete', old('is_delete', $data->is_delete ?? ''), "class='form-control varchar'  placeholder='".lang('crud.is_delete')."' ") ?>
                        <?php if (has_error('is_delete')) { ?>
                        <p class="text-danger"><?php echo error('is_delete'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.created_by'), '', ['for' => 'created_by', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('created_by', old('created_by', $data->created_by ?? ''), "class='form-control int'  placeholder='".lang('crud.created_by')."' ") ?>
                        <?php if (has_error('created_by')) { ?>
                        <p class="text-danger"><?php echo error('created_by'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.create_date'), '', ['for' => 'create_date', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('create_date', old('create_date', $data->create_date ?? ''), "class='form-control datetime' required placeholder='".lang('crud.create_date')."' ") ?>
                        <?php if (has_error('create_date')) { ?>
                        <p class="text-danger"><?php echo error('create_date'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.modified_by'), '', ['for' => 'modified_by', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('modified_by', old('modified_by', $data->modified_by ?? ''), "class='form-control int'  placeholder='".lang('crud.modified_by')."' ") ?>
                        <?php if (has_error('modified_by')) { ?>
                        <p class="text-danger"><?php echo error('modified_by'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.modified_date'), '', ['for' => 'modified_date', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('modified_date', old('modified_date', $data->modified_date ?? ''), "class='form-control datetime' required placeholder='".lang('crud.modified_date')."' ") ?>
                        <?php if (has_error('modified_date')) { ?>
                        <p class="text-danger"><?php echo error('modified_date'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.save') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
