<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<!-- Register Area Start -->
<div class="section-padding10">
    <div class="card ml-10 mr-10 p-3">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Tittle -->
                <div class="text-center mb-40">
                    <h2>Assalamualaikum <br>Silakan lengkapi untuk aktivasinya</h2>                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <?= form_open_multipart('/activation') ?>
                <div class="form-row">
                    <div class="col-6">
                        <div class="input-group border">
                            <label class="pl-2">Logo</label>
                            <?= form_upload('logo','','class="form-control form-control-lg fade in" accept="image/*"  required') ?>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-camera"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group border">
                            <label class="pl-2">Foto</label>
                            <?= form_upload('image','','class="form-control form-control-lg fade in" accept="image/*"  required') ?>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-camera"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <div class="col-12">
                        <?= form_input('name', '', 'class="form-control form-control-lg" placeholder="nama" required') ?>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <div class="col-12">
                        <?= form_dropdown('provinsi',[] ,'', 'class="form-control form-control-lg provinsi" placeholder="nama"') ?>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <div class="col-12">
                        <?= form_dropdown('kabupaten',[] ,'', 'class="form-control form-control-lg kabupaten" placeholder="nama"') ?>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <div class="col-12">
                        <?= form_dropdown('kecamatan',[] ,'', 'class="form-control form-control-lg kecamatan" placeholder="nama"') ?>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <div class="col-12">
                        <?= form_dropdown('wilayah_id',[] ,'', 'class="form-control form-control-lg desa" placeholder="nama" required') ?>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <div class="col-12">
                        <?= form_textarea('address', '', 'class="form-control form-control-lg" rows="4" placeholder="alamat" required') ?>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <div class="col-12">
                        <?= form_submit('','activation', 'class="btn btn-success form-control rounded"') ?>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>        

<?= $this->endSection() ?>

<?= $this->section('styles') ?>
    <?= asset_link('admin/theme-adminlte/plugins/select2/css/select2.css', 'css') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <?= asset_link('admin/theme-adminlte/plugins/select2/js/select2.js', 'js') ?>
    <script type="text/javascript">
        $(function(){
            $('input:file').change(function() {
                var i = $(this).prev('label').clone();
                var file = $(this).get(0).files[0].name;
                $(this).prev('label').text(file);
            });
            $('select.provinsi').select2({
                ajax: {
                    url: "<?= site_url('api/wilayahs') ?>",
                    type: "get",
                    delay: 250,
                    dataType: 'json',
                    data: function(params) {
                        return {
                            "search": {"level":"provinsi","nama":"%"+params.term+"%"}, // search term
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
        
            $('select.kabupaten').select2({
                ajax: {
                    url: "<?= site_url('api/wilayahs') ?>",
                    type: "get",
                    delay: 250,
                    dataType: 'json',
                    data: function(params) {
                        return {
                            "search": {"level":"kota/kabupaten","kode":$('select.provinsi').val()+"%","nama":"%"+params.term+"%"}, // search term
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

            $('select.kecamatan').select2({
                ajax: {
                    url: "<?= site_url('api/wilayahs') ?>",
                    type: "get",
                    delay: 250,
                    dataType: 'json',
                    data: function(params) {
                        return {
                            "search": {"level":"kecamatan","kode":$('select.kabupaten').val()+"%","nama":"%"+params.term+"%"}, // search term
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

            $('select.desa').select2({
                ajax: {
                    url: "<?= site_url('api/wilayahs') ?>",
                    type: "get",
                    delay: 250,
                    dataType: 'json',
                    data: function(params) {
                        return {
                            "search": {"level":"desa","kode":$('select.kecamatan').val()+"%","nama":"%"+params.term+"%"}, // search term
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
