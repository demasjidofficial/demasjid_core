<td><?= esc($item->name) ?></a></td>
<td><?= esc($item->wilayah_id) ?></a></td>
<td><?= esc($item->code) ?></a></td>
<td><?= esc($item->address) ?></a></td>
<td><?= esc($item->path_logo) ?></a></td>
<td><?= esc($item->path_image) ?></a></td>
<td><?= esc($item->state) ?></a></td>
<td class="d-flex justify-content-end"  hx-confirm="<?= lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
    <!-- Action Menu -->
    <div class="dropdown">
        <button class="btn btn-default btn-sm dropdown-toggle btn-3-dots" type="button"  data-bs-toggle="dropdown" aria-expanded="false"></button>
        <ul class="dropdown-menu">
            <li><a href="<?= $editUrl ?>" class="dropdown-item"><?= lang('Bonfire.edit') ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <button class="btn" hx-delete="<?= $deleteUrl ?>" hx-select="#htmx-alert" hx-swap="innerHTML" hx-indicator="#htmx-request-indicator">
                <?= lang('Bonfire.delete') ?>
                </button>
            </li>
        </ul>
    </div>
</td>
