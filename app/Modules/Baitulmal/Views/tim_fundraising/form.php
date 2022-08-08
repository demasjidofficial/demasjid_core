<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.tim_fundraising') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.tim_fundraising') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.tim_fundraising') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.tim_fundraising') ?>?</a>
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
                <?= form_label(lang('crud.id_target'), '', ['for' => 'id_target', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('id_target', $targetItems, old('id_target', $data->id_target ?? ''), "class='form-control select2bs4' required") ?>
                    <?php if (has_error('id_target')) { ?>
                        <p class="text-danger"><?php echo error('id_target'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.id_jadwal'), '', ['for' => 'id_jadwal', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('id_jadwal', $jadwalItems, old('id_jadwal', $data->id_jadwal ?? ''), "class='form-control select2bs4' required") ?>
                    <?php if (has_error('id_jadwal')) { ?>
                        <p class="text-danger"><?php echo error('id_jadwal'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.supervisior'), '', ['for' => 'supervisior', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('supervisior', old('supervisior', $data->supervisior ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.supervisior') . "' ") ?>
                    <?php if (has_error('supervisior')) { ?>
                        <p class="text-danger"><?php echo error('supervisior'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.staff'), '', ['for' => 'staff', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('staff', old('staff', $data->staff ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.staff') . "' ") ?>
                    <?php if (has_error('staff')) { ?>
                        <p class="text-danger"><?php echo error('staff'); ?></p>
                    <?php } ?>
                </div>
            </div>
   
        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.tim_fundraising') ?></button>
        </div>

    </form>

</x-admin-box>

<?php $this->endSection(); ?>