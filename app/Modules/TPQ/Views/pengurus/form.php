<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.pengurus') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?>
        <?= lang('crud.pengurus') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
<div class="alert danger">
    This <?= lang('crud.pengurus') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
    <a href="#">Restore <?= lang('crud.pengurus') ?>?</a>
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
                <div class="col-sm-12 text-center">
                    <img src="<?= isset($data->path_image) ? site_url($data->path_image) : '/assets/admin/images/user.png' ?>" alt="" class="profile-user-img img-fluid img-circle">
                </div>
                <div class="offset-sm-4 col-sm-4">
                    <div class="input-group">
                        <div class="custom-file">
                            <?= form_upload('image', old('image', $data->image ?? ''), "class='custom-file-input' accept='image/*' required ") ?>
                            <?php if (has_error('image')) { ?>
                            <p class="text-danger"><?php echo error('image'); ?></p>
                            <?php } ?>
                            <?= form_label(lang('crud.path_image'), '', ['for' => 'path_image', 'class' => 'custom-file-label']) ?>
                        </div>
                        <div class="input-group-append clickable">
                            <span class="input-group-text">
                                <i class="fas fa-camera"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.name'), '', ['for' => 'name', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('name', old('name', $data->name ?? ''), "class='form-control varchar' required") ?>
                    <?php if (has_error('name')) { ?>
                    <p class="text-danger"><?php echo error('name'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.jabatan_id'), '', ['for' => 'jabatan_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('jabatan_id', $jabatanItems, old('jabatan_id', $data->jabatan_id ?? ''), "class='form-control select2' required") ?>
                    <?php if (has_error('jabatan_id')) { ?>
                    <p class="text-danger"><?php echo error('jabatan_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.provinsi_id'), '', ['for' => 'provinsi_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('provinsi_id', $provinsiItems, old('provinsi_id', $data->provinsi_id ?? ''), "class='form-control select2bs4 provinsi' required") ?>
                    <?php if (has_error('provinsi_id')) { ?>
                    <p class="text-danger"><?php echo error('provinsi_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.kota_id'), '', ['for' => 'kota_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('kota_id', $kotaItems, old('kota_id', $data->kota_id ?? ''), "class='form-control select2bs4 kota' data-level='kota/kabupaten' data-reference='select.provinsi' required") ?>
                    <?php if (has_error('kota_id')) { ?>
                    <p class="text-danger"><?php echo error('kota_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.kecamatan_id'), '', ['for' => 'kecamatan_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('kecamatan_id', $kecamatanItems, old('kecamatan_id', $data->kecamatan_id ?? ''), "class='form-control select2bs4 kecamatan' data-level='kecamatan' data-reference='select.kota' required") ?>
                    <?php if (has_error('kecamatan_id')) { ?>
                    <p class="text-danger"><?php echo error('kecamatan_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.desa_id'), '', ['for' => 'desa_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('desa_id', $desaItems, old('desa_id', $data->desa_id ?? ''), "class='form-control select2bs4 desa' data-level='desa' data-reference='select.kecamatan' required") ?>
                    <?php if (has_error('desa_id')) { ?>
                    <p class="text-danger"><?php echo error('desa_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.address'), '', ['for' => 'address', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_textarea('address', old('address', $data->address ?? ''), "rows='4' class='form-control varchar' required") ?>
                    <?php if (has_error('address')) { ?>
                    <p class="text-danger"><?php echo error('address'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.telephone'), '', ['for' => 'telephone', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('telephone', old('telephone', $data->telephone ?? ''), "class='form-control varchar' required") ?>
                    <?php if (has_error('telephone')) { ?>
                    <p class="text-danger"><?php echo error('telephone'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.email'), '', ['for' => 'email', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('email', old('email', $data->email ?? ''), "class='form-control varchar' ") ?>
                    <?php if (has_error('email')) { ?>
                    <p class="text-danger"><?php echo error('email'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.entity_id'), '', ['for' => 'entity_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('entity_id', $entityItems, old('entity_id', $data->entity_id ?? ''), "class='form-control select2' required") ?>
                    <?php if (has_error('entity_id')) { ?>
                    <p class="text-danger"><?php echo error('entity_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <?= form_label(lang('crud.description'), '', ['for' => 'description', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_textarea('description', old('description', $data->description ?? ''), "rows='4' class='form-control text' required") ?>
                    <?php if (has_error('description')) { ?>
                    <p class="text-danger"><?php echo error('description'); ?></p>
                    <?php } ?>
                </div>
            </div>
        </fieldset>

        <div class="text-end py-3">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i>
                <?= lang('crud.pengurus') ?></button>
        </div>

    </form>

</x-admin-box>

<?php $this->endSection(); ?>

<?= $this->section('styles') ?>
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/select2/css/select2.min.css'), 'css') ?>
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'), 'css') ?>
<?php $this->endSection(); ?>
<?= $this->section('scripts') ?>
    <!-- bs-custom-file-input -->
    <?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/select2/js/select2.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js'), 'js') ?>
    
    
    <script type="text/javascript">
        $(function () {
            bsCustomFileInput.init();
            $('input[name=email]').inputmask({
                'alias': 'email'
            })
            $('input[name=telephone]').inputmask({
                'regex': String.raw`\d{11,13}`
            })        
        
            $('input:file').change(function() {
                var i = $(this).prev('label').clone();
                var file = $(this).get(0).files[0].name;
                $(this).prev('label').text(file);
            });
            
            $(document).on('select2:open', () => {
                document.querySelector('.select2-search__field').focus();
            });

            $('select.provinsi').select2({theme: 'bootstrap4'});
            $('select.kota, select.kecamatan, select.desa').select2({                
                theme: 'bootstrap4',
                ajax: {
                    url: "<?= site_url('api/wilayahs') ?>",
                    type: "get",
                    delay: 250,
                    dataType: 'json',
                    data: function(params) {
                        return {
                            "search": {"level":$(this).data('level'),"kode":$($(this).data('reference')).val()+"%","nama":"%"+params.term+"%"}, // search term
                        };
                    },
                    processResults: function(response) {
                        const temp = []
                        $.each(response.data, function(i, d) {
                            temp.push({'id': d.kode, 'text' : d.nama});
                            console.log(d);
                        });
                        
                        return {
                            results: temp
                        };
                    },
                    cache: true
                }
            });            
        })
    </script>
<?= $this->endSection() ?>
