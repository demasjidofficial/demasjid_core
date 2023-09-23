<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.nominal_target') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.nominal_target') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.nominal_target') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.nominal_target') ?>?</a>
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
                    <?= form_label(lang('crud.staff_id'), '', ['for' => 'staff_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('staff_id', old('staff_id', $data->staff_id ?? ''), "class='form-control int' required placeholder='".lang('crud.staff_id')."' ") ?>
                        <?php if (has_error('staff_id')) { ?>
                        <p class="text-danger"><?php echo error('staff_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.terkumpul_nominal'), '', ['for' => 'terkumpul_nominal', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('terkumpul_nominal', old('terkumpul_nominal', $data->terkumpul_nominal ?? ''), "class='form-control int' required placeholder='".lang('crud.terkumpul_nominal')."' ") ?>
                        <?php if (has_error('terkumpul_nominal')) { ?>
                        <p class="text-danger"><?php echo error('terkumpul_nominal'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.target_nominal'), '', ['for' => 'target_nominal', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('target_nominal', old('target_nominal', $data->target_nominal ?? ''), "class='form-control int'  placeholder='".lang('crud.target_nominal')."' ") ?>
                        <?php if (has_error('target_nominal')) { ?>
                        <p class="text-danger"><?php echo error('target_nominal'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.created_by'), '', ['for' => 'created_by', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('created_by', old('created_by', $data->created_by ?? ''), "class='form-control varchar'  placeholder='".lang('crud.created_by')."' ") ?>
                        <?php if (has_error('created_by')) { ?>
                        <p class="text-danger"><?php echo error('created_by'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.updated_by'), '', ['for' => 'updated_by', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('updated_by', old('updated_by', $data->updated_by ?? ''), "class='form-control varchar'  placeholder='".lang('crud.updated_by')."' ") ?>
                        <?php if (has_error('updated_by')) { ?>
                        <p class="text-danger"><?php echo error('updated_by'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.nominal_target') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
