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
                    <?= form_label(lang('crud.path_image'),'',['for' => 'path_image', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('path_image', old('path_image', $data->path_image ?? ''), "class='form-control varchar'  placeholder='".lang('crud.path_image')."' ") ?>
                        <?php if (has_error('path_image')) { ?>
                        <p class="text-danger"><?php echo error('path_image'); ?></p>
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
                    <?= form_label(lang('crud.campaignstart_date'),'',['for' => 'campaignstart_date', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('campaignstart_date', old('campaignstart_date', $data->campaignstart_date ?? ''), "class='form-control date' required placeholder='".lang('crud.campaignstart_date')."' ") ?>
                        <?php if (has_error('campaignstart_date')) { ?>
                        <p class="text-danger"><?php echo error('campaignstart_date'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.campaignend_date'),'',['for' => 'campaignend_date', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('campaignend_date', old('campaignend_date', $data->campaignend_date ?? ''), "class='form-control date' required placeholder='".lang('crud.campaignend_date')."' ") ?>
                        <?php if (has_error('campaignend_date')) { ?>
                        <p class="text-danger"><?php echo error('campaignend_date'); ?></p>
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
                        <?= form_input('campaigncategory_id', old('campaigncategory_id', $data->campaigncategory_id ?? ''), "class='form-control int'  placeholder='".lang('crud.campaigncategory_id')."' ") ?>
                        <?php if (has_error('campaigncategory_id')) { ?>
                        <p class="text-danger"><?php echo error('campaigncategory_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.donationtype_id'),'',['for' => 'donationtype_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('donationtype_id', old('donationtype_id', $data->donationtype_id ?? ''), "class='form-control int'  placeholder='".lang('crud.donationtype_id')."' ") ?>
                        <?php if (has_error('donationtype_id')) { ?>
                        <p class="text-danger"><?php echo error('donationtype_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.state'),'',['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('state', old('state', $data->state ?? ''), "class='form-control varchar'  placeholder='".lang('crud.state')."' ") ?>
                        <?php if (has_error('state')) { ?>
                        <p class="text-danger"><?php echo error('state'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.created_by'),'',['for' => 'created_by', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('created_by', old('created_by', $data->created_by ?? ''), "class='form-control int'  placeholder='".lang('crud.created_by')."' ") ?>
                        <?php if (has_error('created_by')) { ?>
                        <p class="text-danger"><?php echo error('created_by'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.bmdonationcampaign') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
