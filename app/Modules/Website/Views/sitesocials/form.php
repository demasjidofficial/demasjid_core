<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back')?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.social_media')?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This sitesocials was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore sitesocials?</a>
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
                    <?php echo form_label(lang('crud.path_icon'), '', ['for' => 'path_icon', 'class' => 'col-form-label col-sm-2']); ?>
                    <div class="col-sm-10">
                        <div class="justify-content-center photo-wrapper">
                            <img id="social_imgpreview" src="<?= (isset($data->path_icon)) ? site_url($data->path_icon) : '/uploads/images/blank.jpg' ?>" alt="" class="img-thumbnail" style="height:150px">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <?php echo form_upload('image', old('image', $data->path_icon ?? ''), "class='custom-file-input' id='social_imginput' placeholder='".lang('crud.path_icon')."' accept='image/*' "); ?>
                                    <?php if (has_error('path_icon')) { ?>
                                        <p class="text-danger"><?php echo error('path_icon'); ?></p>
                                    <?php } ?>
                                    <?= form_label(lang('crud.path_icon'),'',['for' => 'path_icon', 'class' => 'custom-file-label']) ?>
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
                    <?= form_label(lang('crud.name'),'',['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.link'),'',['for' => 'link', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('link', old('link', $data->link ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('link')) { ?>
                        <p class="text-danger"><?php echo error('link'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <!-- <div class="row mb-3">
                    <= form_label(lang('crud.state'),'',['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <= form_input('state', old('state', $data->state ?? ''), "class='form-control varchar' ") ?>
                        <php if (has_error('state')) { ?>
                        <p class="text-danger"><php echo error('state'); ?></p>
                        <php } ?>
                    </div>
                </div> -->
                <!--
                <div class="row mb-3">
                    < ?= form_label('created_by','',['for' => 'created_by', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        < ?= form_input('created_by', old('created_by', $data->created_by ?? ''), "class='form-control int' ") ?>
                        < ?php if (has_error('created_by')) { ?>
                        <p class="text-danger">< ?php echo error('created_by'); ?></p>
                        < ?php } ?>
                    </div>
                </div>
                -->
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> <?= lang('app.save')?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>

<script type="text/javascript">
    function imagePreview(fileInput) {
        if (fileInput.files && fileInput.files[0]) {
            var fileReader = new FileReader();
            fileReader.onload = function (event) {
                $('#social_imgpreview').attr('src', event.target.result);
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }
    $('#social_imginput').change(function () {
        imagePreview(this);
    });

</script>
<?php $this->endSection(); ?>
