<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.tugas_tim') ?></a>
        <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>  <?= lang('crud.tugas_tim') ?></h4>
    </x-page-head>

    <?php if (isset($data) && null !== $data->deleted_at) { ?>
        <div class="alert danger">
            This <?= lang('crud.tugas_tim') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
            <a href="#">Restore <?= lang('crud.tugas_tim') ?>?</a>
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
                    <?= form_label(lang('crud.id_staff'),'',['for' => 'id_staff', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('id_staff', old('id_staff', $data->id_staff ?? ''), "class='form-control int' required placeholder='".lang('crud.id_staff')."' ") ?>
                        <?php if (has_error('id_staff')) { ?>
                        <p class="text-danger"><?php echo error('id_staff'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <?= form_label(lang('crud.tugas'),'',['for' => 'tugas', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('tugas', old('tugas', $data->tugas ?? ''), "class='form-control varchar' required placeholder='".lang('crud.tugas')."' ") ?>
                        <?php if (has_error('tugas')) { ?>
                        <p class="text-danger"><?php echo error('tugas'); ?></p>
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
                <div class="row mb-3">
                    <?= form_label(lang('crud.updated_by'),'',['for' => 'updated_by', 'class' => 'col-form-label col-sm-2']) ?>
                    <div class="col-sm-10">
                        <?= form_input('updated_by', old('updated_by', $data->updated_by ?? ''), "class='form-control int'  placeholder='".lang('crud.updated_by')."' ") ?>
                        <?php if (has_error('updated_by')) { ?>
                        <p class="text-danger"><?php echo error('updated_by'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </fieldset>

            <div class="text-end py-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.tugas_tim') ?></button>
            </div>

        </form>

    </x-admin-box>

<?php $this->endSection(); ?>
