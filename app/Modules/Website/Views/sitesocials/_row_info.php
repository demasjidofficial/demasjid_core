<td><img width="100px" src="/<?php echo ($item->path_icon) ? esc($item->path_icon) : 'uploads/images/blank.jpg' ?>"></a></td>
<td><?php echo esc($item->name) ?></a></td>
<td><?php echo esc($item->link) ?></a></td>
<td class="text-center">
<div class="custom-control custom-switch">
        <input type="checkbox" data-toggle="confirmation" class="custom-control-input" data-state="<?php echo $item->state; ?>" id="<?php echo $item->id; ?>" <?php echo ((int)$item->state) ? 'checked' : ''; ?> >
        <label class="custom-control-label" for="<?php echo $item->id; ?>"><?php echo ((int)$item->state)? "Active" : "No Active" ?></label>
    </div>
</td>
<td class="d-flex justify-content-end"  hx-confirm="<?php echo lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
    <!-- Action Menu -->
    <div class="dropdown">
        <button class="btn btn-sm dropdown-toggle btn-3-dots" type="button"  data-toggle="dropdown" aria-expanded="false"></button>
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
