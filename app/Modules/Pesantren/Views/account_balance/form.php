<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr;<?= lang('crud.back') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.account_balance') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This account_balance was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore account_balance?</a>
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
                        <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('name')) { ?>
                        <p class="text-danger"><?php echo error('name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.bank_account'),'',['for' => 'account', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('account', old('account', $data->account ?? ''), "class='form-control varchar' required") ?>
                        <?php if (has_error('account')) { ?>
                        <p class="text-danger"><?php echo error('account'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.group_account'),'',['for' => 'group_account', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('group_account',$groupAccountItems ,old('group_account', $data->group_account ?? ''), "class='form-control select2 add-begin-option' data-label='".lang('crud.group_account')."' required") ?>
                        <?php if (has_error('group_account')) { ?>
                        <p class="text-danger"><?php echo error('group_account'); ?></p>
                        <?php } ?>
                    </div>
                </div>                
                <div class="row mb-3">
                    <?= form_label(lang('crud.entity'),'',['for' => 'entity_id', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_dropdown('entity_id',$entityItems ,old('entity_id', $data->entity_id ?? ''), "class='form-control select2 add-begin-option' data-label='".lang('crud.entity')."' required") ?>
                        <?php if (has_error('entity_id')) { ?>
                        <p class="text-danger"><?php echo error('entity_id'); ?></p>
                        <?php } ?>
                    </div>
                </div>            
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> <?= lang('app.save') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>

<?php $this->section('scripts') ?>
    <script type="text/javascript">
        $(function () {
            $('.add-begin-option').each(function(){
                var selected = $('input[name=name]').val()=='' ? 'selected="selected"' : '';
                $(this).prepend('<option '+selected+'>Pilih '+$(this).attr('data-label')+'</option>');
            });
        });            
    </script>
<?php $this->endSection() ?>
