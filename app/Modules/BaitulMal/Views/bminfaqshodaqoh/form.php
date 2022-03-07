<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; bminfaqshodaqoh</a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  bminfaqshodaqoh</h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This bminfaqshodaqoh was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore bminfaqshodaqoh?</a>
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
                    <?= form_label('name','',['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('label','',['for' => 'label', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('label', old('label', $data->label ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('label')) { ?>
                        <p class="text-danger"><?php echo error('label'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('needed_funds','',['for' => 'needed_funds', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('needed_funds', old('needed_funds', $data->needed_funds ?? ''), "class='form-control decimal' ") ?>
                        <?php if (has_error('needed_funds')) { ?>
                        <p class="text-danger"><?php echo error('needed_funds'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('collected_funds','',['for' => 'collected_funds', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('collected_funds', old('collected_funds', $data->collected_funds ?? ''), "class='form-control decimal' ") ?>
                        <?php if (has_error('collected_funds')) { ?>
                        <p class="text-danger"><?php echo error('collected_funds'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('path_image','',['for' => 'path_image', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('path_image', old('path_image', $data->path_image ?? ''), "class='form-control varchar' ") ?>
                        <?php if (has_error('path_image')) { ?>
                        <p class="text-danger"><?php echo error('path_image'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('description','',['for' => 'description', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_textarea('description', old('description', $data->description ?? ''), "rows='4' class='form-control text' required") ?>
                        <?php if (has_error('description')) { ?>
                        <p class="text-danger"><?php echo error('description'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('program_id','',['for' => 'program_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('program_id', old('program_id', $data->program_id ?? ''), "class='form-control int' ") ?>
                        <?php if (has_error('program_id')) { ?>
                        <p class="text-danger"><?php echo error('program_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('category_id','',['for' => 'category_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('category_id', old('category_id', $data->category_id ?? ''), "class='form-control int' ") ?>
                        <?php if (has_error('category_id')) { ?>
                        <p class="text-danger"><?php echo error('category_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('donationtype_id','',['for' => 'donationtype_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('donationtype_id', old('donationtype_id', $data->donationtype_id ?? ''), "class='form-control int' ") ?>
                        <?php if (has_error('donationtype_id')) { ?>
                        <p class="text-danger"><?php echo error('donationtype_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('state','',['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('state', old('state', $data->state ?? ''), "class='form-control varchar' ") ?>
                        <?php if (has_error('state')) { ?>
                        <p class="text-danger"><?php echo error('state'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label('created_by','',['for' => 'created_by', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('created_by', old('created_by', $data->created_by ?? ''), "class='form-control int' ") ?>
                        <?php if (has_error('created_by')) { ?>
                        <p class="text-danger"><?php echo error('created_by'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> bminfaqshodaqoh</button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
