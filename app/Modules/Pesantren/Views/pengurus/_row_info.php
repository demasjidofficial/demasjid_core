<td><?php echo esc($item->name) ?></a></td>
<td><?php echo esc($item->description) ?></a></td>
<td><?php echo esc($item->jabatan_id) ?></a></td>
<td><?php echo esc($item->address) ?></a></td>
<td><?php echo esc($item->path_image) ?></a></td>
<td><?php echo esc($item->telephone) ?></a></td>
<td><?php echo esc($item->email) ?></a></td>
<td><?php echo esc($item->provinsi_id) ?></a></td>
<td><?php echo esc($item->kota_id) ?></a></td>
<td><?php echo esc($item->kecamatan_id) ?></a></td>
<td><?php echo esc($item->desa_id) ?></a></td>
<td><?php echo esc($item->entity_id) ?></a></td>
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
