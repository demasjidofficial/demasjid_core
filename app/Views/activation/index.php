<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<div class="card">
    <div class="card-body login-card-body rounded25">
      <p class="login-box-msg">
          <h5 style="text-align:center;">Assalamualaikum<br/>Silakan lengkapi untuk aktivasinya</h5>
      </p>
      
      <?= form_open_multipart('/activation') ?>
        <!-- Nama Masjid -->
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <?= form_input('name', '', 'class="form-control" placeholder="Masukkan nama masjid" required') ?>
                </div>
            </div>
        </div>

        <!-- Email Masjid -->
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <?= form_input('email', '', 'class="form-control" placeholder="Masukkan email aktif" required') ?>
                </div>
            </div>
        </div>

        <!-- telephone Masjid -->
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <?= form_input('telephone', '', 'class="form-control" placeholder="Masukkan WA/Telp aktif" required') ?>
                </div>
            </div>
        </div>

        <!-- Logo Masjid -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" name="logo" id="logo" accept="image/*" required />
                        <label class="custom-file-label">Pilih logo masjid</label>
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
        <!-- /.row -->

        <!-- Foto Masjid -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image" accept="image/*" required />
                        <label class="custom-file-label">Pilih foto masjid</label>
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
        <!-- /.row -->

        <!-- Provinsi -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <!--?= form_dropdown('provinsi',[] ,'', 'class="form-control select2 provinsi" placeholder="Pilih provinsi"') ?-->
                    <select class="form-control select2 provinsi" name="provinsi" style="width: 100%;">
                    <option value="">Pilih provinsi</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Kota/Kab -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <!--?= form_dropdown('kabupaten',[] ,'', 'class="form-control kabupaten" placeholder="Pilih Kota/Kab"') ?-->
                    <select class="form-control select2 kabupaten" name="kabupaten" style="width: 100%;">
                        <option value="">Pilih kota/kab</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Kecamatan -->
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <!--?= form_dropdown('kecamatan',[] ,'', 'class="form-control kecamatan" placeholder="Pilih Kecamatan"') ?-->
                    <select class="form-control select2 kecamatan" name="kecamatan" style="width: 100%;">
                        <option value="">Pilih kecamatan</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Kelurahan/Desa -->
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <!--?= form_dropdown('wilayah_id',[] ,'', 'class="form-control desa" placeholder="Pilih Kelurahan/Desa" required') ?-->
                    <select class="form-control select2 desa" name="wilayah_id" style="width: 100%;" required>
                        <option value="">Pilih kelurahan/desa</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Alamat -->
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <?= form_textarea('address', '', 'class="form-control" rows="2" placeholder="Masukkan alamat" required') ?>
                </div>
            </div>
        </div>
        <!-- Button Aktifkan -->
        <div class="row">
            <div class="col-12">
                <?= form_submit('','AKTIFKAN', 'class="btn btn-success btn-block"') ?>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
      <?= form_close() ?>

    </div>
</div>
     
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <!-- bs-custom-file-input -->
    <?= asset_link('admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/select2/js/select2.js', 'js') ?>
    <?= asset_link('admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js', 'js') ?>
    
    <script type="text/javascript">
        $(function () {
            bsCustomFileInput.init();
            $('input[name=email]').inputmask({
                'alias': 'email'
            })
            $('input[name=telephone]').inputmask({
                'regex': String.raw`\d{11,13}`
            })
        });
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
