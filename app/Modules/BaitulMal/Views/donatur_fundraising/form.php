<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.back') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.donatur') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.add_donatur') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.donatur') ?>?</a>
    </div>
<?php } ?>


<x-admin-box>


    <form action="<?php echo $actionUrl; ?>" method="post" enctype="multipart/form-data">

        <?php
        echo csrf_field();
?>

        <?php if (isset($data) && null !== $data) { ?>
            <input type="hidden" name="_method" value="PUT" />
            <input type="hidden" name="id" value="<?php echo $data->id; ?>">
        <?php } ?>

        <fieldset>
            <div class="row mb-3">
                <?= form_label(lang('crud.tugas'), '', ['for' => 'tugas_id', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_dropdown('tugas_id', $tugasItems, old('tugas_id', $data->tugas_id ?? ''), "class='form-control select2' required  placeholder='" . lang('crud.tugas') . "' ") ?>
                    <?php if (has_error('tugas_id')) { ?>
                        <p class="text-danger"><?php echo error('tugas_id'); ?></p>
                    <?php } ?>
                </div>
            </div>
                        <div class="row" id="de_form_donatur">
                <div class="col-6 col-sm-6">
                    <div class="row">
                        <div class="col-12" id="de_form_name_nominal">
                            <div class="row">
                                <div class="col-12 justify-content-center " id="de_capture">
                                        <div class="photo-wrapper">
                                            <img id="campaign_imgpreview" src="<?= (isset($data->path_image)) ? site_url($data->path_image) : '/uploads/images/blank.jpg' ?>" alt="" class="img-thumbnail">
                                            <div id="my_camera" style="display: none;">

                                            </div>



                                        </div>
                                        <div class="form-group">
                                            <?= form_input('image_path', old('image_path', $data->path_image ?? ''), "class='form-control varchar' hidden required placeholder='" . lang('crud.path_image') . "' ") ?>
                                            <?php if (has_error('image_path')) { ?>
                                                <p class="text-danger"><?php echo error('image_path'); ?></p>
                                            <?php } ?>
                                            <div class="input-group">
                                                <div id="take_img" style="display: none;">
                                                    <input type=button class="btn btn-danger btn-md" value="Ambil Gambar" onClick="take_snapshot()">
                                                </div>
                                                <i class="fas fa-camera">
                                                    <input type=button value="Buka Kamera" class="btn btn-default btn-md" onClick="open_camera()">
                                                </i>
                                            </div>

                                        </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <?= form_label(lang('crud.name'), '', ['for' => 'nama', 'class' => 'col-form-label col-sm-2']) ?>
                                <div class="col-sm-10">
                                    <?= form_input('nama', old('nama', $data->nama ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.name') . "' ") ?>
                                    <?php if (has_error('name')) { ?>
                                        <p class="text-danger"><?php echo error('name'); ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <?= form_label(lang('crud.nominal'), '', ['for' => 'nominal', 'class' => 'col-form-label col-sm-2']) ?>
                                <div class="col-sm-10">
                                    <?= form_input('nominal', old('nominal', $data->nominal ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.nominal') . "' ") ?>
                                    <?php if (has_error('nominal')) { ?>
                                        <p class="text-danger"><?php echo error('nominal'); ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <?= form_label(lang('crud.tgl_transaksi'), '', ['for' => 'tanggal_transaksi', 'class' => 'col-form-label col-12']) ?>
                        <div class="col-12">
                            <?= form_input('tanggal_transaksi', old('tanggal_transaksi', $data->tanggal_transaksi ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.tgl_transaksi') . "' ") ?>
                            <?php if (has_error('tanggal_transaksi')) { ?>
                                <p class="text-danger"><?php echo error('tanggal_transaksi'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <?= form_label(lang('crud.alamat'), '', ['for' => 'alamat', 'class' => 'col-form-label col-12']) ?>
                        <div class="col-12">
                            <?= form_textarea('alamat', old('alamat', $data->alamat ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.alamat') . "' ") ?>
                            <?php if (has_error('alamat')) { ?>
                                <p class="text-danger"><?php echo error('alamat'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                                <div class="col-6 col-sm-6">
                    <div class="row mb-3" id="de_signature">
                        <?= form_label(lang('crud.ttd_donatur'), '', ['for' => 'ttd_donatur', 'class' => 'col-form-label col-12']) ?>
                        <div class="col-12">
                            <canvas id="signature-pad"  class="signature-pad"></canvas>
                            <img id="signature_img"   src="<?= (isset($data->path_signature)) ? site_url($data->path_signature) : '/uploads/images/blank.jpg' ?>" name="signature_img" alt="" class="img-thumbnail">
                            <?= form_input('signature_path', old('signature_path', $data->path_signature ?? ''), "class='form-control varchar' hidden required placeholder='" . lang('crud.signature_path') . "' ") ?>
                            <?php if (has_error('signature_path')) { ?>
                                <p class="text-danger"><?php echo error('signature_path'); ?></p>
                            <?php } ?>
                            
                        </div>  
                        <div id="de_wrap_button_small">
                            <button type="button" class="btn btn-danger btn-sm" id="clear">Reset Ttd</button>
                            <button type="button" style="<?= (isset($data->path_signature)) ? 'display:none;' : '' ?>" class="btn btn-primary btn-sm" id="save-png">Simpan Ttd</button>
                        </div>
                        <br> 
                    </div> 
                    <div class="row mb-3">
                        <?= form_label(lang('crud.email'), '', ['for' => 'email', 'class' => 'col-form-label col-sm-2']) ?>
                        <div class="col-sm-10">
                            <?= form_input('email', old('email', $data->email ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.email') . "' ") ?>
                            <?php if (has_error('email')) { ?>
                                <p class="text-danger"><?php echo error('email'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <?= form_label(lang('crud.no_hp'), '', ['for' => 'no_hp', 'class' => 'col-form-label col-sm-2']) ?>
                        <div class="col-sm-10">
                            <?= form_input('no_hp', old('no_hp', $data->no_hp ?? ''), "class='form-control varchar'  placeholder='" . lang('crud.no_hp') . "' ") ?>
                            <?php if (has_error('no_hp')) { ?>
                                <p class="text-danger"><?php echo error('no_hp'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="row mb-3">

                <?= form_label(lang('crud.nominal'), '', ['for' => 'nominal', 'class' => 'col-form-label col-sm-2']) ?>
                <div class="col-sm-10">
                    <?= form_input('nominal', old('nominal', $data->nominal ?? ''), "class='form-control varchar' required placeholder='" . lang('crud.nominal') . "' ") ?>
                    <?php if (has_error('nominal')) { ?>
                        <p class="text-danger"><?php echo error('nominal'); ?></p>
                    <?php } ?>
                </div>
            </div>
                     -->

        </fieldset>

        <div class="text-end py-3">
            <!-- <button type="button" class="btn btn-primary btn-sm" onclick="save()"><i class="fas fa-save"></i> <?= lang('crud.save') ?></button> -->
            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.save') ?></button>
        </div>

    </form>

</x-admin-box>

<?php $this->endSection(); ?>
<?php $this->section('styles') ?>

<?php echo assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/webcam/webcam.min.js'), 'js'); ?>
<?php echo assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js'), 'js'); ?>
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css'), 'css') ?>
<style type="text/css">
    .signature-pad {
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        height: 260px;
    }
</style>
<?php $this->endSection(); ?>
<?php $this->section('scripts'); ?>
<?php echo assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js'), 'js'); ?>
<!-- bs-custom-file-input -->
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.js'), 'js') ?>
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/select2/js/select2.js'), 'js') ?>
<?= assetUrlLink(assetUrl('Admin/theme-adminlte/plugins/inputmask/jquery-inputmask-min.js'), 'js') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script language="JavaScript">
    var img_path;

    function open_camera() {
        document.getElementById("my_camera").style.display = "block";
        document.getElementById("take_img").style.display = "block";

    }

    Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    Webcam.attach('#my_camera');


    function take_snapshot() {
        document.getElementById("my_camera").style.display = "none";
        document.getElementById("take_img").style.display = "none";
        // take snapshot and get image data
        Webcam.snap(function(data_uri) {
            // display results in page
            // document.getElementById('results').innerHTML =
            //     '<img src="' + data_uri + '"/>';
            console.log(data_uri);
            $('input[name="image_path"]').val(data_uri);
            $('#campaign_imgpreview').attr('src', data_uri);
            img_path = data_uri;
        });
    }
</script>
<script type="text/javascript">
    $(function() {

        // $('input[name=tgl_transaksi]').datetimepicker({
        //     format: 'L'
        // });


        $('input[name=tanggal_transaksi]').inputmask("9999/99/99", {
            placeholder: 'YYYY/MM/DD'
        });
        bsCustomFileInput.init();
        $('input[name=nominal]').inputmask({
            'alias': 'numeric',
            'groupSeparator': '.',
            'radixPoint': ',',
            'digits': 0,
            'autoGroup': true
        });


    });

    var canvas = document.getElementById('signature-pad');

    // Adjust canvas coordinate space taking into account pixel ratio,
    // to make it look crisp on mobile devices.
    // This also causes canvas to be cleared.
    function resizeCanvas() {
        // When zoomed out to less than 100%, for some very strange reason,
        // some browsers report devicePixelRatio as less than 1
        // and only part of the canvas is cleared then.
        var ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
    }

    window.onresize = resizeCanvas;
    resizeCanvas();

    var signaturePad = new SignaturePad(canvas, {
        backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
    });

    document.getElementById('save-png').addEventListener('click', function() {
        if (signaturePad.isEmpty()) {
            alert("Tanda Tangan Anda Kosong! Silahkan tanda tangan terlebih dahulu.");
        } else {
            var data = signaturePad.toDataURL('image/png');
            console.log(data);
            document.getElementById('signature_img').style.display = "block";
            $('#signature_img').attr('src', data);
            // $('textarea[name="path_signature"]').val(data);
            $('input[name="signature_path"]').val(data);
            canvas.style.display = "none";
            document.getElementById('save-png').style.display = "none";
        }
    });



    document.getElementById('clear').addEventListener('click', function() {
        signaturePad.clear();
       
        document.getElementById('save-png').style.display = "block";
        document.getElementById('signature_img').style.display = "none";
        canvas.style.display = "block";
    });

    document.getElementById('undo').addEventListener('click', function() {
        var data = signaturePad.toData();
        if (data) {
            data.pop(); // remove the last dot or line
            signaturePad.fromData(data);
        }
    });

</script>
<?php $this->endSection(); ?>