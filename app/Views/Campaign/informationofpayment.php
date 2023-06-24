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
               <h1><?php echo $donation['campaign_name'] ?></h1>
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
                        <div class="info-box d-flex flex-row" onClick="copytoclipboard( <?php echo $donation['payment_rek_no'] ?>)">
                            <div>
                                <img src="<?php echo site_url().($donation['bank_path_logo'] ??  $donation['paymentgateway_path_logo']) ?>">
                            </div>
                            <div>
                                <h3><?php echo $donation['payment_rek_no'] ?></h3>
                                <p><?php echo $donation['payment_rek_name'] ?></p>
                            </div>
                            <span class="copy-icon" data-toggle="tooltip" data-trigger="click" data-html="true" title="Copied" ><i class="fas fa-copy"></i> copy</span>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="info-box d-flex flex-row" onClick="copytoclipboard( <?php echo $donation['dana_in'] ?>)">
                            <div class="">
                                
                            </div>
                            <div class="">
                                <h1><?php echo local_currency($donation['dana_in']) ?></h1>
                            </div>
                            <span class="copy-icon" data-toggle="tooltip" data-trigger="click" data-html="true" title="Copied" ><i class="fas fa-copy"></i> copy</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center p-20">
                        <p>Harap transfer sesuai nominal diatas (sampai 3 digit terakhir) agar dapat terkonfirmasi otomatis dan kebaikan ini dapat kami teruskan.</p>
                        <p>Silahkan Konfirmasi Bukti Pembayaran ke :</p>
                        <a class="btn borrad-10" target="_blank" href='<?= site_url('/'.$locale.'/confirmationofdonation').'?'.$donation['no_inv']?>'><i class="fa fa-check" aria-hidden="true"></i></i> Konfirmasi</a>
                        <a class="btn borrad-10" target="_blank" href="http://wa.me/"><i class="fab fa-whatsapp" aria-hidden="true"></i></i> Whatsapp</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-100">
            <div class="col-lg-12">
                <div id="main">
                    <div class="container">
                        <div class="accordion" id="faq">

                        <?php if (isset($donation["bank_instr_atm"]) && !empty($donation["bank_instr_atm"])) :  ?>
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link w-100 bg-grey" data-toggle="collapse" data-target="#faq_bank_instr_atm"
                                    aria-expanded="true" aria-controls="faq1">Transfer via ATM</a>
                                </div>
                                <div id="faq_bank_instr_atm" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                       <?php echo $donation["bank_instr_atm"] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($donation["bank_instr_mbanking"]) && !empty($donation["bank_instr_mbanking"])) :  ?>
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link w-100 bg-grey" data-toggle="collapse" data-target="#faq_bank_instr_mbanking"
                                    aria-expanded="true" aria-controls="faq1">Transfer via Mbanking</a>
                                </div>

                                <div id="faq_bank_instr_mbanking" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                       <?php echo $donation["bank_instr_mbanking"] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($donation["bank_instr_ibanking"]) && !empty($donation["bank_instr_ibanking"])) :  ?>
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link w-100 bg-grey" data-toggle="collapse" data-target="#faq_bank_instr_ibanking"
                                    aria-expanded="true" aria-controls="faq1">Transfer via Ibanking</a>
                                </div>

                                <div id="faq_bank_instr_ibanking" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                       <?php echo $donation["bank_instr_ibanking"] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($donation["paymentgateway_instr"]) && !empty($donation["paymentgateway_instr"])) :  ?>
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link w-100 bg-grey" data-toggle="collapse" data-target="#faq_paymentgateway_instr"
                                    aria-expanded="true" aria-controls="faq1">Instruksi Payment Gateway</a>
                                </div>

                                <div id="faq_paymentgateway_instr" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                       <?php echo $donation["paymentgateway_instr"] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        </div>
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
            // alert('Copied to clipboard');
        });  
    }   
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<?php $this->endSection(); ?>
