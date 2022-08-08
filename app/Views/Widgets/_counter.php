<?php foreach ($counter  as $elem) : ?>

<?php foreach ($elem->items() as $index => $widget) : ?>
<div class="col-lg-3 col-md-6 col-sm-6">
    <!-- Counter Up -->
    <div class="single-counter text-center">
        <span class="counter color-green"><?= $widget->value() ?></span>
        <span class="plus">+</span>
        <p class="color-green"><?= $widget->title() ?></p>
    </div>
</div>
<?php endforeach; ?>

<?php endforeach; ?>
