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
            <?php
                $now = strtotime(date('Y/m/D'));
                $time = date('H:i:s',strtotime(time()));
                $awal  = strtotime($now . $time);
                $akhir = strtotime('2022-08-12 11:07:33');
                $diff  = $akhir - $awal;

                $jam   = floor($diff / (60 * 60));
                $menit = $diff - ($jam * (60 * 60));
                $detik = $diff % 60;
            ?>
            <div class="col">
                <h2 id="timer" class="text-countdown">
                    <!-- < ?= 'Waktu tinggal: ' . $jam .  ' jam, ' . floor($menit / 60) . ' menit, ' . $detik . ' detik'; ?> -->
                </h2>
                <span id="time1"></span>
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
                <li><img src="/<?= esc($bg['path_image']) ?>" <?= $duration = $bg['duration']; ?>  alt="imgslide"></li>
            </div>
        <?php } 

        ?>
    </div>
    <!-- </div> -->
</section>


<!-- card jadwal sholat -->
<section class="footer fixed-bottom mb-5">
    <div class="text-footer">
        <div class="row m-5 ml-5">
            <?php foreach ($rawatib_schedule as $sholat) {
                $no = $sholat['id'];

                // $time = date('H:i', strtotime($sholat['pray_time']));
                $time = $sholat['pray_time'];
            ?>

                <div class="col">
                    <div class="card  w-40 card-pray-bg bg-color<?= $no ?>">
                        <div class="card-body text-center card-sholat" id="<?= $no ?>">
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
                    <li><?= $text['text'] ?></li>
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
            .fadeIn(2000)
            .end()
            .appendTo('#slideshow');
        $('ul li').removeClass('active');
        $('ul li:eq(' + index + ')').addClass('active');
        index = index < maxindex - 1 ? index + 1 : 0;
    }, <?= $duration ?>);

    for (var i = 0; i < maxindex; i++) {
        $('ul').append('<li class="' + (i == 0 ? 'active' : '') + '"></li>');
    }
    
</script>
<?php $this->endSection(); ?>

<?php $this->section('styles'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- coin slider -->
<?= assetUrlLink(assetUrl('board/plugins/coin-slider/coin-slider-styles.css'), 'css'); ?>
<!-- coin slider -->

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

    .text-center {
        text-align: center;
        margin: auto;
        padding: auto;

    }

    .text-left {
        margin-left: 20px;
    }

    .text-right {
        text-align: right;
        margin: auto;
        padding: auto;
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
        border-radius: 10px;
        opacity: .8;
        padding: 10%;
    }

    .bg-color1 {
        background-color: #CA4E79;
    }

    .bg-color2 {
        background-color: #395B64;
    }

    .bg-color3 {
        background-color: #A66CFF;
    }

    .bg-color4 {
        background-color: #5BB318;
    }

    .bg-color5 {
        background-color: #FEB139;
    }



    /* run text */
    .text-running {
        background-color: black;
    }

    marquee {
        width: 100%;
        height: 40px;
        color: white;
        overflow: hidden;
        margin-top: 5px;
        font-size: 2rem;
    }
</style>
<?php $this->endSection(); ?>

<?php $this->section('main'); ?>
<!-- header -->
<section class="header fixed-top">
    <div class="card text-center textcard">
        <div class="card-header">
            <div class="row text-center">
                <div class="col col-sm-1 text-center">
                    <img width="120px" src="/<?= esc($masjid_profile['path_logo']) ?>">
                </div>
                <div class="col text-left">
                    <h1 class="text-header"><?= $masjid_profile['name']; ?></h1>
                    <h3 class="text-address">
                        <?= ucwords(strtolower($desa . ', ' . $kecamatan . ', ' . $kota . ', ' . $provinsi)); ?>
                    </h3>
                    <h3 class="text-phone"><?= lang('app.phone') ?>: <?= $masjid_profile['telephone']; ?> | <?= lang('app.email') ?>: <?= $masjid_profile['email']; ?></h3>
                </div>
                <div class="col col-sm-3 text-right">
                    <h2 id="date" class="date-text"></h2>
                    <h2 id="clock" class="clock-text"></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="countdown mt-5 text-center">
        <div class="row">

        </div>
    </div>
</section>

<!-- slideshow -->
<section class="content-slideshow">
    <div id='coin-slider'>
        <a href="#">
            <?php foreach ($board_news_bg as $bg) { ?>
                <img src='/<?= esc($bg['path_image']) ?>' data-duration='<?= esc($bg['duration']) ?>'>
            <?php } ?>
        </a>
    </div>
        <div id='coin-slider'>
            <a href="#">
    <div id="wowslider-container6">
        <?php $nomberId = 0; ?>
        <div class="ws_images">
            <ul>
                <?php foreach ($board_news_bg as $bg) { ?>
                    <li><img src="/<?= esc($bg['path_image']) ?>" duration='<?= esc($bg['duration']) ?>' class="slider" alt="image slider" id="wows5_<?= $nomberId++; ?>" /></li>
                <?php } ?>
            </ul>
        </div>
        <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slideshow</a> by WOWSlider.com v9.0</div>
        <div class="ws_shadow"></div>
    </div>
</section>

<!-- card jadwal sholat -->
<section class="footer fixed-bottom mb-5">
    <div class="text-footer">
        <div class="row m-5 ml-5">
            <?php foreach ($rawatib_schedule as $sholat) {
                $no = $sholat['id'];
                $time = $sholat['pray_time'];
            ?>

                <div class="col">
                    <div class="card  w-40 card-pray-bg bg-color<?= $no ?>">
                        <div class="card-body text-center card-sholat" id="<?= $no ?>">
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
        <marquee scrollamount="5" loop="infinite" animation="linear" scrolldelay="85">
            <?php foreach ($board_news_runtext as $text) { ?>
                <?= '&emsp;&emsp;' . $text['text'] ?>
            <?php } ?>
        </marquee>
    </div>
</section>
</div>

<?php $this->endSection(); ?>



<?php $this->section('scripts'); ?>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->

<!-- coin slider -->
<?= assetUrlLink(assetUrl('board/plugins/coin-slider/coin-slider.min.js'), 'js'); ?>
<!-- coin slider -->

<!-- wow slider -->
<?= assetUrlLink(assetUrl('board/plugins/wow/engine6/wowslider.js'), 'js'); ?>
<?= assetUrlLink(assetUrl('board/plugins/wow/engine6/script.js'), 'js'); ?>
<!-- wow slider -->

<script>
   
</script>
<?php $this->endSection(); ?>