<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.tim_fundraising') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.tim_fundraising') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.tim_fundraising') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.tim_fundraising') ?>?</a>
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
                <?= form_label(lang('crud.target_id'), '', ['for' => 'target_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('target_id', $targetItems, old('target_id', $data->target_id ?? ''), "class='form-control select2bs4' required") ?>
                    <?php if (has_error('target_id')) { ?>
                        <p class="text-danger"><?php echo error('target_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.supervisior'), '', ['for' => 'supervisior', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('supervisior', $supervisorItems, old('supervisior', $data->supervisior ?? ''), "class='form-control select2bs4' required") ?>
                    <?php if (has_error('supervisior')) { ?>
                        <p class="text-danger"><?php echo error('supervisior'); ?></p>
                    <?php } ?>
                </div>
            </div>




            <div class="row mb-3">
                <?= form_label(lang('crud.kode_tim'), '', ['for' => 'kode_tim', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('kode_tim', old('kode_tim', $data->kode_tim ?? ''), "class='form-control int' required placeholder='" . lang('crud.kode_tim') . "' ") ?>
                    <?php if (has_error('kode_tim')) { ?>
                        <p class="text-danger"><?php echo error('kode_tim'); ?></p>
                    <?php } ?>
                </div>
            </div>

            <div class="row mb-3">
                <?= form_label(lang('crud.nama_tim'), '', ['for' => 'nama_tim', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('nama_tim', old('nama_tim', $data->nama_tim ?? ''), "class='form-control int' required placeholder='" . lang('crud.nama_tim') . "' ") ?>
                    <?php if (has_error('nama_tim')) { ?>
                        <p class="text-danger"><?php echo error('nama_tim'); ?></p>
                    <?php } ?>
                </div>
            </div>



            <div class="row mb-3">
                <?php echo form_label(lang('crud.staff'), '', ['for' => 'staff', 'class' => 'col-form-label col-sm-2']); ?>
                <div class="col-sm-10 block_detail_program">
                    <?php if (isset($timStaff) && !empty($timStaff)) { ?>
                        <?php foreach ($timStaff as $index => $detail) { ?>
                            <div class="input-group mb-2">

                                <?= form_dropdown('tim_staff[id_user][]', $staffItems, old('tim_staff[id_user]', $detail->user_id ?? ''), "class='form-control select2bs4' required") ?>




                                <div class="input-group-append">
                                    <?php if (!$index) {
                                        echo '<span class="input-group-text" role="button" onclick="addRow(this)">
                                        <i class="fas fa-plus"></i>
                                    </span>';
                                    } else {
                                        echo '<span class="input-group-text" role="button" onclick="removeRow(this)">
                                        <i class="fas fa-minus"></i>
                                    </span>';
                                    }
                                    ?>

                                </div>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <div class="input-group mb-2">

                            <?= form_dropdown('tim_staff[id_user][]', $staffItems, old('tim_staff[id_user]', $detail->user_id ?? ''), "class='form-control select2bs4' required") ?>

                            <div class="input-group-append">
                                <span class="input-group-text" role="button" onclick="addRow(this)">
                                    <i class="fas fa-plus"></i>
                                </span>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="input-group mb-2">

                    </div>
                    <?php echo form_hidden('staff', $data->staff ?? 0); ?>

                    <?php if (has_error('staff')) { ?>
                        <p class="text-danger"><?php echo error('staff'); ?></p>
                    <?php } ?>
                </div>
            </div>

            <!-- <div class="row mb-3">
                <?php echo form_label(lang('crud.staff'), '', ['for' => 'staff', 'class' => 'col-form-label col-sm-2']); ?>
                <div class="col-sm-10 block_detail_program">
                    <?php if (isset($timStaff) && !empty($timStaff)) { ?>
                        <?php foreach ($timStaff as $index => $detail) { ?>
                            <div class="input-group mb-2">
                               
                                <?= form_dropdown('timstaff[id_user][]', $staffItems, old('timstaff[id_user]', $data->staff ?? ''), "class='form-control duallistbox' multiple='multiple' required") ?>
                        
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <div class="input-group mb-2">
                        <?= form_dropdown('timstaff[id_user][]', $staffItems, old('timstaff[id_user]', $data->staff ?? ''), "class='form-control duallistbox' multiple='multiple' required") ?>
                        
                        </div>
                    <?php } ?>
                    <div class="input-group mb-2">

                    </div>
                    <?php echo form_hidden('staff', $data->staff ?? 0); ?>

                    <?php if (has_error('staff')) { ?>
                        <p class="text-danger"><?php echo error('staff'); ?></p>
                    <?php } ?>
                </div>
            </div> -->


        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.tim_fundraising') ?></button>
        </div>

    </form>

</x-admin-box>

<?php $this->endSection(); ?>
<?php $this->section('styles') ?>
<?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css', 'css') ?>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<?php echo asset_link('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js', 'js'); ?>
<?php echo asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js', 'js'); ?>
<?php echo asset_link('admin/theme-adminlte//plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js', 'js'); ?>
<script type="text/javascript">


    function makeid(length) {
        var result = '';
        var characters = '0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() *
                charactersLength));
        }
        return result;
    }

    console.log(makeid(5));
    $('input[name="kode_tim"]').val(makeid(5));
    $('input[name="kode_tim"]').attr('readonly', 'readonly'); 
    
    $('.duallistbox').bootstrapDualListbox()
    $(function() {
        $('input[name=period]').daterangepicker({
            "autoApply": true,
            "locale": {
                "format": 'YYYY-MM-DD'
            }
        });

        $('.numeric').inputmask({
            'alias': 'currency',
            'rightAlign': false,
            'digits': '0',
            'allowMinus': 'false',
        })
    });

    function addRow(elm) {
        const _topParent = $(elm).closest('.input-group');
        const _clone = _topParent.clone();
        _clone.find('dropdown').val('');
        _clone.find('input').val('');
        _clone.find('.numeric').inputmask({
            'alias': 'numeric',
            'groupSeparator': '.',
            'radixPoint': ',',
            'digits': 0,
            'autoGroup': true
        })
        _clone.find('span.input-group-text')
            .replaceWith(`<span class="input-group-text" role="button" onclick="removeRow(this)">
                                <i class="fas fa-minus"></i>
                            </span>`);
        _clone.insertBefore(_topParent.siblings('.input-group:last'));
    }

    function removeRow(elm) {
        const _topParent = $(elm).closest('.input-group')
        const _elmOther = _topParent.prev()
        _topParent.remove();
        updateTotal(_elmOther.find('span[role=button]'));
    }

    function updateTotal(elm) {
        const _form = $(elm).closest('form')
        let _result = 0

        _form.find('dropdown[name=staff]').val(_result)


    }
</script>
<?php $this->endSection(); ?>