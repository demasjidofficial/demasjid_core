<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
            <!-- Section Tittle -->
            <div class="section-tittle text-center mb-80">
                <span><br />Layanan Kami</span>
                <h3><b>Dengan sarana unit Baitul Mal, inshaAlloh sistem pengelolaan ZISWAF lebih amanah.</b></h3>
            </div>
        </div>
    </div>
    <?php foreach ($services  as $elem) : ?>
    <div class="row">        
        <?php foreach ($elem->items() as $index => $widget) : ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-cat text-center mb-50">
                <div class="cat-icon">
                    <span class="<?= $widget->faIcon() ?>"></span>
                </div>
                <div class="cat-cap">
                    <h5><a href="#"> <?= $widget->title() ?></a></h5>
                    <p><?= $widget->value() ?></p>
                </div>
            </div>
        </div>        
        <?php endforeach; ?>        
    </div>
    <?php endforeach; ?>
</div>