<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.settings') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.settings') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.settings') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.settings') ?>?</a>
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
                    <?= form_label(lang('crud.class'), '', ['for' => 'class', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('class', old('class', $data->class ?? ''), "class='form-control varchar' required placeholder='".lang('crud.class')."' ") ?>
                        <?php if (has_error('class')) { ?>
                        <p class="text-danger"><?php echo error('class'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.key'), '', ['for' => 'key', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('key', old('key', $data->key ?? ''), "class='form-control varchar' required placeholder='".lang('crud.key')."' ") ?>
                        <?php if (has_error('key')) { ?>
                        <p class="text-danger"><?php echo error('key'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.value'), '', ['for' => 'value', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_textarea('value', old('value', $data->value ?? ''), "rows='4' class='form-control text'  placeholder='".lang('crud.value')."' ") ?>
                        <?php if (has_error('value')) { ?>
                        <p class="text-danger"><?php echo error('value'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.type'), '', ['for' => 'type', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('type', old('type', $data->type ?? ''), "class='form-control varchar' required placeholder='".lang('crud.type')."' ") ?>
                        <?php if (has_error('type')) { ?>
                        <p class="text-danger"><?php echo error('type'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.context'), '', ['for' => 'context', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('context', old('context', $data->context ?? ''), "class='form-control varchar'  placeholder='".lang('crud.context')."' ") ?>
                        <?php if (has_error('context')) { ?>
                        <p class="text-danger"><?php echo error('context'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.settings') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
