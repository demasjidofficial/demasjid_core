<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<?php
    if (isset($sliders) && count($sliders)) {
        $counter = 0;
        $indicator = "";
        $inner = "";

        foreach ($sliders as $item) : 
            $indicator .= '<li data-target="#sliderIndicators" data-slide-to='.$counter.' class='. ((!$counter) ? "active" : "") .'></li>';
            $inner .= '
                 <div class="carousel-item '. ((!$counter) ? "active" : "") .'">
                    <img class="d-block w-100" src="'. site_url().$item['path_image'] .'" alt="">
                    <div class="carousel-caption d-none d-md-block">
                    '.$item['content'] .'
                  </div>
                </div>';
            $counter++;
        endforeach; ?>

        <div id="sliderIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php echo $indicator ?>
            </ol>
            <div class="carousel-inner">
                <?php echo $inner ?>
            </div>
            <a class="carousel-control-prev" href="#sliderIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#sliderIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <?php 
        
    }; 
?>

<div class="mt-60 mb-100">

<?php 
    if (isset($sections) && count($sections)) {
        foreach ($sections as $item) : ?>
        <section class="about-low-area">
            <div class="container">
                <?php echo $item['content']; ?>
            </div>
        </section>
    <?php 
        endforeach; 
    }; 
?>

    <section class="about-low-area">
        <div class="container">
            <?php echo $page['content']; ?>
        </div>
    </section>
</div>

<?= $this->endSection() ?>
