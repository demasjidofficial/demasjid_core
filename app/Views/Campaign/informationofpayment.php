<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<!--? About Law Start-->
<section class="about-low-area section-padding60">
    <div class="container">
        <div class="row mb-100">
            <div class="col-lg-6 col-md-12 text-center info-detail">
               <h1>Terima Kasih</h1>
               <h1><?php echo $donation['name'] ?></h1>
               <p>Atas Donasi yang akan Anda berikan kepada program : </p>
               <h1><?php echo $campaign['name'] ?></h1>
               <p>Semoga yang telah memberikan sebagian hartanya untuk meringankan beban saudara kita mendapat pahala yang setimpal </p>
                <h1>Aamiin Allohuma Aamiin</h1>
            </div>
            <div class="col-lg-6 col-md-12 info-method">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Instruksi Pembayaran</h1>
                        <p>Anda menggunakan metoda pembayaran :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box d-flex flex-row" onClick="copytoclipboard( <?php echo $payment['rek_no'] ?>)">
                            <div>
                                <img src="<?php echo site_url().$payment_detail['path_logo'] ?>">
                            </div>
                            <div>
                                <h3><?php echo $payment['rek_no'] ?></h3>
                                <p><?php echo $payment['rek_name'] ?></p>
                            </div>
                            <span class="copy-icon"><i class="fas fa-copy"></i> copy</span>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="info-box d-flex flex-row" onClick="copytoclipboard( <?php echo $donation['dana_in'] ?>)">
                            <div class="">
                                
                            </div>
                            <div class="">
                                <h1><?php echo local_currency($donation['dana_in']) ?></h1>
                            </div>
                            <span class="copy-icon"><i class="fas fa-copy"></i> copy</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center p-20">
                        <p>Harap transfer sesuai nominal diatas (sampai 3 digit terakhir) agar dapat terkonfirmasi otomatis dan kebaikan ini dapat kami teruskan.</p>
                        <p>Silahkan Konfirmasi Bukti Pembayaran ke :</p>
                        <a class="btn borrad-10" target="_blank" href="http://wa.me/"><i class="fab fa-whatsapp" aria-hidden="true"></i></i> Whatsapp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?php $this->section('scripts'); ?>

<script type="text/javascript">
    function copytoclipboard(text) {
        navigator.clipboard.writeText(text).then(function(){
            alert('Copied to clipboard');
        });  
    }     
</script>

<?php $this->endSection(); ?>
