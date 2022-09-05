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
                        <a class="btn borrad-10" target="_blank" href='<?= site_url('/id/confirmationofdonation').'?'.$donation['no_inv']?>'><i class="fa fa-check" aria-hidden="true"></i></i> Konfirmasi</a>
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
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link w-100 bg-grey" data-toggle="collapse" data-target="#faq1"
                                    aria-expanded="true" aria-controls="faq1">Transfer via ATM</a>
                                </div>

                                <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                        <ul>
                                            <li>1. Masukkan Kartu Anda.</li>
                                            <li>2. Pilih Bahasa.</li>
                                            <li>3. Masukkan PIN ATM Anda.</li>
                                            <li>4. Pilih "Menu Lainnya".</li>
                                            <li>5. Pilih "Transfer".</li>
                                            <li>6. Pilih Jenis rekening yang akan Anda gunakan (Contoh; "Dari Rekening Tabungan").</li>
                                            <li>7. Pilih "Virtual Account Billing".</li>
                                            <li>8. Masukkan nomor Virtual Account Anda (contoh: 8241002201150001).</li>
                                            <li>9. Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi.</li>
                                            <li>10. Konfirmasi, apabila telah sesuai, lanjutkan transaksi.</li>
                                            <li>11. Transaksi Anda telah selesai.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <a href="#" class="btn btn-header-link collapsed w-100 bg-grey" data-toggle="collapse" data-target="#faq2"
                                    aria-expanded="true" aria-controls="faq2"> Transfer melalui Mobile Banking</a>
                                </div>

                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                        <ul>
                                            <li>1. Akses Apliksi Mobile Banking dari handphone kemudian masukkan user ID dan password.</li>
                                            <li>2. Pilih menu "Transfer".</li>
                                            <li>3. Pilih menu "Virtual Account Billing" kemudian pilih rekening debet.</li>
                                            <li>4. Masukkan nomor Virtual Account Anda (contoh: 8241002201150001) pada menu "input baru".</li>
                                            <li>5. Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi</li>
                                            <li>6. Konfirmasi transaksi dan masukkan Password Transaksi.</li>
                                            <li>7. Pembayaran Anda Telah Berhasil.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
