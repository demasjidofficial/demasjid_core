<header>
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container-fluid">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left d-flex">
                                <ul>
                                    <li><?= lang('app.phone') ?>: <?= $masjid_profile['telephone'] ?? '-'; ?></li>
                                    <li><?= lang('app.email') ?>: <?= $masjid_profile['email'] ?? '-'; ?></li>
                                </ul>
                                <div class="header-social">
                                    <ul>
                                        <?php foreach ($masjid_socials as $item) : ?>
                                            <li>
                                                <a href="<?= $item['link'] ?>" target="_blank">
                                                    <i class="<?= $item['path_icon'] ?>"></i>
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
                                                <?php foreach ($languages as $item) : ?>
                                                    <option value="/<?= strtolower($item['code']) ?>"><?= lang('app.' . strtolower($item['name'])) ?></option>
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
                                            <a href="/logout"><?= strtoupper(lang('app.logout')) ?></a>
                                        <?php else : ?>
                                            <a href="/login"><?= strtoupper(lang('app.login')) ?></a>
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
                                <div class="logo header-logo">
                                    <a href="#"><img src="<?php echo site_url($masjid_profile['path_logo'] ?? '-') ?>" alt=""></a>
                                </div>
                            </div>
                            <!-- Menus -->
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <?php foreach ($nav_menu as $menu) :
                                                    if ($menu['parent'] == 0) { ?>
                                                        <li>
                                                            <a href="<?php echo ('/'.$locale.'/'.$menu['permalink']) ?> ">
                                                                <?php echo $menu['name'] ?>
                                                            </a>
                                                            <?php if (count($menu['sub_menu'])) {
                                                            ?>
                                                                <ul class="submenu">
                                                                    <?php foreach ($menu['sub_menu'] as $sbmenu) :
                                                                        if ($sbmenu['parent'] == $menu['id']) { ?>
                                                                            <li>
                                                                                <a href="<?php echo ('/'.$locale.'/'.$sbmenu['permalink']) ?> ">
                                                                                    <?php echo $sbmenu['name'] ?>
                                                                                </a>
                                                                            </li>
                                                                        <?php } endforeach;?>  
                                                                    </ul>
                                                                    <?php
                                                                }?>
                                                            </li>
                                                    <?php } endforeach;?>                                           
                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- Header-btn -->
                                        <div class="header-right-btn d-none d-lg-block ml-20">
                                            <a href="<?php echo $nav_header_donation ?? site_url().'id/donations' ?>" class="btn header-btn"><?= lang('app.donation')?></a>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <!-- Header End -->
</header>