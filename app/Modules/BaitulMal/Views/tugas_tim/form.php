<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.tugas_tim') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.tugas_tim') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.tugas_tim') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.tugas_tim') ?>?</a>
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
                    <?= form_label(lang('crud.id_staff'),'',['for' => 'id_staff', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('id_staff', old('id_staff', $data->id_staff ?? ''), "class='form-control int' required placeholder='".lang('crud.id_staff')."' ") ?>
                        <?php if (has_error('id_staff')) { ?>
                        <p class="text-danger"><?php echo error('id_staff'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.tugas'),'',['for' => 'tugas', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('tugas', old('tugas', $data->tugas ?? ''), "class='form-control varchar' required placeholder='".lang('crud.tugas')."' ") ?>
                        <?php if (has_error('tugas')) { ?>
                        <p class="text-danger"><?php echo error('tugas'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.nominal'),'',['for' => 'nominal', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('nominal', old('nominal', $data->nominal ?? ''), "class='form-control int' required placeholder='".lang('crud.nominal')."' ") ?>
                        <?php if (has_error('nominal')) { ?>
                        <p class="text-danger"><?php echo error('nominal'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.created_by'),'',['for' => 'created_by', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('created_by', old('created_by', $data->created_by ?? ''), "class='form-control int'  placeholder='".lang('crud.created_by')."' ") ?>
                        <?php if (has_error('created_by')) { ?>
                        <p class="text-danger"><?php echo error('created_by'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.updated_by'),'',['for' => 'updated_by', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('updated_by', old('updated_by', $data->updated_by ?? ''), "class='form-control int'  placeholder='".lang('crud.updated_by')."' ") ?>
                        <?php if (has_error('updated_by')) { ?>
                        <p class="text-danger"><?php echo error('updated_by'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.tugas_tim') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
