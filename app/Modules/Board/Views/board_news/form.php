<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.add_new') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.board_news') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.board_news') ?>?</a>
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
                    <?= form_label(lang('crud.board_newsbg_id'), '', ['for' => 'board_newsbg_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('board_newsbg_id', $board_newsbgItems, old('board_newsbg_id', $data->board_newsbg_id ?? ''), "class='form-control select2'  placeholder='".lang('crud.board_newsbg_id')."' ") ?>
                        <?php if (has_error('board_newsbg_id')) { ?>
                        <p class="text-danger"><?php echo error('board_newsbg_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.board_newsruntext_id'), '', ['for' => 'board_newsruntext_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('board_newsruntext_id', $board_newsruntextItems, old('board_newsruntext_id', $data->board_newsruntext_id ?? ''), "class='form-control select2'  placeholder='".lang('crud.board_newsruntext_id')."' ") ?>
                        <?php if (has_error('board_newsruntext_id')) { ?>
                        <p class="text-danger"><?php echo error('board_newsruntext_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.rawatib_schedule_id'), '', ['for' => 'rawatib_schedule_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('rawatib_schedule_id', $rawatib_scheduleItems, old('rawatib_schedule_id', $data->rawatib_schedule_id ?? ''), "class='form-control select2'  placeholder='".lang('crud.rawatib_schedule_id')."' ") ?>
                        <?php if (has_error('rawatib_schedule_id')) { ?>
                        <p class="text-danger"><?php echo error('rawatib_schedule_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.board_news') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
