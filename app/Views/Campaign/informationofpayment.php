<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<!--? About Law Start-->
<section class="about-low-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 text-center">
               <h1>Terima Kasih</h1>
               <h1><?php echo $donation['name'] ?></h1>
               <p>Atas Donasi yang akan Anda berikan kepada program : </p>
               <h1><?php echo $campaign['name'] ?></h1>
               <p>Semoga yang telah memberikan sebagian hartanya untuk meringankan beban saudara kita mendapat pahala yang setimpal </p>
                <h1>Aamiin Allohuma Aamiin</h1>
            </div>
            <div class="col-lg-6 col-md-12">
                <h1>Instruksi Pembayaran</h1>
                <p>Anda menggunakan metoda pembayaran :</p>
                <p><?php echo $payment['rek_name'] ?></p>
                <p><?php echo $payment['rek_no'] ?></p>
                <p><?php echo $payment_detail['name'] ?></p>
                <img src="<?php echo site_url().$payment_detail['path_logo'] ?>">
                <p><?php echo $donation['dana_in'] ?></p>
                <p>Harap transfer sesuai nominal diatas (sampai 3 digit terakhir) agar dapat </p>
                <p>terkonfirmasi otomatis dan kebaikan ini dapat kami teruskan.</p>
                <p>Silahkan transfer sebelum :</p>
                <button onClick="">Whatsapp</button>
            </div>
        </div>
    </div>
</section>
<!-- About Law End-->

<!-- Our Cases Start -->
<!-- Our Cases End -->

<!--? Blog Area Start -->
<!-- Blog Area End -->
<!--? Count Down Start -->

<!-- Count Down End -->


<?= $this->endSection() ?>
