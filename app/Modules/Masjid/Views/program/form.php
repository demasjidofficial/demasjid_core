<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl; ?>" class="back">&larr; <?php echo lang('crud.back'); ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>'; ?>
        <?php echo lang('crud.program'); ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
<div class="alert danger">
    This <?php echo lang('crud.program'); ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
    <a href="#">Restore <?php echo lang('crud.program'); ?>?</a>
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
                <?php echo form_label(lang('crud.path_image'), '', ['for' => 'path_image', 'class' => 'col-form-label col-sm-2']); ?>
                <div class="col-sm-10">
                    <?php if (isset($data->path_image)) { ?>
                    <div class="justify-content-center photo-wrapper">
                        <img src="<?php echo site_url($data->path_image); ?>" alt="" class="img-thumbnail" style="height:150px">
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <?php echo form_upload('image', old('image', $data->path_image ?? ''), "class='custom-file-input'  placeholder='".lang('crud.path_image')."' accept='image/*' "); ?>
                                <label class="custom-file-label">Pilih brosur</label>
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
                <?php echo form_label(lang('crud.period'), '', ['for' => 'period', 'class' => 'col-form-label col-sm-2']); ?>
                <div class="col-sm-10">
                    <?php echo form_input('period', old('period', $data->period ?? ''), "class='form-control date' required placeholder='".lang('crud.period')."' "); ?>
                    <?php if (has_error('period')) { ?>
                    <p class="text-danger"><?php echo error('period'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?php echo form_label(lang('crud.name'), '', ['for' => 'name', 'class' => 'col-form-label col-sm-2']); ?>
                <div class="col-sm-10">
                    <?php echo form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required placeholder='".lang('crud.name')."' "); ?>
                    <?php if (has_error('name')) { ?>
                    <p class="text-danger"><?php echo error('name'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?php echo form_label(lang('crud.program_category_id'), '', ['for' => 'program_category_id', 'class' => 'col-form-label col-sm-2']); ?>
                <div class="col-sm-10">
                    <?php echo form_dropdown('program_category_id', $programCategoryItems, old('program_category_id', $data->program_category_id ?? ''), "class='form-control varchar' required placeholder='".lang('crud.program_category_id')."' "); ?>
                    <?php if (has_error('program_category_id')) { ?>
                    <p class="text-danger"><?php echo error('program_category_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?php echo form_label(lang('crud.description'), '', ['for' => 'description', 'class' => 'col-form-label col-sm-2']); ?>
                <div class="col-sm-10">
                    <?php echo form_textarea('description', old('description', $data->description ?? ''), "rows='4' class='form-control text' required placeholder='".lang('crud.description')."' "); ?>
                    <?php if (has_error('description')) { ?>
                    <p class="text-danger"><?php echo error('description'); ?></p>
                    <?php } ?>
                </div>
            </div>
            
            <div class="row mb-3">
                <?php echo form_label(lang('crud.cost_estimate'), '', ['for' => 'cost_estimate', 'class' => 'col-form-label col-sm-2']); ?>
                <div class="col-sm-10 block_detail_program">                    
                    <?php if (isset($detailProgramCost) && !empty($detailProgramCost)) { ?>
                    <?php foreach ($detailProgramCost as $index => $detail) { ?>
                    <div class="input-group mb-2">                        
                        <?php echo form_input('program_cost[name][]', old('program_cost[name]', $detail->name ?? ''), "class='form-control mr-1' placeholder='deskripsi' required"); ?>                        
                        <?php echo form_input('program_cost[cost_estimate][]', old('program_cost[cost_estimate]', $detail->cost_estimate ?? ''), "class='form-control numeric' onchange='updateTotal(this)' placeholder='jumlah' required"); ?>                        
                        <div class="input-group-append">
                            <?php if(!$index){
                                echo '<span class="input-group-text" role="button" onclick="addRow(this)">
                                        <i class="fas fa-plus"></i>
                                    </span>';
                                }else{
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
                        <?php echo form_input('program_cost[name][]', old('program_cost[name]', $data->program_cost_name ?? ''), "class='form-control mr-1' placeholder='deskripsi' required"); ?>                        
                        <?php echo form_input('program_cost[cost_estimate][]', old('program_cost[cost_estimate]', $data->program_cost_estimate ?? ''), "class='form-control numeric' onchange='updateTotal(this)' placeholder='jumlah' required"); ?>
                        
                        <div class="input-group-append">
                            <span class="input-group-text" role="button" onclick="addRow(this)">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="input-group mb-2">    
                        <?= form_input('', 'Total', "class='form-control mr-1' placeholder='deskripsi' readonly") ?>                                            
                        <?php echo form_input('total_cost_estimate', old('total_cost_estimate', $data->cost_estimate ?? ''), "class='form-control numeric' placeholder='jumlah' readonly"); ?>
                        
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-book"></i>
                            </span>
                        </div>
                    </div>
                    <?php echo form_hidden('cost_estimate', $data->cost_estimate ?? 0); ?>
                    
                    <?php if (has_error('cost_estimate')) { ?>
                    <p class="text-danger"><?php echo error('cost_estimate'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?php echo form_label(lang('crud.state'), '', ['for' => 'state', 'class' => 'col-form-label col-sm-2']); ?>
                <div class="col-sm-10">
                    <?php echo form_dropdown('state', $stateItems, old('state', $data->state ?? ''), "class='form-control varchar' required placeholder='".lang('crud.state')."' "); ?>
                    <?php if (has_error('state')) { ?>
                    <p class="text-danger"><?php echo error('state'); ?></p>
                    <?php } ?>
                </div>
            </div>
        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i>
                <?php echo lang('app.save'); ?></button>
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
<script type="text/javascript">
    $(function () {
        $('input[name=period]').daterangepicker({
            "autoApply": true,
            "locale": {
                "format": 'YYYY-MM-DD'
            }
        });
        
        $('.numeric').inputmask({
            'alias': 'numeric',
            'groupSeparator': '.',
            'radixPoint': ',',
            'digits': 0,
            'autoGroup': true
        })
    });

    function addRow(elm){
        const _topParent = $(elm).closest('.input-group');
        const _clone = _topParent.clone();
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

    function removeRow(elm){
        const _topParent = $(elm).closest('.input-group')
        const _elmOther = _topParent.prev()
        _topParent.remove();
        updateTotal(_elmOther.find('span[role=button]'));
    }

    function updateTotal(elm){
        const _form = $(elm).closest('form')
        let _result = 0
        _form.find('input[name ^= "program_cost[cost_estimate]"]').each(function(){
            _result += parseInt($(this).inputmask('unmaskedvalue')) || 0
        })
        _form.find('input[name=cost_estimate]').val(_result)
        _form.find('input[name=total_cost_estimate]').val(_result)
        _form.find('input[name=total_cost_estimate]').trigger('change')
        
    }   
</script>
<?php $this->endSection(); ?>