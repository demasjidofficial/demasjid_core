<td><?php echo esc($item->name) ?></a></td>
<td><?php echo esc($item->no_hp) ?></a></td>
<td>
    <img width="50px" src="<?php echo site_url().$item->path_logo ?>">
    <?php echo esc($item->payment_rek_name) ?>
    </a>

</td>
<td><?php echo esc($item->campaign_name) ?></a></td>
<td class="text-center">
<div class="custom-control custom-switch">
        <input type="checkbox" data-toggle="confirmation" class="custom-control-input" data-campaign="<?php echo $item->campaign_id; ?>" data-state="<?php echo $item->state; ?>" data-danain="<?php echo $item->dana_in; ?>"  id="<?php echo $item->id; ?>" <?php echo ((int)$item->state) ? 'checked' : ''; ?> >
        <label class="custom-control-label" for="<?php echo $item->id; ?>"><?php echo ((int)$item->state)? "Received" : "Waiting" ?></label>
    </div>
</td>
<td></td>
<td><?php echo esc($item->date) ?></a></td>
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