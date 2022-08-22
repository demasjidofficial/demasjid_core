<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl; ?>" class="back">&larr; <?php echo lang('crud.imam_mubaligh'); ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>'; ?>  <?php echo lang('crud.imam_mubaligh'); ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?php echo lang('crud.imam_mubaligh'); ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?php echo lang('crud.imam_mubaligh'); ?>?</a>
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
                    <?php echo form_label(lang('crud.name'), '', ['for' => 'name', 'class' => 'col-form-label col-sm-2']); ?>
                    <div class="col-sm-10">
                        <?php echo form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required placeholder='".lang('crud.name')."' "); ?>
                        <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?php echo form_label(lang('crud.contact'), '', ['for' => 'contact', 'class' => 'col-form-label col-sm-2']); ?>
                    <div class="col-sm-10">
                        <?php echo form_input('contact', old('contact', $data->contact ?? ''), "class='form-control varchar'  placeholder='".lang('crud.contact')."' "); ?>
                        <?php if (has_error('contact')) { ?>
                        <p class="text-danger"><?php echo error('contact'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?php echo form_label(lang('crud.address'), '', ['for' => 'address', 'class' => 'col-form-label col-sm-2']); ?>
                    <div class="col-sm-10">
                        <?php echo form_input('address', old('address', $data->address ?? ''), "class='form-control varchar'  placeholder='".lang('crud.address')."' "); ?>
                        <?php if (has_error('address')) { ?>
                        <p class="text-danger"><?php echo error('address'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?php echo form_label(lang('crud.description'), '', ['for' => 'description', 'class' => 'col-form-label col-sm-2']); ?>
                    <div class="col-sm-10">
                        <?php echo form_textarea('description', old('description', $data->description ?? ''), "rows='4' class='form-control text' required placeholder='".lang('crud.description')."' "); ?>
                        <?php if (has_error('description')) { ?>
                        <p class="text-danger"><?php echo error('description'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?php echo form_label(lang('crud.is_permanent'), '', ['for' => 'is_permanent', 'class' => 'col-form-label col-sm-2']); ?>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <?php echo form_checkbox(['name' => 'is_permanent'], true , $data->is_permanent ?? true, "class='form-check-input' placeholder='".lang('crud.is_permanent')."' "); ?>
                        <?php if (has_error('is_permanent')) { ?>
                        <p class="text-danger"><?php echo error('is_permanent'); ?></p>
                        <?php } ?>
                        </div> 
                    </div>
                </div>
                <div class="row mb-3">
                    <?php echo form_label(lang('crud.is_khotib'), '', ['for' => 'is_khotib', 'class' => 'col-form-label col-sm-2']); ?>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <?php echo form_checkbox(['name' => 'is_khotib'], true, $data->is_khotib ?? false, "class='form-check-input' placeholder='".lang('crud.is_khotib')."' "); ?>
                        <?php if (has_error('is_khotib')) { ?>
                        <p class="text-danger"><?php echo error('is_khotib'); ?></p>
                        <?php } ?>
                        </div> 
                    </div>
                </div>                
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?php echo lang('crud.imam_mubaligh'); ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
