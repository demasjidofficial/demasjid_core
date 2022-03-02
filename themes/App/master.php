<!doctype html>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= config('App')->siteName ?? 'Demasjid' ?></title>

    <!-- CSS here -->
	<?= asset_link('app/theme-charityworks/css/bootstrap.css', 'css') ?>
	<?= asset_link('app/theme-charityworks/css/owl-carousel.css', 'css') ?>
	<?= asset_link('app/theme-charityworks/css/slicknav.css', 'css') ?>
    <?= asset_link('app/theme-charityworks/css/flaticon.css', 'css') ?>
    <?= asset_link('app/theme-charityworks/css/progressbar_barfiller.css', 'css') ?>
    <?= asset_link('app/theme-charityworks/css/gijgo.css', 'css') ?>
    <?= asset_link('app/theme-charityworks/css/animate.css', 'css') ?>
    <?= asset_link('app/theme-charityworks/css/animated-headline.css', 'css') ?>
	<?= asset_link('app/theme-charityworks/css/magnific-popup.css', 'css') ?>
	<?= asset_link('app/theme-charityworks/css/fontawesome-all.css', 'css') ?>
	<?= asset_link('app/theme-charityworks/css/themify-icons.css', 'css') ?>
	<?= asset_link('app/theme-charityworks/css/slick.css', 'css') ?>
	<?= asset_link('app/theme-charityworks/css/nice-select.css', 'css') ?>
	<?= asset_link('app/theme-charityworks/css/style.css', 'css') ?>

    <?= $this->renderSection('styles') ?>
</head>
<body>

    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/app/theme-charityworks/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <ul>     
                                        <li>WA/Tlp: +62 851 6136 4811</li>
                                        <li>Email: masjidalfurqonsby@demasjid.com</li>
                                    </ul>
                                    <div class="header-social">    
                                        <ul>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-info-right d-flex align-items-center">
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">Indonesia</option>
                                                    <option value="">Arabic</option>
                                                    <option value="">English</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">    
                                    <li>
                                        <?php if (auth()->loggedIn()) : ?>
                                        <a href="/logout" >LOGOUT</a>
                                        <?php else : ?>
                                        <a href="/login">LOGIN</a>
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
                                    <a href="#"><img src="assets/app/theme-charityworks/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="/">Beranda</a></li>
                                                <li><a href="#">Tentang</a>
                                                    <ul class="submenu">
                                                        <li><a href="#">Visi & Misi</a></li>
                                                        <li><a href="#">Struktur</a></li>
                                                        <li><a href="#">Pengurus</a></li>
                                                        <li><a href="#">Pembina</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Layanan</a>
                                                    <ul class="submenu">
                                                        <li><a href="#">Zakat</a></li>
                                                        <li><a href="#">Infaq</a></li>
                                                        <li><a href="#">Shodaqoh</a></li>
                                                        <li><a href="#">Wakaf</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Program</a>
                                                    <ul class="submenu">
                                                        <li><a href="#">Kajian</a></li>
                                                        <li><a href="#">Pesantren</a></li>
                                                        <li><a href="#">TPQ/TPA</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Muamalah</a>
                                                    <ul class="submenu">
                                                        <li><a href="#">Room</a></li>
                                                        <li><a href="#">Net</a></li>
                                                        <li><a href="#">Share</a></li>
                                                        <li><a href="#">Life</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#kontak">Kontak</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="#" class="btn header-btn">Donasi Sekarang</a>
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
    <!-- header end -->

    <!--aside id="alerts-wrapper">
    {alerts}
    </aside-->

    <main>
        <?= $this->renderSection('main') ?>
    </main>

    <footer>
        <div class="footer-wrapper section-bg2" data-background="assets/app/theme-charityworks/img/gallery/footer_bg.png">
            <!-- Footer Top-->
            <div class="footer-area footer-padding" id="kontak">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <div class="footer-tittle">
                                    <div class="footer-logo mb-20">
                                        <a href="#"><img src="assets/app/theme-charityworks/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Info Kontak</h4>
                                    <ul>
                                        <li>
                                            <p>Alamat :<br/>Jl. Teuku Imam Bonjol 99 Surabaya 60299</p>
                                        </li>
                                        <li><a href="#">WA/Tlp : <br/>+62 851 6136 4811</a></li>
                                        <li><a href="#">Email : <br/>masjidalfurqonsby@demasjid.com</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Tautan Penting</h4>
                                    <ul>
                                        <li><a href="#">Artikel</a></li>
                                        <li><a href="#">Agenda</a></li>
                                        <li><a href="#">Camp</a></li>
                                        <li><a href="#">Care</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Kebijakan Privasi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Buletin DeMasjid</h4>
                                    <div class="footer-pera footer-pera2">
                                    <p>Dapatkan informasi terbaru layanan & pengembangan DeMasjid.</p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                class="email_icon newsletter-submit button-contactForm"><img src="assets/app/theme-charityworks/img/gallery/form.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
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
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Dikembangkan oleh <a href="<?= prep_url('https://demasjid.com') ?>" target="_blank">Demasjid Team</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="footer-social f-right">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js'></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js'></script>

    <?= asset_link('app/theme-charityworks/js/popper.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/bootstrap.js', 'js') ?>
    <!-- Jquery Mobile Menu -->
    <?= asset_link('app/theme-charityworks/js/jquery-slicknav.js', 'js') ?>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <?= asset_link('app/theme-charityworks/js/owl-carousel.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/slick.js', 'js') ?>
    <!-- One Page, Animated-HeadLin -->
    <?= asset_link('app/theme-charityworks/js/wow.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/animated-headline.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/jquery-magnific-popup.js', 'js') ?>

    <!-- Date Picker -->
    <?= asset_link('app/theme-charityworks/js/gijgo.js', 'js') ?>
    <!-- Nice-select, sticky -->
    <?= asset_link('app/theme-charityworks/js/jquery-nice-select.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/jquery-sticky.js', 'js') ?>
    <!-- Progress -->
    <?= asset_link('app/theme-charityworks/js/jquery-barfiller.js', 'js') ?>
    
    <!-- counter , waypoint,Hover Direction -->
    <?= asset_link('app/theme-charityworks/js/jquery-counterup.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/waypoints.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/jquery-countdown.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/hover-direction-snake.js', 'js') ?>

    <!-- contact js -->
    <?= asset_link('app/theme-charityworks/js/contact.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/jquery-form.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/jquery-validate.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/mail-script.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/jquery-ajaxchimp.js', 'js') ?>
    
    <!-- Jquery Plugins, main Jquery -->	
    <?= asset_link('app/theme-charityworks/js/plugins.js', 'js') ?>
    <?= asset_link('app/theme-charityworks/js/main.js', 'js') ?>

</body>
</html>
