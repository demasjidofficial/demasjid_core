<td><?php echo esc($item->kampanye) ?></a></td>
<td><?php echo esc($item->campaign_name) ?></a></td>
<td><?php echo esc($item->donatur) ?></a></td>
<td><?php echo "Rp " . number_format(esc($item->target_nominal),2,',','.') ?></a></td>
<td><?php echo esc($item->donasi) ?></a></td>
<td><?php echo  date('d-m-Y',strtotime(esc($item->jadwal_mulai)))." - ". date('d-m-Y',strtotime(esc($item->jadwal_akhir))) ?></a></td>

<td class="d-flex justify-content-end"  hx-confirm="<?= lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
    <!-- Action Menu -->
    <div class="dropdown">
        <button class="btn btn-sm dropdown-toggle btn-3-dots" type="button"  data-toggle="dropdown" aria-expanded="false"></button>
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