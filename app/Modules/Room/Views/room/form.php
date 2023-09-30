<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.room') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.room') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.room') ?>?</a>
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
                    <?php if (isset($data->gambar)) : ?>
                        <div class="justify-content-center photo-wrapper">
                            <img src="<?= site_url($data->gambar) ?>" alt="" class="img-thumbnail" style="height:150px">
                        </div>
                    <?php endif ?>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <?php echo form_upload('image', old('image', $data->gambar ?? ''), "class='custom-file-input'  placeholder='" . lang('crud.path_image') . "' accept='image/*' " . (!isset($data->gambar) ? 'required' : '')) ?>
                                <label class="custom-file-label">Pilih Gambar Ruangan</label>
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
                <?= form_label(lang('crud.name'), '', ['for' => 'nama', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('nama', old('nama', $data->nama ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.name') . "' ") ?>
                    <?php if (has_error('nama')) { ?>
                        <p class="text-danger"><?php echo error('nama'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.description'), '', ['for' => 'keterangan', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('keterangan', old('keterangan', $data->keterangan ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.description') . "' ") ?>
                    <?php if (has_error('keterangan')) { ?>
                        <p class="text-danger"><?php echo error('keterangan'); ?></p>
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

<?php $this->section('scripts'); ?>
<!-- bs-custom-file-input -->
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js'), 'js') ?>
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/select2/js/select2.js'), 'js') ?>
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js'), 'js') ?>
<script type="text/javascript">
    $(function() {

        bsCustomFileInput.init();
        $('input:file').change(function() {
            var i = $(this).prev('label').clone();
            var file = $(this).get(0).files[0].name;
            $(this).prev('label').text(file);
        });
    });
</script>
<?php $this->endSection(); ?>