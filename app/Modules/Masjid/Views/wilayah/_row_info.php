<td><?= esc($item->kode) ?></a></td>
<td><?= esc($item->nama) ?></a></td>
<td><?= esc($item->level) ?></a></td>
<td class="d-flex justify-content-end"  hx-confirm="<?= lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
    <!-- Action Menu -->
    <div class="dropdown">
        <button class="btn btn-default btn-sm dropdown-toggle btn-3-dots" type="button"  data-toggle="dropdown" aria-expanded="false"></button>
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
