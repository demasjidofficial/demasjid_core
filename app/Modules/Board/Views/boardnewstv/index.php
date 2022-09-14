<?php $this->extend('master'); ?>

<?php $this->section('styles'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<?= asset_link('board/plugins/responsive-slides/responsiveslides.css', 'css'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/coin-slider/1.0.0/coin-slider-styles.css">

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

    /* Slideshow */
    .img-show {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
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
                    <img width="120px" src="/<?= esc($masjid_profile['path_image']) ?>">
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
                    <img src='/<?= esc($bg['path_image']) ?>' duration='<?= esc($bg['duration']) ?>'>
                <?php } ?>
            </a>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<?= asset_link('board/plugins/responsive-slides/responsiveslides.js', 'js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/coin-slider/1.0.0/coin-slider.min.js"></script>

<script>
    $(document).ready(function() {
        $('#coin-slider').coinslider({
            width: 2000,
            height: 1000,
            navigation: false,
            delay: $('img').attr('duration'),
        });
    });
</script>
<?php $this->endSection(); ?>