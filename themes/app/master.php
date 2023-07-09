<!doctype html>
<html lang="en"><head>
    <?php echo $meta ?>
    <link rel='icon' href='<?= $masjid_profile['path_logo'] ?? '' ?>' />

    <!-- CSS here -->
	<?= assetUrlLink(assetUrl('app/theme-charityworks/css/bootstrap.css'), 'css') ?>
	<?= assetUrlLink(assetUrl('app/theme-charityworks/css/owl-carousel.css'), 'css') ?>
	<?= assetUrlLink(assetUrl('app/theme-charityworks/css/slicknav.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/css/flaticon.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/css/progressbar_barfiller.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/css/gijgo.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/css/animate.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/css/animated-headline.css'), 'css') ?>
	<?= assetUrlLink(assetUrl('app/theme-charityworks/css/magnific-popup.css'), 'css') ?>
	<?= assetUrlLink(assetUrl('app/theme-charityworks/css/fontawesome-all.css'), 'css') ?>
	<?= assetUrlLink(assetUrl('app/theme-charityworks/css/themify-icons.css'), 'css') ?>
	<?= assetUrlLink(assetUrl('app/theme-charityworks/css/slick.css'), 'css') ?>
	<?= assetUrlLink(assetUrl('app/theme-charityworks/css/nice-select.css'), 'css') ?>
	<?= assetUrlLink(assetUrl('app/theme-charityworks/css/style.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/css/custom.css'), 'css') ?>

    <?= $this->renderSection('styles') ?>
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src=<?= assetUrl("app/theme-charityworks/img/logo/loder.png"); ?> alt="">
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
    </-aside-->

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

    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/popper.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/bootstrap.js'), 'js') ?>
    <!-- Jquery Mobile Menu -->
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/jquery-slicknav.js'), 'js') ?>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/owl-carousel.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/slick.js'), 'js') ?>
    <!-- One Page, Animated-HeadLin -->
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/wow.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/animated-headline.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/jquery-magnific-popup.js'), 'js') ?>

    <!-- Date Picker -->
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/gijgo.js'), 'js') ?>
    <!-- Nice-select, sticky 
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/jquery-nice-select.js'), 'js') ?>
    -->
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/jquery-sticky.js'), 'js') ?>
    <!-- Progress -->
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/jquery-barfiller.js'), 'js') ?>
    
    <!-- counter , waypoint,Hover Direction -->
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/jquery-counterup.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/waypoints.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/jquery-countdown.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/hover-direction-snake.js'), 'js') ?>

    <!-- contact js -->
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/contact.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/jquery-form.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/jquery-validate.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/mail-script.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/jquery-ajaxchimp.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/jquery-inputmask-min.js'), 'js') ?>
    
    <!-- Jquery Plugins, main Jquery -->	
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/plugins.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/main.js'), 'js') ?>

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
