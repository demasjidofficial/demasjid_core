<td><?php echo esc($item->name) ?></a></td>
<td><?php echo esc($item->label) ?></a></td>
<td><?php echo esc($item->path_image) ?></a></td>
<td><?php echo esc($item->description) ?></a></td>
<td><?php echo esc($item->campaignstart_date) ?></a></td>
<td><?php echo esc($item->campaignend_date) ?></a></td>
<td><?php echo esc($item->campaign_tonase) ?></a></td>
<td><?php echo esc($item->campaigncategory_id) ?></a></td>
<td><?php echo esc($item->donationtype_id) ?></a></td>
<td><?php echo esc($item->state) ?></a></td>
<td><?php echo esc($item->created_by) ?></a></td>
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
