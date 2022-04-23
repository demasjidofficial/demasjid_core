<form action="<?php echo $actionUrl; ?>" method="post" enctype="multipart/form-data">

    <?php echo csrf_field(); ?>

    <?php if (isset($data) && null !== $data) { ?>
    <input type="hidden" name="_method" value="PUT" />
    <input type="hidden" name="id" value="<?php echo $data->id; ?>">
    <?php } ?>

    <input type="hidden" name="entity_id" value="<?php echo $activeEntity; ?>">
    <fieldset>
        <div class="row mb-3">
            <?= form_label(lang('crud.path_logo'),'',['for' => 'path_logo', 'class' => 'col-form-label col-sm-2']) ?>
            <div class="col-md-5">
                <?php if(isset($data->path_logo)): ?>
                <div class="justify-content-center photo-wrapper">           
                    <img src="<?= site_url($data->path_logo) ?>" alt="" class="img-thumbnail"  style="height:150px">
                </div>
                <?php endif ?>
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <?= form_upload('logo', old('logo', $data->path_logo ?? ''), "class='custom-file-input'  placeholder='".lang('crud.path_logo')."' accept='image/*' ".(!isset($data->path_logo) ? 'required' : '')) ?>
                            <label class="custom-file-label">Pilih logo masjid</label>
                        </div>
                        <div class="input-group-append clickable">
                            <span class="input-group-text">
                                <i class="fas fa-camera"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <?php if(isset($data->path_image)): ?>
                <div class="justify-content-center photo-wrapper">           
                    <img src="<?= site_url($data->path_image) ?>" alt="" class="img-thumbnail" style="height:150px">
                </div>
                <?php endif ?>
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <?= form_upload('image', old('image', $data->path_image ?? ''), "class='custom-file-input'  placeholder='".lang('crud.path_image')."' accept='image/*' ".(!isset($data->path_logo) ? 'required' : '')) ?>
                            <label class="custom-file-label">Pilih gambar masjid</label>
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
            <?= form_label(lang('crud.provinsi_id'),'',['for' => 'provinsi_id', 'class' => 'col-form-label col-sm-2']) ?>
            <div class="col-sm-10">
                <?= form_dropdown('provinsi_id', $provinsiItems, old('provinsi_id', $data->provinsi_id ?? ''), "class='form-control select2bs4 provinsi' required") ?>
                <?php if (has_error('provinsi_id')) { ?>
                <p class="text-danger"><?php echo error('provinsi_id'); ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="row mb-3">
            <?= form_label(lang('crud.kota_id'),'',['for' => 'kota_id', 'class' => 'col-form-label col-sm-2']) ?>
            <div class="col-sm-10">
                <?= form_dropdown('kota_id', $kotaItems, old('kota_id', $data->kota_id ?? ''), "class='form-control select2bs4 kota' data-level='kota/kabupaten' data-reference='select.provinsi' required") ?>
                <?php if (has_error('kota_id')) { ?>
                <p class="text-danger"><?php echo error('kota_id'); ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="row mb-3">
            <?= form_label(lang('crud.kecamatan_id'),'',['for' => 'kecamatan_id', 'class' => 'col-form-label col-sm-2']) ?>
            <div class="col-sm-10">
                <?= form_dropdown('kecamatan_id', $kecamatanItems, old('kecamatan_id', $data->kecamatan_id ?? ''), "class='form-control select2bs4 kecamatan' data-level='kecamatan' data-reference='select.kota' required") ?>
                <?php if (has_error('kecamatan_id')) { ?>
                <p class="text-danger"><?php echo error('kecamatan_id'); ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="row mb-3">
            <?= form_label(lang('crud.desa_id'),'',['for' => 'desa_id', 'class' => 'col-form-label col-sm-2']) ?>
            <div class="col-sm-10">
                <?= form_dropdown('desa_id', $desaItems, old('desa_id', $data->desa_id ?? ''), "class='form-control select2bs4 desa' data-level='desa' data-reference='select.kecamatan' required placeholder='".lang('crud.desa_id')."' ") ?>
                <?php if (has_error('desa_id')) { ?>
                <p class="text-danger"><?php echo error('desa_id'); ?></p>
                <?php } ?>
            </div>
        </div>        
        <div class="row mb-3">
            <?= form_label(lang('crud.address'),'',['for' => 'address', 'class' => 'col-form-label col-sm-2']) ?>
            <div class="col-sm-10">
                <?= form_textarea('address', old('address', $data->address ?? ''), "class='form-control varchar' rows='4' required placeholder='".lang('crud.address')."' ") ?>
                <?php if (has_error('address')) { ?>
                <p class="text-danger"><?php echo error('address'); ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="row mb-3">
            <?= form_label(lang('crud.email'),'',['for' => 'address', 'class' => 'col-form-label col-sm-2']) ?>
            <div class="col-sm-10">
                <?= form_input('email', old('email', $data->email ?? ''), "class='form-control inputmask email' required placeholder='".lang('crud.email')."' ") ?>
                <?php if (has_error('email')) { ?>
                <p class="text-danger"><?php echo error('email'); ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="row mb-3">
            <?= form_label(lang('crud.telephone'),'',['for' => 'telephone', 'class' => 'col-form-label col-sm-2']) ?>
            <div class="col-sm-10">
                <?= form_input('telephone', old('telephone', $data->telephone ?? ''), "class='form-control inputmask telephone' required placeholder='".lang('crud.telephone')."' ") ?>
                <?php if (has_error('telephone')) { ?>
                <p class="text-danger"><?php echo error('telephone'); ?></p>
                <?php } ?>
            </div>
        </div>

    </fieldset>

    <div class="text-end py-3">
        <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i>
            <?= lang('app.save') ?></button>
    </div>
</form>