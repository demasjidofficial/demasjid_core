<!-- slider Area Start-->
<div class="slider-area">
    <div class="slider-active">
        <?php if ($sliders): ?>
            <?php foreach($sliders as $slide): ?>
            <!-- Single Slider -->        
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container" style="margin-top:-22%;">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".6s"><?= $slide['name'] ?></h1>
                                <p data-animation="fadeInUp" data-delay=".8s"><?= $slide['content'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
            <?php endforeach ?>
        <?php endif ?>        
    </div>
</div>
<!-- slider Area End-->