<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<!--? About Law Start-->
<section class="about-low-area section-padding60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10">
                <div class="single-cases mb-40 pr-5 pl-5">
                    <div class="cases-img">
                        <img src="/<?php echo $donation_campaigns["path_image"]?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo $donation_campaigns["name"]?></h1>
                        <p><i class="fa fa-map-pin" aria-hidden="true"></i> <?php echo $masjid_profile['name']?>, <?php echo ($masjid_profile['address']) ?></p>
                    </div>
                </div>
                <div class="row section-padding60">
                    <div class="col-md-12">
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
                </div>
                <div class="row pt-4">
                    <div class="col-md-12">
                        <div class="btn-donation-wrapper" style="text-align:center;">
                            <a class="btn btn-donation borrad-10" href='<?= site_url('/id/checkout/'.$donation_campaigns["id"])?>'>Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 campaign-detail ">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link p-3 active" aria-current="page" data-toggle="tab" href="#menu1">KETERANGAN</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" class="nav-link p-3" href="#menu2">KABAR TERBARU</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" class="nav-link p-3" href="#menu3">DONATUR</a>
                    </li>
                </ul>
                <div class="tab-content p-5 mb-100">
                    <div id="menu1" class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <?php 
                                        echo ($donation_campaigns['description']);
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12 overflow-auto campaign-timeline">
                                <ul>
                                    <?php if (isset($donation_list) && count($donation_list)) { 
                                        foreach ($donation_list as $dl) {
                                            ?>
                                             
                                             <li>
                                                <span><?php echo local_date($dl->created_at)?></span>
                                                <p>Donasi masuk <?php echo local_currency($dl->dana_in)?></p>
                                            </li>
                                            
                                            <?php
                                        }
                                    }?>
                                    <li>
                                        <span><?php echo local_date($donation_campaigns['created_at'])?></span>
                                        <p>Kampanye dibuat</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12 overflow-auto donation-list">
                                <ul>
                                    <?php if (isset($donation_list) && count($donation_list)) { 
                                        foreach ($donation_list as $dl) {
                                            ?>
                                             
                                             <li>
                                                <span><?php echo ($dl->name)?></span>
                                                <p>Berdonasi sebesar <?php echo local_currency($dl->dana_in)?></p>
                                            </li>
                                            
                                            <?php
                                        }
                                    }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
