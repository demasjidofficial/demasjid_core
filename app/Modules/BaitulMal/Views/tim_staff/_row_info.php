<td><?php echo esc($item->nama_tim) ?></a></td>
<td><?php echo esc($item->first_name)." ".esc($item->last_name) ?></a></td>

<td class="d-flex justify-content-end"  hx-confirm="<?php echo lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
    <!-- Action Menu -->
    <div class="dropdown">
        <button class="btn btn-default btn-sm dropdown-toggle btn-3-dots" type="button"  data-toggle="dropdown" aria-expanded="false"></button>
        <ul class="dropdown-menu">
            <li><a href="<?php echo $editUrl ?>" class="dropdown-item"><?php echo lang('Bonfire.tambah_tugas') ?></a></li>
            <li><hr class="dropdown-divider"></li>
  
        </ul>
    </div>
</td>
