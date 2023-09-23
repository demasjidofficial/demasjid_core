<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.add_new') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.kelas') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.kelas') ?>?</a>
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
                    <?= form_label(lang('crud.name'), '', ['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required placeholder='".lang('crud.name')."' ") ?>
                        <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.description'), '', ['for' => 'description', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('description', old('description', $data->description ?? ''), "class='form-control varchar' required placeholder='".lang('crud.description')."' ") ?>
                        <?php if (has_error('description')) { ?>
                        <p class="text-danger"><?php echo error('description'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.level_id'), '', ['for' => 'level_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('level_id', $tingkat_pendidikanItems, old('level_id', $data->level_id ?? ''), "class='form-control select2' required placeholder='".lang('crud.level_id')."' ") ?>
                        <?php if (has_error('level_id')) { ?>
                        <p class="text-danger"><?php echo error('level_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.capacity'), '', ['for' => 'capacity', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('capacity', old('capacity', $data->capacity ?? ''), "class='form-control int'  placeholder='".lang('crud.capacity')."' ") ?>
                        <?php if (has_error('capacity')) { ?>
                        <p class="text-danger"><?php echo error('capacity'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.duration'), '', ['for' => 'duration', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('duration', old('duration', $data->duration ?? ''), "class='form-control int'  placeholder='".lang('crud.duration')."' ") ?>
                        <?php if (has_error('duration')) { ?>
                        <p class="text-danger"><?php echo error('duration'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.uom_id'), '', ['for' => 'uom_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('uom_id', $uomItems, old('uom_id', $data->uom_id ?? ''), "class='form-control select2' required placeholder='".lang('crud.uom_id')."' ") ?>
                        <?php if (has_error('uom_id')) { ?>
                        <p class="text-danger"><?php echo error('uom_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.entity_id'), '', ['for' => 'entity_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('entity_id', $entityItems, old('entity_id', $data->entity_id ?? ''), "class='form-control select2' required placeholder='".lang('crud.entity_id')."' ") ?>
                        <?php if (has_error('entity_id')) { ?>
                        <p class="text-danger"><?php echo error('entity_id'); ?></p>
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
