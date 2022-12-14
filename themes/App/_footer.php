<footer>
        <div class="footer-wrapper section-bg2" data-background="/assets/app/theme-charityworks/img/gallery/footer_bg.png">
            <!-- Footer Top-->
            <div class="footer-area footer-padding" id="kontak">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <!-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <div class="footer-tittle">
                                        <div class="footer-logo mb-20">
                                            <a href="#"><img src="<php echo site_url($masjid_profile['path_logo'] ?? '-') ?>" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4><= lang('app.contact_info')?></h4>
                                    <ul>
                                        <li>
                                            <p><= lang('app.alamat')?> :<br/><= $masjid_profile['address'] ?? '-';?> <br/>[city_name] [postal_code]</p>
                                        </li>
                                        <li><a href="#"><= lang('app.phone')?> : <br/><= $masjid_profile['telephone'] ?? '-';?></a></li>
                                        <li><a href="#"><= lang('app.email')?> : <br/><= $masjid_profile['email'] ?? '-';?></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div> -->
                        <?php for($if = 0; $if <= 3; $if++ ) { 
                            if (isset($footer[$if])) {
                                ?>
                                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                                    <div class="single-footer-caption mb-50">
                                        <?php echo $footer[$if]['content'] ?>
                                    </div>
                                </div>
                            <?php }
                        }?>
                    </div>
                </div>
            </div>
            <!-- footer-bottom -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 ">
                                <div class="footer-copy-right">
                                    <p>
                                    <?= lang('app.copyright')?> &copy;<script>document.write(new Date().getFullYear());</script>. <?= lang('app.developedby')?> <a href="<?= prep_url('https://demasjid.com') ?>" target="_blank">Demasjid Team</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="footer-social f-right">
                                    <?php foreach($masjid_socials as $item) : ?>
                                        <a href="<?= $item['link']?>" target="_blank">
                                          <i class="<?= $item['path_icon']?>"></i>
                                        </a>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>