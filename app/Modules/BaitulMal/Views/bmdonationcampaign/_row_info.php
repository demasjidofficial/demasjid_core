<td><img width="100px" src="/<?php echo esc($item->path_image) ?>"></a></td>
<td><?php echo esc($item->name) ?></a></td>
<td><?php echo local_currency($item->campaign_tonase) ?></a></td>
<td><?php echo local_currency($item->campaign_collected) ?></a></td>
<td><?php echo esc($item->campaignend_date) ?></a></td>
<td><?php echo convertStateProgram($item->state) ?></a></td>
<td class="d-flex flex-column justify-content-end"  hx-confirm="<?php echo lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
    <!-- Action Menu -->
    <div class="dropdown dropright">
        <button class="btn btn-default btn-sm dropdown-toggle" type="button"  data-toggle="dropdown" aria-expanded="false">Shortcode</button>
        <ul class="dropdown-menu" style="position: relatif !important;">
            <li><a class="dropdown-item">Card Campaign</a></li>
            <li><a class="dropdown-item">List Campaign</a></li>
            <li><a class="dropdown-item">Total Terkumpul</a></li>
            <li><a class="dropdown-item">Jumlah Donasi</a></li>
            <li><a class="dropdown-item">Progres Donasi</a></li>
            <li><a class="dropdown-item">Info Campaign</a></li>
            <li><a class="dropdown-item">Info Update</a></li>
            <li><a class="dropdown-item">List Donatur</a></li>
        </ul>
    </div>
    <div class="dropdown dropright">
        <button class="btn btn-default btn-sm dropdown-toggle " type="button"  data-toggle="dropdown" aria-expanded="false">Option</button>
        <ul class="dropdown-menu">
            <li><a href="<?php echo $editUrl ?>" class="dropdown-item"><?php echo lang('Bonfire.edit') ?></a></li>
            <li><a class="dropdown-item">Add Info Update</a></li>
            <li><a href="<?= site_url('/admin/baitulmal/donasi/'.$item->id)?>" class="dropdown-item">Data Donasi</a></li>
            <li>
                <button class="btn" hx-delete="<?php echo $deleteUrl ?>" hx-select="#htmx-alert" hx-swap="innerHTML" hx-indicator="#htmx-request-indicator">
                <?php echo lang('Bonfire.delete') ?>
                </button>
            </li>
        </ul>
    </div>
</td>
