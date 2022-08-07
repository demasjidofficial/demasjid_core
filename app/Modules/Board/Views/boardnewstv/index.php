<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>

<!-- header -->
<section class="header fixed-top">
    <div class="card text-center textcard">
        <div class="card-header">
            <div class="row text-center">
                <div class="col col-text mt-5">
                    <h2 id="date" class="date-text"></h2>
                </div>
                <div class="col-sm-6 col-md-7">
                    <h1 class="text-header"><?= $masjid_profile['name']; ?></h1>
                    <h3 class="text-phone"><?= lang('app.phone') ?>: <?= $masjid_profile['telephone']; ?></h3>
                    <h3 class="text-mail"><?= lang('app.email') ?>: <?= $masjid_profile['email']; ?></h3>
                </div>
                <div class="col col-text mt-5">
                    <h2 id="clock" class="clock-text"></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="countdown mt-5 text-center">
        <div class="row">
            <div class="col">
                <h2 id="countDownText" class="text-countdown">Dhuhur -05:00</h2>
            </div>
        </div>
    </div>

</section>

<!-- slideshow -->
<section class="content-slideshow">
    <!-- <div class ="container-fluid slideshow"> -->
    <div class="container-fluid slide-img" id="slideshow">
        <?php foreach ($board_news_bg as $bg) { ?>
            <div>
                <li><img src="/<?= esc($bg['path_image']) ?>" duration="<?= esc($bg['duration']) ?>" alt="imgslide"></li>
            </div>
        <?php } ?>
    </div>
    <!-- </div> -->
</section>


<!-- card jadwal sholat -->
<section class="footer fixed-bottom mb-5">
    <div class="text-footer">
        <div class="row m-5 ml-5">
            <?php foreach ($rawatib_schedule as $sholat) {
                $no = $sholat['id'];

                // if ($no == 1) {
                //     $bgcolor = "background-color: " . $warna1 . ";";
                // } else {
                //     $bgcolor = "background-color: " . $warna2 . ";";
                // }
            ?>

                <div class="col">
                    <div class="card  w-40 card-pray-bg bg-color<?= $no?>">
                        <div class="card-body text-center card-sholat" id="jadwal" id-pray-time="<?= $sholat['id'] ?>">
                            <h3 class="card-title">
                                <?= ucfirst($sholat['name']) ?>
                            </h3>
                            <p class="card-text">
                                <?= date('H:i', strtotime($sholat['pray_time'])) ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php $no++;
            } ?>

        </div>
</section>

<!-- running text -->
<section class="runtext">
    <div class="text-running fixed-bottom">
        <div class="marquee">
            <ul class="marquee-content">
                <?php foreach ($board_news_runtext as $text) { ?>
                    <li><?= $text['Text'] ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>
</div>

<?php $this->endSection(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<?php $this->section('scripts'); ?>
<script>
    // slideshow
    $("#slideshow > div:gt(0)").hide();

    var index = 1;
    var maxindex = $('#slideshow > div').length;

    setInterval(function() {
        $('#slideshow > div:first')
            .fadeOut(3000)
            .next()
            .fadeIn(3000)
            .end()
            .appendTo('#slideshow');
        $('ul li').removeClass('active');
        $('ul li:eq(' + index + ')').addClass('active');
        index = index < maxindex - 1 ? index + 1 : 0;
    }, 5000);

    for (var i = 0; i < maxindex; i++) {
        $('ul').append('<li class="' + (i == 0 ? 'active' : '') + '"></li>');
    }


    var praytime = "00:10";
    var interval = setInterval(function() {
        var timer = praytime.split(':');
        //by parsing integer, I avoid all extra string processing
        var minutes = parseInt(timer[0], 10);
        var seconds = parseInt(timer[1], 10);
        --seconds;
        minutes = (seconds < 0) ? --minutes : minutes;
        if (minutes < 0) clearInterval(interval);
        seconds = (seconds < 0) ? 59 : seconds;
        seconds = (seconds < 10) ? '0' + seconds : seconds;
        //minutes = (minutes < 10) ?  minutes : minutes;
        $('.text-countdown').html(minutes + ':' + seconds);
        praytime = minutes + ':' + seconds;
    }, 1000);

    if (praytime < 0) {
        clearInterval(x);
        document.getElementById("countDownText").innerHTML = "selesai";
        hide();
    }

    $(document).ready(function(){
	    function forecerFullscreen(){
            top.resizeTO(window.screen.availWidth, window.screen.availHeight);
            top.moveTo(0,0);

            setTimeout("forecerFullscreen()", 500);
        }
    });

</script>
<?php $this->endSection(); ?>

<?php $this->section('styles'); ?>
<style>
    /* header */
    .textcard {
        background-color: #F1F1F1;
        opacity: .8;
    }

    .text-header {
        font-size: 50px;
        font-weight: bold;
    }

    .col-text {
        align-items: middle;
        justify-content: center;
    }

    .clock-text {
        font-weight: bold;
        font-size: 40px;
    }

    .date-text {
        font-weight: bold;
        font-size: 25px;
    }


    /* countdown */
    .text-countdown {
        font-weight: bold;
        font-size: 30px;
        color: white;
        text-shadow: 5px 5px 6px black;
    }


    /* jadwal sholat  */
    .card-text {
        color: white;
        font-size: 50px;
        font-weight: bold;
    }

    .card-title {
        font-size: 20px;
        color: white;
        font-weight: bold;
    }
    .card-pray-bg {
        /* background-color: rgb(47, 142, 168); */
        border-radius: 10px;
        opacity: .8;
        padding: 10%;
    }
    .bg-color1{
        background-color: #CA4E79;
    }
    .bg-color2{
        background-color: #395B64;
    }
    .bg-color3{
        background-color: #A66CFF;
    }
    .bg-color4{
        background-color: #5BB318;
    }
    .bg-color5{
        background-color: #FEB139;
    }



    /* run text */
    .marquee {
        width: 100%;
        height: 40px;
        background-color: black;
        color: white;
        overflow: hidden;
    }

    .marquee-content {
        list-style: none;
        height: 100%;
        display: flex;
        animation: scrolling 50s linear infinite;
    }

    @keyframes scrolling {
        0% {
            transform: translateX(80vw);
        }

        100% {
            transform: translateX(-180vw);
        }
    }

    .marquee-content li {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        flex-shrink: 0;
        font-size: 2rem;
        white-space: nowrap;
    }


    /* slide image */
    #slideshow {
        margin: auto;
        position: relative;
        width: 100%;
        height: 100%;
        padding: 0;
        -webkit-backface-visibility: hidden;

    }

    #slideshow>div {
        position: relative;
        display: block;
    }

    #slideshow img {
        display: block;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-attachment: fixed;
    }
</style>
<?php $this->endSection(); ?>