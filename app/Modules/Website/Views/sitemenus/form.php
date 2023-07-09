<?php $this->extend('master'); ?>

<?php $this->section('styles'); ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/dropzone/min/dropzone-min.css'), 'css') ?>
<?= $this->endSection() ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.menu') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This sitemenus was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore sitemenus?</a>
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
                        <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.parent'),'',['for' => 'parent', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('parent',$sitemenusItems ,old('parent', $data->parent ?? ''), "class='form-control select2 add-begin-option' data-label='".lang('crud.parent')."' ") ?>
                        <?php if (has_error('parent')) { ?>
                        <p class="text-danger"><?php echo error('parent'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <?= form_label(lang('crud.language'),'',['for' => 'language_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">

                        <!--?= form_input('language_id', old('language_id', $data->language_id ?? ''), "class='form-control int' ") ?-->

                        <?= form_dropdown('language_id',$languagesItems ,old('language_id', $data->language_id ?? ''), "class='form-control select2 add-begin-option' data-label='".lang('crud.language')."' ") ?>
                        <?php if (has_error('language_id')) { ?>
                        <p class="text-danger"><?php echo error('language_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <?= form_label(lang('crud.state'),'',['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <!--?= form_input('state', old('state', $data->state ?? ''), "class='form-control varchar' ") ?-->

                        <!--?= form_dropdown('state', ['draft' => lang('app.draft'), 'release' => lang('app.release')], old('state', $data->state ?? ''), "class='form-control select2bs4 state' required") ?-->

                        <?= form_dropdown('state', $statesItems, old('state', $data->state ?? ''), "class='form-control select2bs4 add-begin-option' data-label='".lang('crud.state')."' required") ?>
                        <?php if (has_error('state')) { ?>
                        <p class="text-danger"><?php echo error('state'); ?></p>
                        <?php } ?>
                    </div>
                </div>                
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> <?= lang('app.save') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>

<?= $this->section('scripts') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/summernote/summernote-bs4-min.js'), 'js') ?>
<?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/dropzone/min/dropzone-min.js'), 'js') ?>
<script type="text/javascript">
$(function(){
    $('.add-begin-option').each(function(){
        var selected = $('input[name=name]').val()=='' ? 'selected="selected"' : '';
        $(this).prepend('<option '+selected+'>Pilih '+$(this).attr('data-label')+'</option>');
    })
})
</script>
<?= $this->endSection() ?>
