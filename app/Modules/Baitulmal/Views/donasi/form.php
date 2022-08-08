<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.donasi') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.donasi') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.donasi') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.donasi') ?>?</a>
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
                    <?= form_label(lang('crud.dana_in'),'',['for' => 'dana_in', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('dana_in', old('dana_in', $data->dana_in ?? ''), "class='form-control int' required placeholder='".lang('crud.dana_in')."' ") ?>
                        <?php if (has_error('dana_in')) { ?>
                        <p class="text-danger"><?php echo error('dana_in'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.tgl_transaksi'),'',['for' => 'tgl_transaksi', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('tgl_transaksi', old('tgl_transaksi', $data->tgl_transaksi ?? ''), "class='form-control date' required placeholder='".lang('crud.tgl_transaksi')."' ") ?>
                        <?php if (has_error('tgl_transaksi')) { ?>
                        <p class="text-danger"><?php echo error('tgl_transaksi'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.bukti_pembayaran'),'',['for' => 'bukti_pembayaran', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('bukti_pembayaran', old('bukti_pembayaran', $data->bukti_pembayaran ?? ''), "class='form-control blob' required placeholder='".lang('crud.bukti_pembayaran')."' ") ?>
                        <?php if (has_error('bukti_pembayaran')) { ?>
                        <p class="text-danger"><?php echo error('bukti_pembayaran'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.donasi') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
