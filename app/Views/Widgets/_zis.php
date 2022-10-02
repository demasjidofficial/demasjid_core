<div class="row de_row__infobox_bg">
    <?php foreach ($zis  as $elem) : ?>

    <?php foreach ($elem->items() as $index => $widget) : ?>

    
        <div class="info-box mb-3 <?= $widget->bgColor() ?>">
            <span class="info-box-icon"><i class="<?= $widget->faIcon() ?>"></i></span>

            <div class="info-box-content">
                <span class="info-box-text"><?= $widget->title() ?></span>
                <span class="info-box-number">
                    <?= $widget->value() ?>
                    <small></small>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>        
    


    <?php endforeach; ?>

    <?php endforeach; ?>
</div>
