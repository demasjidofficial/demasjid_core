<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Board News | <?= config('App')->siteName ?? 'Demasjid' ?></title>

    <link rel='icon' href='assets/app/theme-charityworks/img/logo/dmsjdfav_alfurqonsby.png' />
    <!-- carousel -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">

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

    <!-- wow slider -->
    <?= assetUrlLink(assetUrl('board/plugins/wow/engine6/style.css'), 'css') ?>
    <?= assetUrlLink(assetUrl('board/plugins/wow/engine6/jquery.js'), 'js') ?>
    <!-- wow  slider -->

    <?= $this->renderSection('styles') ?>
    <style>
        body,
        html {
            height: 100%;
            overflow: hidden;
            background-color: white;
            /* margin: 0; */
        }

        html {
            font-size: 62.5%;
            box-sizing: border-box;
        }

        #btnfullscree {
            display: none;
        }
    </style>
</head>

<body onload="clock()" id="fullscreen" onclick="maxWindow()">

    <!-- ? Preloader Start -->
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

    <header>
        <!-- Header Start -->
        <?= $this->renderSection('header') ?>
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
        <?= $this->renderSection('footer') ?>
    </footer>

    <!-- Scroll Up -->
    <!-- <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div> -->

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

    <!-- Jquery Plugins, main Jquery -->
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/plugins.js'), 'js') ?>
    <?= assetUrlLink(assetUrl('app/theme-charityworks/js/main.js'), 'js') ?>

    <!-- Countdown time -->
    <script src="https://cdn.jsdelivr.net/npm/timezz/dist/timezz.min.js"></script>


    <script type="text/javascript">
        $(function() {
            $('#select-lang').on('change', function() {
                var lang = $(this).val();
                if (lang) {
                    window.location = lang;
                }
                return false;
            })
        })

        // show time
        function clock() {
            var clockDiv = document.querySelector("#clock");

            return setInterval(() => {
                let date = new Date();
                let tick = date.toLocaleTimeString();
                // let time = date.getHours()+" : "+date.getMinutes()+" : "+date.getSeconds();

                clockDiv.textContent = tick;
            }, 500);
        }

        // show date
        const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];

        const d = new Date();
        let month = months[d.getMonth()];
        let day = days[d.getDay()];
        document.getElementById("date").innerHTML = (day + ", " + d.getDate() + " " + month + " " + d.getFullYear());


        function subtractMinutes(numOfMinutes, date = new Date()) {
            const now = new Date(date.getTime());

            // now.setHours(now.getHours() + numOfHours);
            now.setMinutes(now.getMinutes() + numOfMinutes);

            return now;

        }
        const result = subtractMinutes(10);
        console.log(result);



        //fulscreen with enter
        window.addEventListener("load", startup, false);

        function startup() {
            const view = document.getElementById("fullscreen");

            // On pressing ENTER call toggleFullScreen method
            document.addEventListener("keypress", function(e) {
                if (e.key === 'Enter') {
                    toggleFullScreen(view);
                }
            }, false);
        }

        function toggleFullScreen(view) {
            if (!document.fullscreenElement) {
                // If the document is not in full screen mode
                view.requestFullscreen();
            } else {
                // Otherwise exit the full screen
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }
        }
    </script>
    <?= $this->renderSection('scripts') ?>
</body>

</html>