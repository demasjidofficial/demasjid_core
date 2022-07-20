<?= $this->extend('master') ?>

<?= $this->section('main') ?>



<!--? About Law Start-->
<section class="about-low-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10" style="background-color:#BBFCC9;">
                <div>
                    <!-- Section Tittle -->
                        <img src="../../<?php echo $donation_campaigns["path_image"]?>" alt="" style="width:100%;margin-bottom:10%">
                        <p><?= $masjid_profile['name'] ?? '' ?></p>
                        <p> Anda akan berdonasi dalam program:</p>
                        <h3> <?= $donation_campaigns['name'];?></h3>
               
                   
                </div>
              
            </div>
            <div class="col-lg-6 col-md-12">
                <h2>Donasi terbaik Anda:</h2>
            </div>
        </div>
    </div>
</section>
<!-- About Law End-->



<?= $this->endSection() ?>
