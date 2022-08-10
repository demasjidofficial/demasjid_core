<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
<<<<<<< HEAD
        <a href="<?php echo $backUrl ?>" class="back">&larr; wilayah</a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  wilayah</h4>
=======
        <a href="<?= $backUrl ?>" class="back">&larr; <?= lang('crud.back')?></a>
        <h4><?= isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.zone')?></h4>
>>>>>>> 
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This wilayah was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore wilayah?</a>
        </div>
    <?php } ?>

    <x-admin-box>

<<<<<<< HEAD

        <form action="<?php echo $actionUrl; ?>" method="post" enctype="multipart/form-data">
=======
        <form action="<?= $actionUrl; ?>" method="post" enctype="multipart/form-data">
>>>>>>> 

            <?php echo csrf_field(); ?>

            <?php if (isset($data) && null !== $data) { ?>
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="id" value="<?php echo $data->id; ?>">
            <?php } ?>

            <fieldset>
<<<<<<< HEAD
                                <div class="row mb-3">
                    <?= form_label('kode','',['for' => 'kode', 'class' => 'col-form-label col-sm-2']) ?>
=======
                <div class="row mb-3">
                    <?= form_label(lang('crud.code'), '', ['for' => 'kode', 'class' => 'col-form-label col-sm-2']) ?>
>>>>>>> 
                    <div class="col-sm-10">
                        <?= form_input('kode', old('kode', $data->kode ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('kode')) { ?>
                        <p class="text-danger"><?php echo error('kode'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
<<<<<<< HEAD
                    <?= form_label('nama','',['for' => 'nama', 'class' => 'col-form-label col-sm-2']) ?>
=======
                    <?= form_label(lang('crud.name'), '', ['for' => 'nama', 'class' => 'col-form-label col-sm-2']) ?>
>>>>>>> 
                    <div class="col-sm-10">
                        <?= form_input('nama', old('nama', $data->nama ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('nama')) { ?>
                        <p class="text-danger"><?php echo error('nama'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
<<<<<<< HEAD
                    <?= form_label('level','',['for' => 'level', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('level', old('level', $data->level ?? ''), "class='form-control varchar' required") ?>
=======
                    <?= form_label(lang('crud.zone_level'), '', ['for' => 'level', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('level', $zoneLevelItems, old('level', $data->level ?? ''), "class='form-control add-begin-option' data-label='".lang('crud.zone_level')."' required placeholder='".lang('crud.zone_level')."' ") ?>
>>>>>>> 
                        <?php if (has_error('level')) { ?>
                        <p class="text-danger"><?php echo error('level'); ?></p>
                        <?php } ?>

                        <!-- ?= form_input('level', old('level', $data->level ?? ''), "class='form-control enum' required") ?>
                        < ?php if (has_error('level')) { ?>
                        <p class="text-danger">< ?= error('level'); ?></p>
                        < ?php } ?-->
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> <?= lang('app.save')?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>

<?php $this->section('scripts') ?>
    <script type="text/javascript">
        $(function () {
            $('.add-begin-option').each(function(){
                var selected = $('input[name=kode]').val()=='' ? 'selected="selected"' : '';
                $(this).prepend('<option '+selected+'><?= lang('crud.choose')?> '+$(this).attr('data-label')+'</option>');
            });
        });            
    </script>
<?php $this->endSection() ?>
