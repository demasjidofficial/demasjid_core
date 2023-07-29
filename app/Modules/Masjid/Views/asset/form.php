<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.asset') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>
        <?= lang('crud.asset') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
<div class="alert danger">
    This <?= lang('crud.asset') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
    <a href="#">Restore <?= lang('crud.asset') ?>?</a>
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
                    <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required placeholder='".lang('crud.name')."' ") ?>
                    <?php if (has_error('name')) { ?>
                    <p class="text-danger"><?php echo error('name'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.purchased_date'),'',['for' => 'purchased_date', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('purchased_date', old('purchased_date', $data->purchased_date ?? ''), "class='form-control date' required placeholder='".lang('crud.purchased_date')."' ") ?>
                    <?php if (has_error('purchased_date')) { ?>
                    <p class="text-danger"><?php echo error('purchased_date'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.purchased_price'),'',['for' => 'purchased_price', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('purchased_price', old('purchased_price', $data->purchased_price ?? ''), "class='form-control bigint' required placeholder='".lang('crud.purchased_price')."' ") ?>
                    <?php if (has_error('purchased_price')) { ?>
                    <p class="text-danger"><?php echo error('purchased_price'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.estimated_price'),'',['for' => 'estimated_price', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('estimated_price', old('estimated_price', $data->estimated_price ?? ''), "class='form-control bigint' required placeholder='".lang('crud.estimated_price')."' ") ?>
                    <?php if (has_error('estimated_price')) { ?>
                    <p class="text-danger"><?php echo error('estimated_price'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.entity_id'),'',['for' => 'entity_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('entity_id',$entityItems ,old('entity_id', $data->entity_id ?? ''), "class='form-control select2' required placeholder='".lang('crud.entity_id')."' ") ?>
                    <?php if (has_error('entity_id')) { ?>
                    <p class="text-danger"><?php echo error('entity_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.description'),'',['for' => 'description', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('description', old('description', $data->description ?? ''), "class='form-control varchar'  placeholder='".lang('crud.description')."' ") ?>
                    <?php if (has_error('description')) { ?>
                    <p class="text-danger"><?php echo error('description'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?php if (isset($data->path_image)) : ?>
                <div class="justify-content-center photo-wrapper">
                    <img src="<?= site_url($data->path_image) ?>" alt="" class="img-thumbnail" style="height:150px">
                </div>
                <?php endif ?>
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <?= form_upload('image', old('image', $data->path_image ?? ''), "class='custom-file-input'  placeholder='" . lang('crud.path_image') . "' accept='image/*' " . (!isset($data->path_image) ? 'required' : '')) ?>
                            <label class="custom-file-label">Pilih gambar aset</label>
                        </div>
                        <div class="input-group-append clickable">
                            <span class="input-group-text">
                                <i class="fas fa-camera"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i>
                <?= lang('crud.asset') ?></button>
        </div>

    </form>

</x-admin-box>

<?php $this->endSection(); ?>
<?php $this->section('styles') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css'), 'css') ?>
<?php $this->endSection(); ?>

<?php $this->section('scripts') ?>
    <!-- bs-custom-file-input -->    
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js'), 'js') ?>
    <script type="text/javascript">
        $(function () {
            $('input[name=purchased_date]').daterangepicker({
                "singleDatePicker": true,
                "autoApply": true,
                "locale": {
                    "format": 'YYYY-MM-DD'
                }                
            });
            $('.bigint').inputmask({
                'alias': 'numeric',
                'groupSeparator': '.',
                'radixPoint': ',',
                'digits': 0, 
                'autoGroup': true
            });
            
        });            
    </script>
<?php $this->endSection() ?>