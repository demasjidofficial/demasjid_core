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
                <?= form_label(lang('crud.staff'), '', ['for' => 'staff_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?php echo form_dropdown('staff_id', $staffItems, old('staff_id', $data->staff_id ?? ''), "class='form-control varchar' readonly required placeholder='" . lang('crud.staff') . "' "); ?>
                    <?php if (has_error('user_id')) { ?>
                        <p class="text-danger"><?php echo error('staff_id'); ?></p>
                    <?php } ?>
                </div>
            </div>


            <div class="row mb-3">
                <?= form_label(lang('crud.tugas'), '', ['for' => 'tugas', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('tugas', old('tugas', $data->tugas ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.tugas') . "' ") ?>
                    <?php if (has_error('tugas')) { ?>
                        <p class="text-danger"><?php echo error('tugas'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.nominal_target'), '', ['for' => 'nominal_target', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('nominal_target', old('nominal_target', $data->nominal_target ?? ''), "class='form-control numeric'  placeholder='" . lang('crud.nominal_target') . "' ") ?>
                    <?php if (has_error('nominal_target')) { ?>
                        <p class="text-danger"><?php echo error('nominal_target'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.nominal_dapat'), '', ['for' => 'nominal', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('nominal', old('nominal', $data->nominal ?? ''), "class='form-control numeric' required placeholder='" . lang('crud.nominal_dapat') . "' ") ?>
                    <?php if (has_error('nominal')) { ?>
                        <p class="text-danger"><?php echo error('nominal'); ?></p>
                    <?php } ?>
                </div>
            </div>

            <div class="row mb-3">
                <?= form_label(lang('crud.progres'), '', ['for' => 'progres', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <div class="col-sm-10">
                        <?php echo form_dropdown('progres', $stateItems, old('progres', $data->progres ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.progres') . "' "); ?>
                        <?php if (has_error('progres')) { ?>
                            <p class="text-danger"><?php echo error('progres'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.save') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>

<?php $this->section('styles') ?>
<?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css', 'css') ?>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<?php echo asset_link('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js', 'js'); ?>
<?php echo asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js', 'js'); ?>
<script type="text/javascript">
     
   
    $(function() {


        $('.numeric').inputmask({
            'alias': 'numeric',
            'groupSeparator': '.',
            'radixPoint': ',',
            'digits': 0,
            'autoGroup': true
        })
    });

    function addRow(elm) {
        const _topParent = $(elm).closest('.input-group');
        const _clone = _topParent.clone();
        _clone.find('input').val('');

        _clone.find('span.input-group-text')
            .replaceWith(`<span class="input-group-text" role="button" onclick="removeRow(this)">
                                <i class="fas fa-minus"></i>
                            </span>`);
        _clone.insertBefore(_topParent.siblings('.input-group:last'));
    }

    function removeRow(elm) {
        const _topParent = $(elm).closest('.input-group')
        const _elmOther = _topParent.prev()
        _topParent.remove();

    }
</script>
<?php $this->endSection(); ?>
