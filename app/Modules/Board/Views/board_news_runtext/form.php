<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.add_new') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.board_news_runtext') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.board_news_runtext') ?>?</a>
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
                    <?= form_label(lang('crud.Text'),'',['for' => 'Text', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('Text', old('Text', $data->Text ?? ''), "class='form-control varchar'  placeholder='".lang('crud.board_newsruntext')."' ") ?>
                        <?php if (has_error('Text')) { ?>
                        <p class="text-danger"><?php echo error('Text'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <!-- <div class="row mb-3">
                    < ?= form_label(lang('crud.duration'),'',['for' => 'duration', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        < ?= form_input('duration', old('duration', $data->duration ?? ''), "class='form-control varchar'  placeholder='".lang('crud.duration')."' ") ?>
                        < ?php if (has_error('duration')) { ?>
                        <p class="text-danger">< ?php echo error('duration'); ?></p>
                        < ?php } ?>
                    </div>
                </div> -->
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.add_new') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
