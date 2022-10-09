<div class="row de_infobox_top">
    <?php foreach ($stats  as $elem) : ?>

    <?php foreach ($elem->items() as $index => $widget) : ?>

    <div class="col-12 col-sm-8 col-md-4">
        <div class="info-box">
            <span class="info-box-icon  <?= $widget->bgIcon() ?> elevation-1"><i class="<?= $widget->faIcon() ?>"></i></span>

            <div class="info-box-content">
                <span class="info-box-text"><?= $widget->title() ?></span>
                <span class="info-box-number">
                    <?= $widget->value() ?>
                    <small></small>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>        
    </div>


    <?php endforeach; ?>

    <?php endforeach; ?>
</div>
