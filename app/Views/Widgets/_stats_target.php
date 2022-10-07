<div class="row">
    <?php foreach ($stats  as $elem) : ?>

    <?php foreach ($elem->items() as $index => $widget) : ?>

    <div class="col-12 col-sm-9 col-md-12">
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
