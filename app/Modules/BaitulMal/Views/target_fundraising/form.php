<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.target_fundraising') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.target_fundraising') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.target_fundraising') ?>?</a>
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
                <?= form_label(lang('crud.campaign'), '', ['for' => 'campaign', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('campaign', $donationcampaign, old('campaign', $data->campaign ?? ''), "class='form-control select2bs4' required") ?>
                    <?php if (has_error('campaign')) { ?>
                        <p class="text-danger"><?php echo error('campaign'); ?></p>
                    <?php } ?>
                </div>
            </div>

            <div class="row mb-3">
                <?= form_label(lang('crud.donatur'), '', ['for' => 'donatur', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('donatur', $tipedonatur, old('donatur', $data->donatur ?? ''), "class='form-control select2bs4' required") ?>
                    <?php if (has_error('donatur')) { ?>
                        <p class="text-danger"><?php echo error('donatur'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.campaign_name'), '', ['for' => 'campaign_name', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('campaign_name', old('campaign_name', $data->campaign_name ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.campaign_name') . "' ") ?>
                    <?php if (has_error('campaign_name')) { ?>
                        <p class="text-danger"><?php echo error('campaign_name'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.tipe_donasi'), '', ['for' => 'tipe_donasi', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('tipe_donasi', $donationtypeItems, old('tipe_donasi', $data->tipe_donasi ?? ''), "class='form-control select2bs4' required") ?>
                    <?php if (has_error('tipe_donasi')) { ?>
                        <p class="text-danger"><?php echo error('tipe_donasi'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.target_nominal'), '', ['for' => 'target_nominal', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('target_nominal', old('target_nominal', $data->target_nominal ?? ''), "class='form-control numeric' required placeholder='" . lang('crud.target_nominal') . "' ") ?>
                    <?php if (has_error('target_nominal')) { ?>
                        <p class="text-danger"><?php echo error('target_nominal'); ?></p>
                    <?php } ?>
                </div>
            </div>


         
            <div class="row mb-3">
                <?= form_label(lang('crud.jadwal_durasi'), '', ['for' => 'jadwal_durasi', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('jadwal_durasi', old('jadwal_durasi', $data->jadwal_durasi ?? ''), "class='form-control date' required placeholder='" . lang('crud.jadwal_durasi') . "' ") ?>
                    <?php if (has_error('jadwal_durasi')) { ?>
                        <p class="text-danger"><?php echo error('jadwal_durasi'); ?></p>
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
<?php $this->section('styles') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css'), 'css') ?>
<?php $this->endSection(); ?>
<?php $this->section('scripts'); ?>
<?php echo assetUrlLink(assetUrl('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js'), 'js'); ?>
<!-- bs-custom-file-input -->
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js'), 'js') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/select2/js/select2.js'), 'js') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js'), 'js') ?>
<script type="text/javascript">
    $(function() {
     

        $('input[name=jadwal_durasi]').daterangepicker({
            "locale": {
                "format": 'DD/MM/YY'
            }
        });
        
        bsCustomFileInput.init();
        
        
        $('.numeric').inputmask({
            'alias': 'numeric',
            'groupSeparator': '.',
            'radixPoint': ',',
            'digits': 0,
            'autoGroup': true
        })

        $('select[name="campaign"]').change(function() {
            $('input[name="campaign_name"]').val(parseInt(this.value) ? $('select[name="campaign"] option:selected').text() : '');
        });

    });
</script>
<?php $this->endSection(); ?>