<section class="filters">
    <?php if (isset($filters) && count($filters)): ?>
    <form action="<?= current_url() ?>" method="get"
          hx-get="<?= current_url() ?>"
          hx-trigger="change delay:400ms from:.filter-check"
          hx-target="<?= $target ?>"
    >
        <?= csrf_field() ?>

        <?php foreach ($filters as $key => $filter): ?>
            <h2><?= $filter['title'] ?></h2>

            <ul class="list-unstyled">
            <?php if(isset($filter['options'])): ?>
                <?php foreach ($filter['options'] as $value => $name): ?>
                    <li class="form-check">
                        <input class="form-check-input filter-check" type="checkbox" name="filters[<?= $key ?>][<?= $value ?>]"
                            value="<?= $value ?>" id="<?= $key . ':' . $value ?>>">
                        <label class="form-check-label" for="<?= $key . ':' . $value ?>">
                            <?= $name ?>
                        </label>
                    </li>
                <?php endforeach ?>
            <?php else: ?>
                <li class="form-check">
                    <input class="form-input filter-check" type="input" name="filters[<?= $key ?>]">                    
                </li>
            <?php endif ?>
            </ul>
        <?php endforeach ?>
    </form>
    <?php endif ?>
</section>
