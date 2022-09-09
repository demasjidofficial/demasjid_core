<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="#" class="back" onclick="history.back()">&larr; <?= lang('crud.back') ?></a>

    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.tim_staff') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.tim_staff') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.tim_staff') ?>?</a>
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
                <?= form_label(lang('crud.nama_tim'), '', ['for' => 'tim_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?php echo form_dropdown('tim_id', $timItems, old('tim_id', $data->tim_id ?? ''), "class='form-control varchar' readonly required placeholder='" . lang('crud.nama_tim') . "' "); ?>
                    <?php if (has_error('tim_id')) { ?>
                        <p class="text-danger"><?php echo error('tim_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.staff'), '', ['for' => 'user_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?php echo form_dropdown('user_id', $staffItems, old('user_id', $data->user_id ?? ''), "class='form-control varchar' readonly required placeholder='" . lang('crud.staff') . "' "); ?>
                    <?php if (has_error('user_id')) { ?>
                        <p class="text-danger"><?php echo error('user_id'); ?></p>
                    <?php } ?>
                </div>
            </div>

            <div class="row mb-3">
                <?php echo form_label(lang('crud.tugas'), '', ['for' => 'tugas', 'class' => 'col-form-label col-sm-2']); ?>
                <div class="col-sm-10 block_detail_program">
                    <?php if (isset($tugasItems) && !empty($tugasItems)) { ?>
                        <?php foreach ($tugasItems as $index => $detail) { ?>
                            <div class="input-group mb-2">
                                <?php echo form_input('tugasItems[tugas][]', old('tugasItems[tugas]', $detail->tugas ?? ''), "class='form-control mr-1' placeholder='deskripsi' required"); ?>

                                <div class="input-group-append">
                                    <?php if (!$index) {
                                        echo '<span class="input-group-text" role="button" onclick="addRow(this)">
                                        <i class="fas fa-plus"></i>
                                    </span>';
                                    } else {
                                        echo '<span class="input-group-text" role="button" onclick="removeRow(this)">
                                        <i class="fas fa-minus"></i>
                                    </span>';
                                    }
                                    ?>

                                </div>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <div class="input-group mb-2">
                            <?php echo form_input('tugasItems[tugas][]', old('tugasItems[tugas]', $data->tugas ?? ''), "class='form-control mr-1' placeholder='tugas tim' required"); ?>

                            <div class="input-group-append">
                                <span class="input-group-text" role="button" onclick="addRow(this)">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="input-group mb-2">

                    </div>
                    <?php echo form_hidden('tugas', $data->staff ?? 0); ?>

                    <?php if (has_error('tugas')) { ?>
                        <p class="text-danger"><?php echo error('tugas'); ?></p>
                    <?php } ?>
                </div>
            </div>
        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i>
                <?php echo lang('app.save'); ?></button>
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
        $('input[name=period]').daterangepicker({
            "autoApply": true,
            "locale": {
                "format": 'YYYY-MM-DD'
            }
        });

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