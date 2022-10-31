<p class="text-center">
    <strong>Kategori Donatur</strong>
</p>

<?php foreach ($stats  as $elem) : ?>

    <?php foreach ($elem->items() as $index => $widget) : ?>


        <div class="progress-group">
            <?= $widget->title() ?>
            <span class="float-right"><b><?= $widget->value() / 100 ?> %</b><?= $widget->value() ?></span>
            <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: 80%"></div>
            </div>
        </div>
        <!-- /.progress-group -->

    <?php endforeach; ?>

<?php endforeach; ?>