<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?= $backUrl ?>" class="back">&larr; <?= lang('crud.back')?></a>
        <h4><?= isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.member_mosque')?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This member was deleted on <?= $data->deleted_at->humanize(); ?>.
            <a href="#">Restore member?</a>
        </div>
    <?php } ?>


    <x-admin-box>


        <form action="<?= $actionUrl; ?>" method="post" enctype="multipart/form-data">

            <?= csrf_field(); ?>

            <?php if (isset($data) && null !== $data) { ?>
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="id" value="<?= $data->id; ?>">
            <?php } ?>

            <fieldset>
                <div class="row mb-3">
                    <?= form_label(lang('crud.name'), '', ['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?= error('name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.zone'), '', ['for' => 'wilayah_id', 'class' => 'col-form-label col-sm-2']) ?>                    
                    <div class="col-sm-10">
                        <div class="input-group">                        
                            <?php
                                if(isset($data->wilayah_id)){
                                    echo form_input('wilayah_id', old('wilayah_id', $data->wilayah_id ?? ''), "class='form-control varchar' readonly");
                                }else{
                                    echo form_input('wilayah_id', old('wilayah_id', $data->wilayah_id ?? ''), "class='form-control varchar' required");
                                }
                            ?>                        
                            <button type="button" class="btn btn-outline-secondary"><i class="fa fa-search"></i> </button>
                            <?php if (has_error('wilayah_id')) { ?>
                            <p class="text-danger"><?= error('wilayah_id'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.code'), '', ['for' => 'code', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('code', old('code', $data->code ?? ''), "class='form-control varchar' readonly") ?>
                        <?php if (has_error('code')) { ?>
                        <p class="text-danger"><?= error('code'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.address'), '', ['for' => 'address', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_textarea('address', old('address', $data->address ?? ''), "class='form-control varchar' rows=3 required") ?>
                        <?php if (has_error('address')) { ?>
                        <p class="text-danger"><?= error('address'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.logo'), '', ['for' => 'logo', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">                        
                        <?= !isset($data->path_logo) ? '' : "<img src='".site_url($data->path_logo)."' class='img-thumbnail' >" ?>
                        <?= form_upload('logo', old('logo', $data->logo ?? ''), "class='form-control varchar' accept='image/*' ") ?>
                        <?php if (has_error('logo')) { ?>
                        <p class="text-danger"><?= error('logo'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.image'), '', ['for' => 'image', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= !isset($data->path_image) ? '' : "<img src='".site_url($data->path_image)."' class='img-thumbnail' >" ?>
                        <?= form_upload('image', old('image', $data->image ?? ''), "class='form-control varchar' accept='image/*' ") ?>
                        <?php if (has_error('image')) { ?>
                        <p class="text-danger"><?= error('image'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.state'), '', ['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('state', $state ,old('state', $data->state ?? ''), "class='form-control enum' ") ?>
                        <?php if (has_error('state')) { ?>
                        <p class="text-danger"><?= error('state'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> <?= lang('app.save')?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
