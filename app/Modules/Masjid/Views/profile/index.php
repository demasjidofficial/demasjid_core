<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <a href="#" class="back" onclick="history.back()">&larr; <?= lang('crud.back') ?></a>
                <h4><?= lang('crud.profile') ?></h4>
            </div>            
        </div>
    </x-page-head>    
    <?= view($viewPrefix.'\_tabs', ['entities' => $entities, 'actionUrl' => url_to($controller), 'activeEntity' => $dataForm['activeEntity']]) ?>
    <x-admin-box>
        <div>
            <?= view($viewPrefix.'\form', $dataForm) ?>
        </div>

    </x-admin-box>
<?php $this->endSection(); ?>

<?= $this->section('styles') ?>
<?= asset_link('admin/theme-adminlte/plugins/select2/css/select2.min.css', 'css') ?>
<?= asset_link('admin/theme-adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css', 'css') ?>
<?php $this->endSection(); ?>

<?= $this->section('scripts') ?>
    <!-- bs-custom-file-input -->
    <?= asset_link('admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/select2/js/select2.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js', 'js') ?>
    <script type="text/javascript">
        $(function () {
            bsCustomFileInput.init();                
            $('input:file').change(function() {
                var i = $(this).prev('label').clone();
                var file = $(this).get(0).files[0].name;
                $(this).prev('label').text(file);
            });
            $('input[name=email]').inputmask({
                'alias': 'email'                
            });
            $('input[name=telephone]').inputmask({
                'mask': '629{3}-9{4}-9{3,5}'
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
