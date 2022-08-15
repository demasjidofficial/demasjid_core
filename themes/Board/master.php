<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Masjid Al Furqon Surabaya | <?= config('App')->siteName ?? 'Demasjid' ?></title>

    <link rel='icon' href='assets/app/theme-charityworks/img/logo/dmsjdfav_alfurqonsby.png' />
    <!-- carousel -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">

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
    <style>
        body,
        html {
            height: 100%;
            overflow: hidden;
            background-color: white;
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
                    <img src="/assets/app/theme-charityworks/img/logo/loder.png" alt="">
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


        // show countdown    
        
        // $('.card-sholat').each(function() {
        //     var prayTitle = $(this).find('h3.card-title').text();
        //     var prayTime = $(this).find('p.card-text').text()
        //     console.log("Waktu " + prayTitle + " Pukul " + prayTime);
        //     var now = new Date();
        //     var timeNow = now.toLocaleTimeString();
        //     var timeout = 60 * 5;
        //     var display1 = document.getElementById('timer');

        //     if (prayTime == 'prayTime') {

        //         console.log(display1.textContent = "Memasuki Waktu Sholat " + prayTitle+' '+prayTime);
        //         setTimeout(display1.textContent = "",10000);

                
        //     }
        // })
        

        function subtractMinutes(numOfMinutes, date = new Date()) {
            const now = new Date(date.getTime());

            // now.setHours(now.getHours() + numOfHours);
            now.setMinutes(now.getMinutes() + numOfMinutes);

            return now;

        }

        const result = subtractMinutes(10);
        console.log(result);

        // =================

        // var todaydate = new Date();
        // var countDownTime = new Date('Jul 27, 2022 15:10:00').getTime();
        // var x = setInterval(function() {
        //     var now = new Date().getTime();
        //     var distance = countDownTime - now;
        //     // var days = Math.floor(distance/ (1000*60*60*24));
        //     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        //     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        //     var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        //     document.getElementById("countDownText").innerHTML = "Dhuhur -" + hours + " : " + minutes + ".  <small>" + seconds + "</small>";

        //     // if (now == now) {
        //     //     clearInterval(x)
        //     //     console.log("Waktu Sholat Dhuhur");
        //     // } else {
        //     //     clearInterval(x)
        //     //     console.log("Selesai");
        //     // }

        //     if (distance < 0) {
        //         clearInterval(x);
        //         document.getElementById("countDownText").innerHTML = "selesai"
        //     }
        // }, 1000);

        //fullscreen mode
        // var elem = document.getElementById("fullscreen");
        // function openFullscreen() {
        //     if (elem.requestFullscreen) {
        //         elem.requestFullscreen();
        //     } else if (elem.webkitRequestFullscreen) {
        //         /* Safari */
        //         elem.webkitRequestFullscreen();
        //     } else if (elem.msRequestFullscreen) {
        //         /* IE11 */
        //         elem.msRequestFullscreen();
        //     }

        // }

        // setTimeout(openFullscreen,3000);
        // $(window).load(function() {
        //     // $('#btnfullscreen').delay(3000).click(openFullscreen());
        //     setTimeout(openFullscreen,3000);
        //     alert("fullscreen");
        // });


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