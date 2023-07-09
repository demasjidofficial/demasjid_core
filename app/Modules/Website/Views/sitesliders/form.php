<?php $this->extend('master'); ?>

<?php $this->section('styles'); ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/dropzone/min/dropzone-min.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/codemirror/codemirror.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/codemirror/theme/monokai.css'), 'css') ?>
<?= $this->endSection() ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  sitesliders</h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This sitesliders was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore sitesliders?</a>
        </div>
    <?php } ?>


    <x-admin-box>

        <form action="<?php echo $actionUrl; ?>" method="post" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            <?php if (isset($data) && null !== $data) { ?>
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="id" value="<?php echo $data->id; ?>">
            <?php } ?>
            
            <div class="row">
                <div class="col-md-7">
                    <div class="row mb-3">
                        <?= form_label(lang('crud.pages'),'',['for' => 'sitepage_id', 'class' => 'col-form-label col-sm-2']) ?>
                        <div class="col-sm-10">
                            <?= form_dropdown('sitepage_id', $pageItems, old('sitepage_id', $data->sitepage_id ?? ''), "class='form-control select2bs4 add-begin-option' data-label='".lang('crud.pages')."' required") ?>
                            <?php if (has_error('sitepage_id')) { ?>
                            <p class="text-danger"><?php echo error('sitepage_id'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row mb-3">
                    <?= form_label(lang('crud.state'),'',['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('state', ['draft' => lang('app.draft'), 'release' => lang('app.release')], old('state', $data->state ?? ''), "class='form-control select2bs4 add-begin-option' data-label='".lang('crud.state')."' required") ?>
                        <?php if (has_error('state')) { ?>
                        <p class="text-danger"><?php echo error('state'); ?></p>
                        <?php } ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="row mb-3">
                        <?= form_label('sequence','',['for' => 'sequence', 'class' => 'col-form-label col-sm-2']) ?>
                        <div class="col-sm-10">
                            <?= form_input('sequence', old('sequence', $data->sequence ?? ''), "class='form-control int' ") ?>
                            <?php if (has_error('sequence')) { ?>
                            <p class="text-danger"><?php echo error('sequence'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-primary card-outline">   
                <div class="card-body">

                    <fieldset>
                        <div class="row mb-3">
                            <?= form_label('name','',['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required") ?>
                                <?php if (has_error('name')) { ?>
                                <p class="text-danger"><?php echo error('name'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?php echo form_label(lang('crud.path_image'), '', ['for' => 'path_image', 'class' => 'col-form-label col-sm-2']); ?>
                            <div class="col-sm-10">
                                <div class="justify-content-center photo-wrapper">
                                    <img id="slider_imgpreview" src="<?= (isset($data->path_image)) ? site_url($data->path_image) : $blank_img ?>" alt="" class="img-thumbnail" style="height:150px">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <?php echo form_upload('image', old('image', $data->path_image ?? ''), "class='custom-file-input' id='slider_imginput' placeholder='".lang('crud.path_image')."' accept='image/*' "); ?>
                                            <?php if (has_error('path_image')) { ?>
                                                <p class="text-danger"><?php echo error('path_image'); ?></p>
                                            <?php } ?>
                                            <?= form_label(lang('crud.path_image'),'',['for' => 'path_image', 'class' => 'custom-file-label']) ?>
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
                            <?= form_label(lang('crud.content'),'',['for' => 'content', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_textarea('content', old('content', $data->content ?? ''), "rows='4' class='form-control text' required") ?>
                                
                                <?php if (has_error('content')) { ?>
                                <p class="text-danger"><?php echo error('content'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('app.save')?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
<?php $this->section('scripts'); ?>
<?php echo assetUrlLink(assetUrl('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js'), 'js'); ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js'), 'js') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.js'), 'js') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/dropzone/min/dropzone-min.js'), 'js') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/codemirror/codemirror.js'), 'js') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/codemirror/mode/css/css.js'), 'js') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/codemirror/mode/xml/xml.js'), 'js') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/codemirror/mode/htmlmixed/htmlmixed.js'), 'js') ?>

<script type="text/javascript">
    $(function () { 
        $('input:file').change(function() {
            let file = $(this).get(0).files[0].name;
            $(this).next('label').text(file);
        });

        $('[name=content]').summernote({
            height: 450,   //set editable area's height
            codemirror: { // codemirror options
                theme: 'monokai'
            }
        });
    });

    function imagePreview(fileInput) {
        if (fileInput.files && fileInput.files[0]) {
            var fileReader = new FileReader();
            fileReader.onload = function (event) {
                $('#slider_imgpreview').attr('src', event.target.result);
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }
    $('#slider_imginput').change(function () {
        imagePreview(this);
    });

</script>
<?php $this->endSection(); ?>