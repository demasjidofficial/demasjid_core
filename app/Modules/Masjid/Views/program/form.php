<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.program') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>
        <?= lang('crud.program') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
<div class="alert danger">
    This <?= lang('crud.program') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
    <a href="#">Restore <?= lang('crud.program') ?>?</a>
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
                <?= form_label(lang('crud.period'),'',['for' => 'period', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('period', old('period', $data->period ?? ''), "class='form-control date' required placeholder='".lang('crud.period')."' ") ?>
                    <?php if (has_error('period')) { ?>
                    <p class="text-danger"><?php echo error('period'); ?></p>
                    <?php } ?>
                </div>
            </div>
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
                <?= form_label(lang('crud.description'),'',['for' => 'description', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_textarea('description', old('description', $data->description ?? ''), "rows='4' class='form-control text' required placeholder='".lang('crud.description')."' ") ?>
                    <?php if (has_error('description')) { ?>
                    <p class="text-danger"><?php echo error('description'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                    <?= form_label(lang('crud.cost_estimate'),'',['for' => 'cost_estimate', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('cost_estimate', old('cost_estimate', $data->cost_estimate ?? ''), "class='form-control int' required") ?>
                        <?php if (has_error('cost_estimate')) { ?>
                        <p class="text-danger"><?php echo error('cost_estimate'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.path_image'),'',['for' => 'path_image', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?php if(isset($data->path_image)): ?>
                    <div class="justify-content-center photo-wrapper">
                        <img src="<?= site_url($data->path_image) ?>" alt="" class="img-thumbnail" style="height:150px">
                    </div>
                    <?php endif ?>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <?= form_upload('image', old('image', $data->path_image ?? ''), "class='custom-file-input'  placeholder='".lang('crud.path_image')."' accept='image/*' ") ?>
                                <label class="custom-file-label">Pilih brosur</label>
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
                <?= form_label(lang('crud.state'),'',['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('state', $stateItems, old('state', $data->state ?? ''), "class='form-control varchar' required placeholder='".lang('crud.state')."' ") ?>
                    <?php if (has_error('state')) { ?>
                    <p class="text-danger"><?php echo error('state'); ?></p>
                    <?php } ?>
                </div>
            </div>
        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i>
                <?= lang('crud.program') ?></button>
        </div>

    </form>

</x-admin-box>

<?php $this->endSection(); ?>
<?php $this->section('scripts') ?>
<?= asset_link('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js', 'js') ?>

<script type="text/javascript">
    $(function () {
        $('input[name=period]').daterangepicker({
            "autoApply": true,
            "locale": {
                "format": 'YYYY-MM-DD'
            }
        });
        $('input[name=cost_estimate]').inputmask({
                'alias': 'numeric',
                'groupSeparator': '.',
                'radixPoint': ',',
                'digits': 0, 
                'autoGroup': true
            })
    });
</script>
<?php $this->endSection() ?>