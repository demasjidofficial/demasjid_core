<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.non_rawatib_schedule_clone') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.non_rawatib_schedule_clone') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.non_rawatib_schedule_clone') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.non_rawatib_schedule_clone') ?>?</a>
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
                    <?= form_label(lang('crud.type_sholat'),'',['for' => 'type_sholat', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('type_sholat', old('type_sholat', $data->type_sholat ?? ''), "class='form-control varchar' required placeholder='".lang('crud.type_sholat')."' ") ?>
                        <?php if (has_error('type_sholat')) { ?>
                        <p class="text-danger"><?php echo error('type_sholat'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.name'),'',['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar'  placeholder='".lang('crud.name')."' ") ?>
                        <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.pray_date'),'',['for' => 'pray_date', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('pray_date', old('pray_date', $data->pray_date ?? ''), "class='form-control date' required placeholder='".lang('crud.pray_date')."' ") ?>
                        <?php if (has_error('pray_date')) { ?>
                        <p class="text-danger"><?php echo error('pray_date'); ?></p>
                        <?php } ?>
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
                <div class="row mb-3">
                    <?= form_label(lang('crud.khotib_id'),'',['for' => 'khotib_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('khotib_id',$imamItems ,old('khotib_id', $data->khotib_id ?? ''), "class='form-control select2'  placeholder='".lang('crud.khotib_id')."' ") ?>
                        <?php if (has_error('khotib_id')) { ?>
                        <p class="text-danger"><?php echo error('khotib_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>                
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.non_rawatib_schedule_clone') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>

<?php $this->section('styles') ?>
    <?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css', 'css') ?>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<?php echo asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js', 'js'); ?>
<script type="text/javascript">
    $(function () {        
        $('input[name=pray_date]').daterangepicker({
            "autoApply": true,
            "singleDatePicker": true,
            "locale": {
                "format": 'YYYY-MM-DD'
            },            
        });        
    });

</script>
<?php $this->endSection(); ?>