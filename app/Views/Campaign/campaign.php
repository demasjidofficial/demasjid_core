<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<!--? About Law Start-->
<section class="about-low-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10">
                <div class="single-cases mb-40">
                    <div class="cases-img">
                        <img style="width:80%" src="/<?php echo $donation_campaigns["path_image"]?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <h1><?php echo $donation_campaigns["name"]?></h1>
                </div>
                <div class="row">
                        <div class="single-skill mb-15">
                            <div class="bar-progress">
                                <div id="bar<?php echo $donation_campaigns["id"]?>" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip" style="left:0 !important"></span>
                                    </div>
                                    <span class="fill" data-percentage="<?php echo min(100, number_format($donation_campaigns["campaign_collected"] / $donation_campaigns["campaign_tonase"]*100, 0, '.', '')) ?>" ></span>
                                </div>
                            </div>
                        </div>
                        <!-- / progress -->
                        <div class="prices d-flex justify-content-between">
                            <p>Terkumpul:<span> <br /><?php echo local_currency($donation_campaigns["campaign_collected"]) ?></span></p>
                            <p>Kebutuhan:<span> <br /><?php echo local_currency($donation_campaigns["campaign_tonase"]) ?></span></p>
                        </div>
                    </div>
                    <div class="btn-donation-wrapper" style="text-align:center;">
                        <button class="btn btn-donation">Donasi Sekarang</button>
                    </div>
                </div>
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
