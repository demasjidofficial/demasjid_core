<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<!-- Our Cases Start -->
<?php if (isset($donation_campaigns) && count($donation_campaigns)) : ?>
<div class="our-cases-area section-padding24 mb-100" id="donasi">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-80">
                    <span><br />Mari kita berdonasi</span>
                    <h2>Raihlah pahala dengan apa yang kita mampu berikan ya.</h2>
                </div>
            </div>
        </div>
        <div class="row">
        <?php foreach ($donation_campaigns as $item) : ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="<?php echo site_url($item["path_image"]) ?>" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#"><?php echo $item["name"]?></a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar<?php echo $item["id"]?>" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip" style="left:0 !important"></span>
                                        </div>
                                        <span class="fill" data-percentage="<?php echo min(100, number_format($item["campaign_collected"] / $item["campaign_tonase"]*100, 0, '.', '')) ?>" ></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Terkumpul:<span> <br /><?php echo local_currency($item["campaign_collected"]) ?></span></p>
                                <p>Kebutuhan:<span> <br /><?php echo local_currency($item["campaign_tonase"]) ?></span></p>
                            </div>
                        </div>
                        <div class="btn-donation-wrapper" style="text-align:center;">
                            <a href='<?= site_url('/'.$locale.'/campaign/'.$item["id"])?>' class="btn btn-donation">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
        <?php endforeach ?>
        </div>
    </div>
</div>
<?php endif ?>
<!-- Our Cases End -->

<?= $this->endSection() ?>
