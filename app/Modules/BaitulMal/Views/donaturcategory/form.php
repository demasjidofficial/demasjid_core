<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <div class="row de_head_back_title">
        <div class="col">
        <a href="#" class="back" onclick="history.back()">&larr; <?= lang('crud.back') ?></a></br>
        <h2><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '' ?> <?= lang('crud.tambah_donaturcategory') ?></h2>
        </div>
    </div>
    <!--<a href="<?php echo $backUrl ?>" class="back">&larr; Ubah Kategori</a>-->
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.donaturcategory') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.donaturcategory') ?>?</a>
    </div>
<?php } ?>


<x-admin-box>


    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.donaturcategory') ?></h4>
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
                    <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.name') . "' ") ?>
                    <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.label'), '', ['for' => 'label', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('label', old('label', $data->label ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.label') . "' ") ?>
                    <?php if (has_error('label')) { ?>
                        <p class="text-danger"><?php echo error('label'); ?></p>
                    <?php } ?>
                </div>
            </div>

        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> <?= lang('crud.save') ?></button>
        </div>

    </form>

</x-admin-box>

<?php $this->endSection(); ?>