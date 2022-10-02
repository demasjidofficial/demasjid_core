<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<!--? About Law Start-->
<section class="about-low-area section-padding60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row section-padding24  mb-100 ">
                    <div class="col-md-12">
                        <div class="text-center mb-40">
                            <h1>Konfirmasi Bukti Donasi </h1>
                        </div>
                        <form class="row g-3 needs-validation" id="contact-form" action="<?php echo base_url().'/api/confirmdonation' ?>" method="post" enctype="multipart/form-data">
                            <div class="col-md-12 mb-3">
                                <label for="no_inv" class="form-label ">Masukkan No Inv <span style="color:red">(contoh : INV170845001)</span></label>
                                <input type="text" class="form-control h-45" value="<?php echo $no_inv ?>" name="no_inv" id="no_inv" placeholder="Masukkan No Invoice" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="image" class="form-label">Masukkan bukti pembayaran <span style="color:red">(foto/screenshot)</span></label>
                                <div class="custom-file h-45">
                                    <input type="file" name="image" class="custom-file-input form-control h-45" id="path_image" placeholder="Gambar" accept="image/*">
                                    <label for="image" class="custom-file-label h-45">Gambar</label>                                
                                </div>
                                <div class="justify-content-center photo-wrapper">
                                    <img id="path_image_prev" <?php echo "src=/$blank_img" ?> alt="" class="img-thumbnail" style="height:200px">
                                </div>
                            </div>
                            <div class="col-md-12 mt-30">
                                <div class="btn-donation-wrapper" style="text-align:center;">
                                    <button type="submit" id="submitbtn"  class="btn btn-donation borrad-10">Konfirmasi</button>
                                </div>
                            </div>
                        </form>                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
<?php $this->section('scripts'); ?>
<script type="text/javascript">
    let form_data = new FormData();

    function imagePreview(fileInput) {
        if (fileInput.files && fileInput.files[0]) {
            $(fileInput).next('label').html(fileInput.files[0].name);
            form_data.append('file', fileInput.files[0]);

            var fileReader = new FileReader();
            fileReader.onload = function (event) {
                $('#path_image_prev').attr('src', event.target.result);
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }
    $('#path_image').change(function () {
        imagePreview(this);
    });

</script>
<?php $this->endSection(); ?>
