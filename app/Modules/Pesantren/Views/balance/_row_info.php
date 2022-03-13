<td><?php echo $item->transaction_date->format('d M Y') ?></a></td>
<td><?php echo esc($item->description) ?></a></td>
<td><?php echo $item->type == 'debit' ? format_number($item->amount) : '' ?></a></td>
<td><?php echo $item->type == 'credit' ? format_number($item->amount) : '' ?></a></td>
<td><?php echo format_number($item->saldo) ?></a></td>
<td><?php echo esc($item->created_name) ?></a></td>
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
