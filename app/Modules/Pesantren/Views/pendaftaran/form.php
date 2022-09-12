<?php $this->extend('master'); ?>

<?php $this->section('styles') ?>
<?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css', 'css') ?>
<?php $this->endSection(); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.add_new') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.pendaftaran') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.pendaftaran') ?>?</a>
    </div>
<?php } ?>


<x-admin-box>

    <div class="title text-center">
        <h4><strong><?= strtoupper(lang('crud.pendaftaran')) ?> </strong></h4>
    </div>

    <form action="<?php echo $actionUrl; ?>" method="post" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <?php if (isset($data) && null !== $data) { ?>
            <input type="hidden" name="_method" value="PUT" />
            <input type="hidden" name="id" value="<?php echo $data->id; ?>">
        <?php } ?>

        <fieldset>
            <!-- Card Biodata Diri -->
            <div class="col">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"><?= strtoupper(lang('crud.biodata_diri')) ?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <?= form_label(lang('crud.path_image'), '', ['for' => 'path_image', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-md-6">
                                <?php if (isset($data->path_image)) : ?>
                                    <div class="justify-content-center photo-wrapper">
                                        <img src="<?= site_url($data->path_image) ?>" alt="" class="img-thumbnail" style="height:150px">
                                    </div>
                                <?php endif ?>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <?php echo form_upload('image', old('image', $data->path_image ?? ''), "class='custom-file-input'  placeholder='" . lang('crud.path_image') . "' accept='image/*' " . (!isset($data->path_image) ? 'required' : '')) ?>
                                            <label class="custom-file-label">Pilih Photo</label>

                                            <?php if (has_error('path_image')) { ?>
                                                p class="text-danger"><?php echo error('path_image'); ?></p>
                                            <?php } ?>
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
                        <div class="row">
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.fullname'), '', ['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.fullname') . "' ") ?>
                                        <?php if (has_error('name')) { ?>
                                            <p class="text-danger"><?php echo error('name'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.nick_name'), '', ['for' => 'nick_name', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('nick_name', old('nick_name', $data->nick_name ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.nick_name') . "' ") ?>
                                        <?php if (has_error('nick_name')) { ?>
                                            <p class="text-danger"><?php echo error('nick_name'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.gender'), '', ['for' => 'gender', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-5">
                                <?= form_dropdown('gender', old('gender', $genderItems, $data->gender ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.gender') . "' ") ?>
                                <?php if (has_error('gender')) { ?>
                                    <p class="text-danger"><?php echo error('gender'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.birth_place'), '', ['for' => 'birth_place', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('birth_place', old('birth_place', $data->birth_place ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.birth_place') . "' ") ?>
                                        <?php if (has_error('birth_place')) { ?>
                                            <p class="text-danger"><?php echo error('birth_place'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.birth_date'), '', ['for' => 'birth_date', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('birth_date', old('birth_date', $data->birth_date ?? ''), "class='form-control date' required placeholder='" . lang('crud.birth_date') . "' ") ?>
                                        <?php if (has_error('birth_date')) { ?>
                                            <p class="text-danger"><?php echo error('birth_date'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.provinsi_id'), '', ['for' => 'provinsi_id', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('provinsi_id', old('provinsi_id', $data->provinsi_id ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.provinsi_id') . "' ") ?>
                                <?php if (has_error('provinsi_id')) { ?>
                                    <p class="text-danger"><?php echo error('provinsi_id'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.kota_id'), '', ['for' => 'kota_id', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('kota_id', old('kota_id', $data->kota_id ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.kota_id') . "' ") ?>
                                <?php if (has_error('kota_id')) { ?>
                                    <p class="text-danger"><?php echo error('kota_id'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.kecamatan_id'), '', ['for' => 'kecamatan_id', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('kecamatan_id', old('kecamatan_id', $data->kecamatan_id ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.kecamatan_id') . "' ") ?>
                                <?php if (has_error('kecamatan_id')) { ?>
                                    <p class="text-danger"><?php echo error('kecamatan_id'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.desa_id'), '', ['for' => 'desa_id', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('desa_id', old('desa_id', $data->desa_id ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.desa_id') . "' ") ?>
                                <?php if (has_error('desa_id')) { ?>
                                    <p class="text-danger"><?php echo error('desa_id'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.address'), '', ['for' => 'address', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_textarea('address', old('address', $data->address ?? ''), "rows='4' class='form-control varchar'  placeholder='" . lang('crud.address') . "' ") ?>
                                <?php if (has_error('address')) { ?>
                                    <p class="text-danger"><?php echo error('address'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Data Pendidikan -->
            <div class="col">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"><?= strtoupper(lang('crud.data_pendidikan')) ?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <?= form_label(lang('crud.nis'), '', ['for' => 'nis', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('nis', old('nis', $data->nis ?? ''), "class='form-control int'  placeholder='" . lang('crud.nis') . "' ") ?>
                                <?php if (has_error('nis')) { ?>
                                    <p class="text-danger"><?php echo error('nis'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.class_id'), '', ['for' => 'class_id', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_dropdown('class_id', $kelasItems, old('class_id', $data->class_id ?? ''), "class='form-control select2' required placeholder='" . lang('crud.class_id') . "' ") ?>
                                <?php if (has_error('class_id')) { ?>
                                    <p class="text-danger"><?php echo error('class_id'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.school_origin'), '', ['for' => 'school_origin', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_input('school_origin', old('school_origin', $data->school_origin ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.school_origin') . "' ") ?>
                                <?php if (has_error('school_origin')) { ?>
                                    <p class="text-danger"><?php echo error('school_origin'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Data OrangTua -->
            <div class="col">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"><?= strtoupper(lang('crud.data_orangtua')) ?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="bio-ayah">
                            <h4><?= lang('crud.father') ?></h4>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.father_name'), '', ['for' => 'father_name', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('father_name', old('father_name', $data->father_name ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.father_name') . "' ") ?>
                                        <?php if (has_error('father_name')) { ?>
                                            <p class="text-danger"><?php echo error('father_name'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.father_job'), '', ['for' => 'father_job', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('father_job', old('father_job', $data->father_job ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.father_job') . "' ") ?>
                                        <?php if (has_error('father_job')) { ?>
                                            <p class="text-danger"><?php echo error('father_job'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.father_tlpn'), '', ['for' => 'father_tlpn', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('father_tlpn', old('father_tlpn', $data->father_tlpn ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.father_tlpn') . "' ") ?>
                                        <?php if (has_error('father_tlpn')) { ?>
                                            <p class="text-danger"><?php echo error('father_tlpn'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.father_email'), '', ['for' => 'father_email', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('father_email', old('father_email', $data->father_email ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.father_email') . "' ") ?>
                                        <?php if (has_error('father_email')) { ?>
                                            <p class="text-danger"><?php echo error('father_email'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bio-ibu">
                            <h4><?= lang('crud.mother') ?></h4>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.mother_name'), '', ['for' => 'mother_name', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('mother_name', old('mother_name', $data->mother_name ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.mother_name') . "' ") ?>
                                        <?php if (has_error('mother_name')) { ?>
                                            <p class="text-danger"><?php echo error('mother_name'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.mother_job'), '', ['for' => 'mother_job', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('mother_job', old('mother_job', $data->mother_job ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.mother_job') . "' ") ?>
                                        <?php if (has_error('mother_job')) { ?>
                                            <p class="text-danger"><?php echo error('mother_job'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.mother_tlpn'), '', ['for' => 'mother_tlpn', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('mother_tlpn', old('mother_tlpn', $data->mother_tlpn ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.mother_tlpn') . "' ") ?>
                                        <?php if (has_error('mother_tlpn')) { ?>
                                            <p class="text-danger"><?php echo error('mother_tlpn'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row mb-3">
                                    <?= form_label(lang('crud.mother_email'), '', ['for' => 'mother_email', 'class' => 'col-form-label col-sm-2']) ?>
                                    <div class="col">
                                        <?= form_input('mother_email', old('mother_email', $data->mother_email ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.mother_email') . "' ") ?>
                                        <?php if (has_error('mother_email')) { ?>
                                            <p class="text-danger"><?php echo error('mother_email'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Status Pendaftaran -->
            <div class="col">
                <div class="card card-success">
                    <div class="card-body">
                        <div class="row mb-3">
                            <?= form_label(lang('crud.state_register'), '', ['for' => 'state', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_dropdown('state', old('state', $registerItems, $data->state ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.state_register') . "' ") ?>
                                <?php if (has_error('state')) { ?>
                                    <p class="text-danger"><?php echo error('state'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <?= form_label(lang('crud.description'), '', ['for' => 'description', 'class' => 'col-form-label col-sm-2']) ?>
                            <div class="col-sm-10">
                                <?= form_textarea('description', old('description', $data->description ?? ''), "rows='4' class='form-control text' required placeholder='" . lang('crud.description') . "' ") ?>
                                <?php if (has_error('description')) { ?>
                                    <p class="text-danger"><?php echo error('description'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.save') ?></button>
        </div>

    </form>

</x-admin-box>

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<?= asset_link('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js', 'js'); ?>
<?= asset_link('admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js', 'js') ?>
<?php echo asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js', 'js'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {

        bsCustomFileInput.init();
        $('input:file').change(function() {
            var i = $(this).prev('label').clone();
            var file = $(this).get(0).files[0].name;
            $(this).prev('label').text(file);
        });
    });
</script>
<?php $this->endSection(); ?>