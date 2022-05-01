<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.rawatib_schedule') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>
        <?= lang('crud.rawatib_schedule') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
<div class="alert danger">
    This <?= lang('crud.rawatib_schedule') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
    <a href="#">Restore <?= lang('crud.rawatib_schedule') ?>?</a>
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
                <?= form_label(lang('crud.name'),'',['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('name', $sholatItems, old('name', $data->name ?? ''), "class='form-control varchar' required placeholder='".lang('crud.name')."' ") ?>
                    <?php if (has_error('name')) { ?>
                    <p class="text-danger"><?php echo error('name'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.pray_time'),'',['for' => 'pray_time', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('pray_time', old('pray_time', $data->pray_time ?? ''), "class='form-control time' required placeholder='".lang('crud.pray_time')."' ") ?>
                    <?php if (has_error('pray_time')) { ?>
                    <p class="text-danger"><?php echo error('pray_time'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.is_automatic'),'',['for' => 'is_automatic', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <div class="form-check">
                        <?php echo form_checkbox(['name' => 'is_automatic'], true, $data->is_automatic ?? false, "class='form-check-input' placeholder='".lang('crud.is_automatic')."' "); ?>
                        <?php if (has_error('is_automatic')) { ?>
                        <p class="text-danger"><?php echo error('is_automatic'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.imam_id'),'',['for' => 'imam_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('imam_id',$imamItems ,old('imam_id', $data->imam_id ?? ''), "class='form-control select2' required placeholder='".lang('crud.imam_id')."' ") ?>
                    <?php if (has_error('imam_id')) { ?>
                    <p class="text-danger"><?php echo error('imam_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i>
                <?= lang('crud.rawatib_schedule') ?></button>
        </div>

    </form>

</x-admin-box>

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<?php echo asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js', 'js'); ?>
<script type="text/javascript">
    $(function () {
        $('input[name=pray_time]').daterangepicker({
            autoApply: true,
            timePicker: true,
            singleDatePicker: true,
            timePicker24Hour: true,
            timePickerIncrement: 1,
            timePickerSeconds: false,
            locale: {
                format: 'HH:mm'
            }
        }).on('show.daterangepicker', function (ev, picker) {
            picker.container.find(".calendar-table").hide();
        });
    });
</script>
<?php $this->endSection(); ?>
