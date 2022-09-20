<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.room') ?></a>
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
                <?= form_label(lang('crud.gambar'), '', ['for' => 'gambar', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <!-- < ?= form_input('gambar', old('gambar', $data->gambar ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.gambar') . "' ") ?>
                    < ?php if (has_error('gambar')) { ?>
                        <p class="text-danger">< ?php echo error('gambar'); ?></p>
                    < ?php } ?> -->

                    <div class="col-md-6">
                        <div class="justify-content-center photo-wrapper">
                            <img id="campaign_imgpreview" src="<?= (isset($data->gambar)) ? site_url($data->gambar) : '/uploads/images/blank.jpg' ?>" alt="" class="img-thumbnail">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <?= form_upload('image', old('image', $data->gambar ?? ''), "class='custom-file-input' id='campaign_imginput' placeholder='" . lang('crud.path_image') . "' accept='image/*' " . (!isset($data->gambar) ? 'required' : '')) ?>
                                    <label class="custom-file-label">Pilih gambar ruangan</label>
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
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.namaruangan'), '', ['for' => 'namaruangan', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('namaruangan', old('namaruangan', $data->namaruangan ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.namaruangan') . "' ") ?>
                    <?php if (has_error('namaruangan')) { ?>
                        <p class="text-danger"><?php echo error('namaruangan'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.description'), '', ['for' => 'deskripsi', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('deskripsi', old('deskripsi', $data->deskripsi ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.description') . "' ") ?>
                    <?php if (has_error('deskripsi')) { ?>
                        <p class="text-danger"><?php echo error('deskripsi'); ?></p>
                    <?php } ?>
                </div>
            </div>

        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.room') ?></button>
        </div>

    </form>

</x-admin-box>

<?php $this->endSection(); ?>