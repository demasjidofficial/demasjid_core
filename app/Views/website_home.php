<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<?= view('App\Views\Partials\slider', ['sliders' => $sliders]) ?>

<!--? Services Area Start -->
<div class="service-area section-padding24">
    <?= view('App\Views\Widgets\_services', [
                                    'services'   => $widgets->widget('service')->items(),
                                    ])
?>
</div>
<!-- Services Area End -->

<!--? About Law Start-->
<section class="about-low-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10">
                <div class="about-caption mb-50">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35">
                        <span>Sekilas tentang kami</span>
                        <h2><?= $masjid_profile['name'] ?? '' ?></h2>
                    </div>
                    <p>Sebuah masjid di timur kota Surabaya dengan luas lahan 1.500 m2 dan luas bangunan 1.100 m2 di
                        tengah pemukiman padat penduduk dari berbagai macam etnis. Oleh karena itu, harapan kami ingin
                        mewujudkan masjid berbasis pelayanan dalam segala bidang yang sesuai syariat.</p>
                    <p>Bergabung dan menggunakan platform DeMasjid adalah upaya kami atas izin Alloh untuk mencapai visi
                        & misi serta harapan masjid ini.</p>
                </div>
                <a href="#" class="btn">Tentang Kami</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <!-- about-img -->
                <div class="about-img ">
                    <div class="about-font-img d-none d-lg-block">
                        <img src="<?= assetUrl("app/theme-charityworks/img/gallery/masjid-alfurqon-upi.png"); ?>" alt=""
                            style="width:60%;">
                    </div>
                    <div class="about-back-img ">
                        <img src="<?= assetUrl("app/theme-charityworks/img/gallery/alfurqon-UPi.jpeg"); ?>" alt=""
                            style="width:60%;margin-left:25%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Law End-->

<!-- Our Cases Start -->
<?php if (isset($donation_campaigns) && count($donation_campaigns)) : ?>
<div class="our-cases-area section-padding24" id="donasi">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-80">
                    <span><br />Mari kita lihat bersama</span>
                    <h2>Jangkau mereka dengan apa yang kita mampu berikan ya.</h2>
                </div>
            </div>
        </div>
        <div class="row">
        <?php $counter = 0; ?>
        <?php foreach ($donation_campaigns as $item) : ?>
            <?php if ($counter < 6) { ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="<?php echo site_url($item["path_image"]) ?>" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="<?= site_url('/'.$locale.'/campaign/'.$item["id"])?>"><?php echo $item["name"]?></a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar<?php echo $item["id"]?>" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip" style="left:0 !important"></span>
                                        </div>
                                        <span class="fill" data-percentage="<?php echo min(100, number_format($item["campaign_collected"] / $item["campaign_tonase"] * 100, 0, '.', '')) ?>" ></span>
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

            <?php
            }
                $counter++;
            ?>

        <?php endforeach ?>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-45 mb-100">
                <div class="btn-donation-wrapper" style="text-align:center;">
                    <a href='<?= site_url('/'.$locale.'/donations/')?>' target="_blank" class="btn btn-donation-readmore">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- Our Cases End -->

<?= view('App\Views\Partials\article', ['articles' => $articles]) ?>

<!--? Count Down Start -->
<div class="count-down-area pt-25 section-bg"
    data-background=<?= assetUrl("app/theme-charityworks/img/gallery/section_bg02.png"); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="count-down-wrapper">
                    <div class="row justify-content-between">
                        <?= view('App\Views\Widgets\_counter', [
                                    'counter'   => $widgets->widget('counter')->items(),
                                    ])
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Count Down End -->


<?= $this->endSection() ?>
