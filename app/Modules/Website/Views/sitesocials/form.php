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
                    <?= form_label(lang('crud.name'), '', ['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?php echo form_dropdown('name', $socialItems, old('name', $data->name ?? ''), "class='form-control varchar' required placeholder='".lang('crud.name')."' "); ?>
                        <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.link'), '', ['for' => 'link', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('link', old('link', $data->link ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('link')) { ?>
                        <p class="text-danger"><?php echo error('link'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.state'), '', ['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
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
