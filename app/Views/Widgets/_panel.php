<div class="card de_tabel_button_selengkapnya">
    <div class="card-header border-transparent">
        <h3 class="card-title"><?= $title ?></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <?php foreach ($panel  as $elem) : ?>

        <?php foreach ($elem->items() as $index => $widget) : ?>
        <div class="<?= $widget->itemClass() ?>">
            <?= $widget->content() ?>            
        </div>

        <?php endforeach; ?>

        <?php endforeach; ?>
    </div>
</div>
