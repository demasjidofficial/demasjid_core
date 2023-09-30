<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.infaq_room') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.infaq_room') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.infaq_room') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.infaq_room') ?>?</a>
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
                <?= form_label(lang('crud.namapemesan'), '', ['for' => 'nama_pemesan', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('nama_pemesan', old('nama_pemesan', $data->nama_pemesan ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.namapemesan') . "' ") ?>
                    <?php if (has_error('nama_pemesan')) { ?>
                        <p class="text-danger"><?php echo error('nama_pemesan'); ?></p>
                    <?php } ?>
                </div>
            </div>
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
                <?= form_label(lang('crud.infaq_date'), '', ['for' => 'tanggal_infaq', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('tanggal_infaq', old('tanggal_infaq', $data->tanggal_infaq ?? ''), "class='form-control date' required placeholder='" . lang('crud.infaq_date') . "' ") ?>
                    <?php if (has_error('tanggal_infaq')) { ?>
                        <p class="text-danger"><?php echo error('tanggal_infaq'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.jumlahInfaq'), '', ['for' => 'jumlah_infaq', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('jumlah_infaq', old('jumlah_infaq', $data->jumlah_infaq ?? ''), "class='form-control number' required placeholder='" . lang('crud.jumlahInfaq') . "' ") ?>
                    <?php if (has_error('jumlah_infaq')) { ?>
                        <p class="text-danger"><?php echo error('jumlah_infaq'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.state'), '', ['for' => 'status', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('status', $stateItems, old('status', $data->status ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.state') . "' ") ?>
                    <?php if (has_error('status')) { ?>
                        <p class="text-danger"><?php echo error('status'); ?></p>
                    <?php } ?>
                </div>
            </div>
        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.infaq_room') ?></button>
        </div>

    </form>

</x-admin-box>
<?php $this->endSection(); ?>
<?php $this->section('styles') ?>
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css'), 'css') ?>
<?php $this->endSection(); ?>
<?php $this->section('scripts'); ?>
<?php echo assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js'), 'js'); ?>
<!-- bs-custom-file-input -->
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js'), 'js') ?>
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/select2/js/select2.js'), 'js') ?>
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js'), 'js') ?>
<script type="text/javascript">
    $(function() {
        $('input[name=tanggal_infaq]').daterangepicker({
            "autoApply": true,
            "singleDatePicker": true,
            "locale": {
                "format": 'YYYY-MM-DD'
            }
        });

        bsCustomFileInput.init();
        $('input:file').change(function() {
            var i = $(this).prev('label').clone();
            var file = $(this).get(0).files[0].name;
            $(this).prev('label').text(file);
        });
        $('input[name=jumlah_infaq]').inputmask({
            'alias': 'currency',
            'rightAlign': false,
            'digits': '0',
            'allowMinus': 'false',
            'groupSeparator': '.',
        });
    });
</script>
<?php $this->endSection(); ?>