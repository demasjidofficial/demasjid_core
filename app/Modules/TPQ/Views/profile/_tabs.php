<ul class="nav nav-tabs nav-fill" style="margin-bottom: -2px;">
    <?php foreach ($entities as $item) : ?>    
    <li class="nav-item">
        <a class="nav-link <?= $activeEntity == $item->id ? 'active' : '' ?>"
           href="<?= $actionUrl.'?entity='.$item->id ?>">
            <?= $item->name ?>
        </a>
    </li>
    <?php endforeach ?>    
</ul>
