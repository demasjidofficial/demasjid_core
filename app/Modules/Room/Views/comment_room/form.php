<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.comment') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.comment') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.comment') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.comment') ?>?</a>
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
                <?= form_label(lang('crud.room_id'), '', ['for' => 'room_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('room_id', $roomItems, old('room_id', $data->room_id ?? ''), "class='form-control select2'  placeholder='" . lang('crud.room_id') . "' ") ?>
                    <?php if (has_error('room_id')) { ?>
                        <p class="text-danger"><?php echo error('room_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.kritik'), '', ['for' => 'kritik', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('kritik', old('kritik', $data->kritik ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.kritik') . "' ") ?>
                    <?php if (has_error('kritik')) { ?>
                        <p class="text-danger"><?php echo error('kritik'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.saran'), '', ['for' => 'saran', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('saran', old('saran', $data->saran ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.saran') . "' ") ?>
                    <?php if (has_error('saran')) { ?>
                        <p class="text-danger"><?php echo error('saran'); ?></p>
                    <?php } ?>
                </div>
            </div>
        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.comment') ?></button>
        </div>

    </form>

</x-admin-box>

<?php $this->endSection(); ?>