<header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <ul>     
                                        <li><?= lang('app.phone')?>: <?= $masjid_profile['telephone'];?></li>
                                        <li><?= lang('app.email')?>: <?= $masjid_profile['email'];?></li>
                                    </ul>
                                    <div class="header-social">    
                                        <ul>
                                          <?php foreach($masjid_socials as $item) : ?>
                                            <li>
                                              <a href="<?= $item['link']?>" target="_blank">
                                                <i class="<?= $item['path_icon']?>"></i>
                                              </a>
                                            </li>
                                          <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-info-right d-flex align-items-center">
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select-lang">
                                                <?php foreach($languages as $item) : ?>
                                                    <option value="/<?= strtolower($item['code'])?>"><?= lang('app.'.$item['name'])?></option>
                                                <?php endforeach ?>

                                                <!--
                                                    <option value="/sa">< ?= lang('app.arab')?></option>
                                                    <option value="/en">< ?= lang('app.english')?></option>
                                                -->
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">    
                                    <li>
                                        <?php if (auth()->loggedIn()) : ?>
                                        <a href="/logout" ><?= strtoupper(lang('app.logout'))?></a>
                                        <?php else : ?>
                                        <a href="/login"><?= strtoupper(lang('app.login'))?></a>
                                        <?php endif ?>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="#"><img src="/assets/app/theme-charityworks/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="/"><?= lang('app.home')?></a></li>
                                                <li><a href="#"><?= lang('app.about')?></a>
                                                    <ul class="submenu">
                                                        <li><a href="#"><?= lang('app.vision_mission')?></a></li>
                                                        <li><a href="#"><?= lang('app.structure')?></a></li>
                                                        <li><a href="#"><?= lang('app.commitee')?></a></li>
                                                        <li><a href="#"><?= lang('app.erector')?></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><?= lang('app.services')?></a>
                                                    <ul class="submenu">
                                                        <li><a href="#"><?= lang('app.zakat')?></a></li>
                                                        <li><a href="#"><?= lang('app.infaqshodaqoh')?></a></li>
                                                        <li><a href="#"><?= lang('app.wakaf')?></a></li>
                                                        <li><a href="#"><?= lang('app.qurban')?></a></li>
                                                        <li><a href="#"><?= lang('app.ambulan')?></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><?= lang('app.program')?></a>
                                                    <ul class="submenu">
                                                        <li><a href="#"><?= lang('app.kajian')?></a></li>
                                                        <li><a href="#"><?= lang('app.sosial')?></a></li>
                                                        <li><a href="#"><?= lang('app.pesantren')?></a></li>
                                                        <li><a href="#"><?= lang('app.tpq')?></a></li>
                                                        <!--
                                                        <li><a href="#">< ?= lang('app.construction')?></a></li>
                                                        -->
                                                    </ul>
                                                </li>
                                                <li><a href="#"><?= lang('app.muamalah')?></a>
                                                    <ul class="submenu">
                                                        <li><a href="#"><?= lang('app.room')?></a></li>
                                                        <li><a href="#"><?= lang('app.net')?></a></li>
                                                        <li><a href="#"><?= lang('app.share')?></a></li>
                                                        <li><a href="#"><?= lang('app.life')?></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><?= lang('app.reports')?></a>
                                                    <ul class="submenu">
                                                        <li><a href="#"><?= lang('app.finance_reports')?></a></li>
                                                        <li><a href="#"><?= lang('app.construction_reports')?></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#kontak"><?= lang('app.contact')?></a></li>                                                
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="#" class="btn header-btn"><?= lang('app.donation')?></a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>