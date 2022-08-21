<section class="filters">
    <?php if (isset($filters) && count($filters)) { ?>
    <form action="<?php echo current_url(); ?>" method="post"
          hx-post="<?php echo current_url(); ?>"
          hx-trigger="change delay:400ms from:.filter-check"
          hx-target="<?php echo $target; ?>"
    >
        <?php echo csrf_field(); ?>

        <?php foreach ($filters as $key => $filter) { ?>
            <h2><?php echo $filter['title']; ?></h2>

            <ul class="list-unstyled">
            <?php if (isset($filter['options'])) { ?>
            <?php foreach ($filter['options'] as $value => $name) { ?>
                <li class="form-check">
                    <input class="form-check-input filter-check" type="checkbox" name="filters[<?php echo $key; ?>][<?php echo $value; ?>]"
                           value="<?php echo $value; ?>" id="<?php echo $key.':'.$value; ?>>">
                    <label class="form-check-label" for="<?php echo $key.':'.$value; ?>">
                        <?php echo $name; ?>
                    </label>
                </li>
            <?php } ?>
            <?php } ?>
            </ul>
        <?php } ?>
    </form>
    <?php } ?>
</section>
