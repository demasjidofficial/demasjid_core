<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.bmdonationcampaign') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.bmdonationcampaign') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.bmdonationcampaign') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.bmdonationcampaign') ?>?</a>
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
                <div class="row">
                    <div class="col-6">
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
                            <?= form_label(lang('crud.label'),'',['for' => 'label', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('label', old('label', $data->label ?? ''), "class='form-control varchar' required placeholder='".lang('crud.label')."' ") ?>
                                <?php if (has_error('label')) { ?>
                                <p class="text-danger"><?php echo error('label'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.description'),'',['for' => 'description', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('description', old('description', $data->description ?? ''), "class='form-control varchar'  placeholder='".lang('crud.description')."' ") ?>
                                <?php if (has_error('description')) { ?>
                                <p class="text-danger"><?php echo error('description'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.campaign_daterange'),'',['for' => 'campaign_daterange', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('campaign_daterange', old('campaign_daterange', $data->campaign_daterange ?? ''), "class='form-control date'  placeholder='".lang('crud.campaign_daterange')."' ") ?>
                                <?php if (has_error('campaign_daterange')) { ?>
                                <p class="text-danger"><?php echo error('campaign_daterange'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.campaign_tonase'),'',['for' => 'campaign_tonase', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('campaign_tonase', old('campaign_tonase', $data->campaign_tonase ?? ''), "class='form-control decimal'  placeholder='".lang('crud.campaign_tonase')."' ") ?>
                                <?php if (has_error('campaign_tonase')) { ?>
                                <p class="text-danger"><?php echo error('campaign_tonase'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.campaigncategory_id'),'',['for' => 'campaigncategory_id', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_dropdown('campaigncategory_id', $donationcampaigncategoryItems, old('campaigncategory_id', $data->campaigncategory_id ?? ''), "class='form-control select2bs4' required") ?>
                                <?php if (has_error('campaigncategory_id')) { ?>
                                <p class="text-danger"><?php echo error('campaigncategory_id'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.donationtype_id'),'',['for' => 'donationtype_id', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_dropdown('donationtype_id', $donationtypeItems, old('donationtype_id', $data->donationtype_id ?? ''), "class='form-control select2bs4' required") ?>
                                <?php if (has_error('donationtype_id')) { ?>
                                <p class="text-danger"><?php echo error('donationtype_id'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.program_id'),'',['for' => 'program_id', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_dropdown('program_id', $programItems, old('program_id', $data->program_id ?? ''), "class='form-control select2bs4' required") ?>
                                <?php if (has_error('program_id')) { ?>
                                <p class="text-danger"><?php echo error('program_id'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.state'),'',['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('state', $stateItems, old('state', $data->state ?? ''), "class='form-control varchar' required placeholder='".lang('crud.state')."' "); ?>
                                <?php if (has_error('state')) { ?>
                                <p class="text-danger"><?php echo error('state'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div> 
                    <div class="col-6">
                        <div class="row mb-3">
                            <?= form_label(lang('crud.path_image'),'',['for' => 'path_image', 'class' => 'col-form-label col-sm-2']) ?>
                            
                            <div class="col-md-10">
                                <?php if(isset($data->path_image)): ?>
                                <div class="justify-content-center photo-wrapper">           
                                    <img src="<?= site_url($data->path_image) ?>" alt="" class="img-thumbnail" style="height:150px">
                                </div>
                                <?php endif ?>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <?= form_upload('image', old('image', $data->path_image ?? ''), "class='custom-file-input'  placeholder='".lang('crud.path_image')."' accept='image/*' ".(!isset($data->path_logo) ? 'required' : '')) ?>
                                            <label class="custom-file-label">Pilih gambar kampanye</label>
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
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('app.save') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
<?php $this->section('styles') ?>
    <?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css', 'css') ?>
<?php $this->endSection(); ?>
<?php $this->section('scripts'); ?>
<?php echo asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js', 'js'); ?>
<!-- bs-custom-file-input -->
<?= asset_link('admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/select2/js/select2.js', 'js') ?>
<?= asset_link('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js', 'js') ?>
<script type="text/javascript">
    $(function () {              
        $('input[name=campaign_daterange]').daterangepicker({
            "locale": {
                "format": 'DD/MM/YY'
            }
        });
        
        bsCustomFileInput.init();                
        $('input:file').change(function() {
            var i = $(this).prev('label').clone();
            var file = $(this).get(0).files[0].name;
            $(this).prev('label').text(file);
        });
        $('input[name=campaign_tonase]').inputmask({
            'alias': 'currency',
            'rightAlign': false,
            'digits': '0', 
            'allowMinus': 'false',               
        });
    });

</script>
<?php $this->endSection(); ?>
