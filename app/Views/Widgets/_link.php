
    <?php foreach ($groups  as $elem) : ?>
    <div class="row">
    <?php foreach ($elem->items() as $index => $widget) : ?>    
        <div class="col-3 col-sm-3">
                <div class="small-box <?= $widget->bgColor() ?>">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= $widget->title() ?></p>
                    </div>
                    <div class="icon">
                    <i class="<?= $widget->faIcon() ?>"></i>
                    </div>
                    <a href="<?= $widget->url() ?>" class="small-box-footer">
                        Lihat detil <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
        </div>

    <?php endforeach; ?>
    </div>
    <?php endforeach; ?>

