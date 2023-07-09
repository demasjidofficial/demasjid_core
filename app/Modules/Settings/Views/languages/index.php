<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.languages') ?></h2>
            </div>
            <div class="col-auto">
                <a href="<?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  <?= lang('crud.add_new') ?></a>
            </div>
        </div>
    </x-page-head>

    <x-admin-box>
        <div>
            <div class="row">
                <!-- List languagess -->
                <div class="col table-responsive" id="languages-list">
                    <?php echo $this->include($viewPrefix.'\_table'); ?>
                    <?php echo $pager->links() ?>
                </div>
            </div>
        </div>

    </x-admin-box>
<?php $this->endSection(); ?>


<?= $this->section('styles') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/select2/css/select2.min.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'), 'css') ?>
<?php $this->endSection(); ?>

<?= $this->section('scripts') ?>
    <!-- bs-custom-file-input -->
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/select2/js/select2.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js'), 'js') ?>
    
    <script type="text/javascript">
        $(function () {
            bsCustomFileInput.init();                
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
