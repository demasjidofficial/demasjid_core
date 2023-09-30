<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.jadwal_fundraising') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.jadwal_fundraising') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.jadwal_fundraising') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.jadwal_fundraising') ?>?</a>
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
                <?= form_label(lang('crud.jadwal_durasi'), '', ['for' => 'jadwal_durasi', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('jadwal_durasi', old('jadwal_durasi', $data->jadwal_durasi ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.jadwal_durasi') . "' ") ?>
                    <?php if (has_error('jadwal_durasi')) { ?>
                        <p class="text-danger"><?php echo error('jadwal_durasi'); ?></p>
                    <?php } ?>
                </div>
            </div>

            <div class="row mb-3">
                <?= form_label(lang('crud.target_dana'), '', ['for' => 'target_dana', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('target_dana', old('target_dana', $data->target_dana ?? ''), "class='form-control int' required placeholder='" . lang('crud.target_dana') . "' ") ?>
                    <?php if (has_error('target_dana')) { ?>
                        <p class="text-danger"><?php echo error('target_dana'); ?></p>
                    <?php } ?>
                </div>
            </div>

        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.jadwal_fundraising') ?></button>
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
        $('input[name=jadwal_durasi]').daterangepicker({
            "locale": {
                "format": 'DD/MM/YY'
            }
        });


        bsCustomFileInput.init();
        $('input[name=target_dana]').inputmask({
            'alias': 'currency',
            'rightAlign': false,
            'digits': '0', 
            'allowMinus': 'false',               
        });

    });
</script>
<?php $this->endSection(); ?>