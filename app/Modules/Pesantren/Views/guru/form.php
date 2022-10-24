<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.add_new') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.guru') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.guru') ?>?</a>
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
                <?= form_label(lang('crud.path_image'), '', ['for' => 'path_image', 'class' => 'col-form-label col-sm-2']) ?>

                <div class="col-md-10">
                    <?php if (isset($data->path_image)) : ?>
                        <div class="justify-content-center photo-wrapper">
                            <img src="<?= site_url($data->path_image) ?>" alt="" class="img-thumbnail" style="height:150px">
                        </div>
                    <?php endif ?>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <?php echo form_upload('image', old('image', $data->path_image ?? ''), "class='custom-file-input'  placeholder='" . lang('crud.path_image') . "' accept='image/*' " . (!isset($data->path_image) ? 'required' : '')) ?>
                                <label class="custom-file-label">Pilih Photo</label>

                                <?php if (has_error('path_image')) { ?>
                                    p class="text-danger"><?php echo error('path_image'); ?></p>
                                <?php } ?>
                            </div>
                            <div class="input-group-append clickable">
                                <span class="input-group-text">
                                    <i class="fas fa-camera"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.name'), '', ['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.name') . "' ") ?>
                    <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.nip'), '', ['for' => 'nip', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('nip', old('nip', $data->nip ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.nip') . "' ") ?>
                    <?php if (has_error('nip')) { ?>
                        <p class="text-danger"><?php echo error('nip'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.gender'), '', ['for' => 'jns_kelamin', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('jns_kelamin', $genderItems, old('jns_kelamin', $data->jns_kelamin ?? ''), "class='form-control char' required placeholder='" . lang('crud.gender') . "' ") ?>
                    <?php if (has_error('jns_kelamin')) { ?>
                        <p class="text-danger">
                            <?php echo error('jns_kelamin'); ?>
                        </p>
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