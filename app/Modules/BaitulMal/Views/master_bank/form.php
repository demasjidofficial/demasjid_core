<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.master_bank') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.master_bank') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.master_bank') ?>?</a>
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
                    <?php echo form_label(lang('crud.logo'), '', ['for' => 'logo', 'class' => 'col-form-label col-sm-2']); ?>
                    <div class="col-sm-10">
                        <?php if (isset($data->logo)) { ?>
                        <div class="justify-content-center photo-wrapper">
                            <img src="<?php echo site_url($data->logo); ?>" alt="" class="img-thumbnail" style="height:150px">
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <?php echo form_upload('image', old('image', $data->logo ?? ''), "class='custom-file-input'  placeholder='".lang('crud.logo')."' accept='image/*' "); ?>
                                    <!-- <label class="custom-file-label">Pilih gambar logo</label> -->
                                    <?php if (has_error('logo')) { ?>
                                        p class="text-danger"><?php echo error('logo'); ?></p>
                                    <?php } ?>
                                    <?= form_label(lang('crud.path_logo'),'',['for' => 'path_logo', 'class' => 'custom-file-label']) ?>
                                </div>
                                <div class="input-group-append clickable">
                                    <span class="input-group-text">
                                        <i class="fas fa-camera"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.bank'),'',['for' => 'bank', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('bank', old('bank', $data->bank ?? ''), "class='form-control varchar'  placeholder='".lang('crud.bank')."' ") ?>
                        <?php if (has_error('bank')) { ?>
                        <p class="text-danger"><?php echo error('bank'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.save') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
<?php $this->section('scripts'); ?>
<?php echo asset_link('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js', 'js'); ?>
<?= asset_link('admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js', 'js') ?>
<script type="text/javascript">
    $(function () {
        bsCustomFileInput.init();   
            $('input:file').change(function() {
                var i = $(this).prev('label').clone();
                var file = $(this).get(0).files[0].name;
                $(this).prev('label').text(file);
            });
    });
    
    function addRow(elm){
        const _topParent = $(elm).closest('.input-group');
        const _clone = _topParent.clone();
        _clone.find('input').val('');
        _clone.find('span.input-group-text')
                .replaceWith(`<span class="input-group-text" role="button" onclick="removeRow(this)">
                                <i class="fas fa-minus"></i>
                            </span>`);  
        _clone.insertBefore(_topParent.siblings('.input-group:last'));
    }

    function removeRow(elm){
        const _topParent = $(elm).closest('.input-group')
        const _elmOther = _topParent.prev()
        _topParent.remove();
        updateTotal(_elmOther.find('span[role=button]'));
    }

</script>
<?php $this->endSection(); ?>
