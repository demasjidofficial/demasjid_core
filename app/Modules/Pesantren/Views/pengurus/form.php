<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.pengurus') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.pengurus') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.pengurus') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.pengurus') ?>?</a>
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
                        <?= form_textarea('description', old('description', $data->description ?? ''), "rows='4' class='form-control text' required placeholder='".lang('crud.description')."' ") ?>
                        <?php if (has_error('description')) { ?>
                        <p class="text-danger"><?php echo error('description'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.jabatan_id'), '', ['for' => 'jabatan_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('jabatan_id', $jabatanItems, old('jabatan_id', $data->jabatan_id ?? ''), "class='form-control select2' required placeholder='".lang('crud.jabatan_id')."' ") ?>
                        <?php if (has_error('jabatan_id')) { ?>
                        <p class="text-danger"><?php echo error('jabatan_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.address'), '', ['for' => 'address', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('address', old('address', $data->address ?? ''), "class='form-control varchar'  placeholder='".lang('crud.address')."' ") ?>
                        <?php if (has_error('address')) { ?>
                        <p class="text-danger"><?php echo error('address'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.path_image'), '', ['for' => 'path_image', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('path_image', old('path_image', $data->path_image ?? ''), "class='form-control varchar'  placeholder='".lang('crud.path_image')."' ") ?>
                        <?php if (has_error('path_image')) { ?>
                        <p class="text-danger"><?php echo error('path_image'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.telephone'), '', ['for' => 'telephone', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('telephone', old('telephone', $data->telephone ?? ''), "class='form-control varchar'  placeholder='".lang('crud.telephone')."' ") ?>
                        <?php if (has_error('telephone')) { ?>
                        <p class="text-danger"><?php echo error('telephone'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.email'), '', ['for' => 'email', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('email', old('email', $data->email ?? ''), "class='form-control varchar'  placeholder='".lang('crud.email')."' ") ?>
                        <?php if (has_error('email')) { ?>
                        <p class="text-danger"><?php echo error('email'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.provinsi_id'), '', ['for' => 'provinsi_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('provinsi_id', old('provinsi_id', $data->provinsi_id ?? ''), "class='form-control varchar'  placeholder='".lang('crud.provinsi_id')."' ") ?>
                        <?php if (has_error('provinsi_id')) { ?>
                        <p class="text-danger"><?php echo error('provinsi_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.kota_id'), '', ['for' => 'kota_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('kota_id', old('kota_id', $data->kota_id ?? ''), "class='form-control varchar'  placeholder='".lang('crud.kota_id')."' ") ?>
                        <?php if (has_error('kota_id')) { ?>
                        <p class="text-danger"><?php echo error('kota_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.kecamatan_id'), '', ['for' => 'kecamatan_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('kecamatan_id', old('kecamatan_id', $data->kecamatan_id ?? ''), "class='form-control varchar'  placeholder='".lang('crud.kecamatan_id')."' ") ?>
                        <?php if (has_error('kecamatan_id')) { ?>
                        <p class="text-danger"><?php echo error('kecamatan_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.desa_id'), '', ['for' => 'desa_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('desa_id', old('desa_id', $data->desa_id ?? ''), "class='form-control varchar'  placeholder='".lang('crud.desa_id')."' ") ?>
                        <?php if (has_error('desa_id')) { ?>
                        <p class="text-danger"><?php echo error('desa_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.entity_id'), '', ['for' => 'entity_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('entity_id', $entityItems, old('entity_id', $data->entity_id ?? ''), "class='form-control select2'  placeholder='".lang('crud.entity_id')."' ") ?>
                        <?php if (has_error('entity_id')) { ?>
                        <p class="text-danger"><?php echo error('entity_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.pengurus') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
