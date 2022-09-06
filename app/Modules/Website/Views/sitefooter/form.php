<?php $this->extend('master'); ?>

<?php $this->section('styles'); ?>
    <?= asset_link('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.css', 'css') ?>
    <?= asset_link('admin/theme-adminlte/plugins/dropzone/min/dropzone-min.css', 'css') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/codemirror.css', 'css') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/theme/monokai.css', 'css') ?>
<?= $this->endSection() ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.sitefooter') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.sitefooter') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.sitefooter') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.sitefooter') ?>?</a>
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
                    <?= form_label(lang('crud.title'),'',['for' => 'title', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('title', old('title', $data->title ?? ''), "class='form-control varchar' required disabled placeholder='".lang('crud.title')."' ") ?>
                        <?php if (has_error('title')) { ?>
                        <p class="text-danger"><?php echo error('title'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.content'),'',['for' => 'content', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_textarea('content', old('content', $data->content ?? ''), "rows='4' class='form-control text' required placeholder='".lang('crud.content')."' ") ?>
                        <?php if (has_error('content')) { ?>
                        <p class="text-danger"><?php echo error('content'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.sitefooter') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>

<?= $this->section('scripts') ?>
    <?= asset_link('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/dropzone/min/dropzone-min.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/codemirror.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/mode/css/css.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/mode/xml/xml.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/codemirror/mode/htmlmixed/htmlmixed.js', 'js') ?>
    <script type="text/javascript">
        $(function(){
            $('[name=content]').summernote({
                height: 450,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
           
        });
    </script>
<?= $this->endSection() ?>

