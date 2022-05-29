<!doctype html>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $masjid_profile['name'] ?? '' ?>| <?= config('App')->siteName ?? 'Demasjid' ?></title>

    <link rel='icon' href='<?= $masjid_profile['path_logo'] ?? '' ?>' />

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

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/assets/app/theme-charityworks/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <!-- header start -->
    <?= $this->include('_header') ?>
    <!-- header end -->

    <!--aside id="alerts-wrapper">
    {alerts}
    </aside-->

    <main>
        <?= $this->renderSection('main') ?>
    </main>

    <!-- footer start -->
    <?= $this->include('_footer') ?>
    <!-- footer end -->

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
    <!-- Nice-select, sticky 
    <?= asset_link('app/theme-charityworks/js/jquery-nice-select.js', 'js') ?>
    -->
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

    <script type="text/javascript">
        $(function(){
            $('#select-lang').on('change', function(){
                var lang = $(this).val();
                if(lang){
                    window.location = lang;
                }
                return false;
            })
        })
    </script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>
