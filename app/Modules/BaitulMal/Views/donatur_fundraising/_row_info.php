<td><?php echo esc($item->tugas) ?></a></td>
<td><?php echo local_date(esc($item->tanggal_transaksi)) ?></a></td>
<td><?php echo esc($item->nama) ?></a></td>
<td><?php echo esc($item->no_hp) ?></a></td>
<td><?php echo esc($item->alamat) ?></a></td>
<td><?php echo "Rp " . number_format(esc($item->nominal)) ?></a></td>
<td><?php echo "Rp " . number_format(esc($item->nominal_target)) ?></a></td>
<td><?php echo esc($item->nama_tim) ?></a></td>
<td><?php echo esc($item->first_name)." ".esc($item->last_name) ?></a></td>
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