<td><img width="100px" src="/<?php echo ($item->path_logo) ? esc($item->path_logo) : $blank_img ?>"></a></td>
<td><?php echo esc($item->name) ?></a></td>
<?php if (isset($data->path_logo)) { ?>
    <div class="justify-content-center photo-wrapper">
        <img src="<?php echo site_url($data->path_logo); ?>" alt="" class="img-thumbnail" style="height:150px">
    </div>
<?php } ?>
<td class="d-flex justify-content-end"  hx-confirm="<?php echo lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
    <!-- Action Menu -->
    <div class="dropdown">
        <button class="btn btn-default btn-sm dropdown-toggle btn-3-dots" type="button"  data-toggle="dropdown" aria-expanded="false"></button>
        <ul class="dropdown-menu">
            <li><a href="<?php echo $editUrl ?>" class="dropdown-item"><?php echo lang('Bonfire.edit') ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <button class="btn" hx-delete="<?php echo $deleteUrl ?>" hx-select="#htmx-alert" hx-swap="innerHTML" hx-indicator="#htmx-request-indicator">
                <?php echo lang('Bonfire.delete') ?>
                </button>
            </li>
        </ul>
    </div>
</td>
