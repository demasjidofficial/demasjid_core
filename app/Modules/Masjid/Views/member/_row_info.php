<?php 
    $wilayahDetail = $item->detail_wilayah;
?>
<td><?= esc($item->name) ?></a></td>
<td><?= esc($item->wilayah_id)?></a></td>
<td><?= esc($wilayahMap[$wilayahDetail['kota/kabupaten']]['nama']   ?? '')?></a></td>
<td><?= esc($wilayahMap[$wilayahDetail['kecamatan']]['nama']   ?? '')?></a></td>
<td><?= esc($wilayahMap[$wilayahDetail['desa']]['nama']   ?? '') ?></a></td>
<td><?= esc($item->code) ?></a></td>
<td><?= esc($item->address) ?></a></td>
<td><?= esc($item->email) ?></a></td>
<td><?= esc($item->domain) ?></a></td>
<td><?= esc($item->telephone) ?></a></td>
<td><img class="img-thumbnail" src="<?= site_url(esc($item->path_logo)) ?>"></td>
<td><img class="img-thumbnail" src="<?= site_url(esc($item->path_image)) ?>"></td>
<td><?= esc($item->state) ?></a></td>
<td class="d-flex justify-content-end"  hx-confirm="<?= lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
    <!-- Action Menu -->
    <div class="dropdown">
        <button class="btn btn-default btn-sm dropdown-toggle btn-3-dots" type="button"  data-toggle="dropdown" aria-expanded="false"></button>
        <ul class="dropdown-menu">
            <li><a href="<?= $editUrl ?>" class="dropdown-item"><?= lang('Bonfire.edit') ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <button class="btn" hx-delete="<?= $deleteUrl ?>" hx-select="#alerts-wrapper" hx-swap="innerHTML" hx-indicator="#htmx-request-indicator">
                <?= lang('Bonfire.delete') ?>
                </button>
            </li>
        </ul>
    </div>
</td>
