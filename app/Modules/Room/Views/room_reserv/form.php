<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.room_reserv') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.room_reserv') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.room_reserv') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.room_reserv') ?>?</a>
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
                <?= form_label(lang('crud.name'), '', ['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.name') . "' ") ?>
                    <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                    <?php } ?>
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
                <?= form_label(lang('crud.room_id'), '', ['for' => 'room_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('room_id', $roomItems, old('room_id', $data->room_id ?? ''), "class='form-control select2'  placeholder='" . lang('crud.room_id') . "' ") ?>
                    <?php if (has_error('room_id')) { ?>
                        <p class="text-danger"><?php echo error('room_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.no_tlp'), '', ['for' => 'no_tlp', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('no_tlp', old('no_tlp', $data->no_tlp ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.no_tlp') . "' ") ?>
                    <?php if (has_error('no_tlp')) { ?>
                        <p class="text-danger"><?php echo error('no_tlp'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.alamat'), '', ['for' => 'alamat', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('alamat', old('alamat', $data->alamat ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.alamat') . "' ") ?>
                    <?php if (has_error('alamat')) { ?>
                        <p class="text-danger"><?php echo error('alamat'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.start_date'), '', ['for' => 'start_date', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('start_date', old('start_date', $data->start_date ?? ''), "class='form-control date' required placeholder='" . lang('crud.start_date') . "' ") ?>
                    <?php if (has_error('start_date')) { ?>
                        <p class="text-danger"><?php echo error('start_date'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.end_date'), '', ['for' => 'end_date', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('end_date', old('end_date', $data->end_date ?? ''), "class='form-control date' required placeholder='" . lang('crud.end_date') . "' ") ?>
                    <?php if (has_error('end_date')) { ?>
                        <p class="text-danger"><?php echo error('end_date'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.agenda'), '', ['for' => 'agenda', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('agenda', old('agenda', $data->agenda ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.agenda') . "' ") ?>
                    <?php if (has_error('agenda')) { ?>
                        <p class="text-danger"><?php echo error('agenda'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.keterangan'), '', ['for' => 'keterangan', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('keterangan', old('keterangan', $data->keterangan ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.keterangan') . "' ") ?>
                    <?php if (has_error('keterangan')) { ?>
                        <p class="text-danger"><?php echo error('keterangan'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.status'), '', ['for' => 'status', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('status', $stateItems, old('status', $data->status ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.status') . "' ") ?>
                    <?php if (has_error('status')) { ?>
                        <p class="text-danger"><?php echo error('status'); ?></p>
                    <?php } ?>
                </div>
            </div>

        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.room_reserv') ?></button>
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
        $('input[name=start_date]').daterangepicker({
            "autoApply": true,
            "singleDatePicker": true,
            "locale": {
                "format": 'YYYY-MM-DD'
            }
        });

        $('input[name=end_date]').daterangepicker({
            "autoApply": true,
            "singleDatePicker": true,
            "locale": {
                "format": 'YYYY-MM-DD'
            }
        });
    });
</script>
<?php $this->endSection(); ?>