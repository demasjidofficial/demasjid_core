<?php $this->extend('master'); ?>

<?php $this->section('styles'); ?>
    <?= asset_link('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.css', 'css') ?>
    <?= asset_link('admin/theme-adminlte/plugins/dropzone/min/dropzone-min.css', 'css') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/codemirror.css', 'css') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/theme/monokai.css', 'css') ?>
<?= $this->endSection() ?>

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
                    <?php echo form_label(lang('crud.path_logo'), '', ['for' => 'path_logo', 'class' => 'col-form-label col-sm-2']); ?>
                    <div class="col-sm-10">
                        <div class="justify-content-center photo-wrapper">
                            <img id="bank_imgpreview" src="<?= (isset($data->path_logo)) ? site_url($data->path_logo) : '/uploads/images/blank.jpg' ?>" alt="" class="img-thumbnail" style="height:150px">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <?php echo form_upload('image', old('image', $data->path_logo ?? ''), "class='custom-file-input' id='bank_imginput' placeholder='".lang('crud.path_logo')."' accept='image/*' "); ?>
                                    <?php if (has_error('path_logo')) { ?>
                                        <p class="text-danger"><?php echo error('path_logo'); ?></p>
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
                    <?= form_label(lang('crud.name'),'',['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar'  placeholder='".lang('crud.name')."' ") ?>
                        <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.instr_atm'),'',['for' => 'instr_atm', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_textarea('instr_atm', old('instr_atm', $data->instr_atm ?? ''), "rows='4' class='form-control text'") ?>
                        
                        <?php if (has_error('instr_atm')) { ?>
                        <p class="text-danger"><?php echo error('instr_atm'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.instr_mbanking'),'',['for' => 'instr_mbanking', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_textarea('instr_mbanking', old('instr_mbanking', $data->instr_mbanking ?? ''), "rows='4' class='form-control text'") ?>
                        
                        <?php if (has_error('instr_mbanking')) { ?>
                        <p class="text-danger"><?php echo error('instr_mbanking'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.instr_ibanking'),'',['for' => 'instr_ibanking', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_textarea('instr_ibanking', old('instr_ibanking', $data->instr_ibanking ?? ''), "rows='4' class='form-control text'") ?>
                        
                        <?php if (has_error('instr_ibanking')) { ?>
                        <p class="text-danger"><?php echo error('instr_ibanking'); ?></p>
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
<?= asset_link('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/dropzone/min/dropzone-min.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/codemirror/codemirror.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/codemirror/mode/css/css.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/codemirror/mode/xml/xml.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/codemirror/mode/htmlmixed/htmlmixed.js', 'js') ?>

<script type="text/javascript">
    $(function () {
        bsCustomFileInput.init();   
        $('input:file').change(function() {
            var i = $(this).prev('label').clone();
            var file = $(this).get(0).files[0].name;
            $(this).prev('label').text(file);
        });

        $('[name=instr_atm]').summernote({
            height: 450,   //set editable area's height
            codemirror: { // codemirror options
                theme: 'monokai'
            }
        });

        $('[name=instr_mbanking]').summernote({
            height: 450,   //set editable area's height
            codemirror: { // codemirror options
                theme: 'monokai'
            }
        });

        $('[name=instr_ibanking]').summernote({
            height: 450,   //set editable area's height
            codemirror: { // codemirror options
                theme: 'monokai'
            }
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

    function imagePreview(fileInput) {
        if (fileInput.files && fileInput.files[0]) {
            var fileReader = new FileReader();
            fileReader.onload = function (event) {
                $('#bank_imgpreview').attr('src', event.target.result);
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }
    $('#bank_imginput').change(function () {
        imagePreview(this);
    });

</script>
<?php $this->endSection(); ?>
