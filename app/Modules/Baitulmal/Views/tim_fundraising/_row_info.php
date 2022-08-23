<td><p style="font-weight: bold;font-size:20px"><?php echo esc($item->kampanye) ?></p>
<p style="font-size:12px;text-align:right">Supervisor <b><?php echo esc($item->supervisor) ?></b></p></a></a></td>
<!-- 
<td><?php echo esc($item->supervisor) ?></a></td>
<td><?php echo esc($item->donatur) ?></a></td>
<td><?php echo "Rp " . number_format(esc($item->campaign_tonase),2,',','.') ?></a></td>
<td><?php echo esc($item->donasi) ?></a></td> -->
<td>Mulai : <?php echo  date('d-m-Y',strtotime(esc($item->campaignstart_date))) ?><br/>Selesai <?php echo date('d-m-Y',strtotime(esc($item->campaignend_date))) ?></a></td>



<td class="d-flex justify-content-end"  hx-confirm="<?php echo lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
    <!-- Action Menu -->
    <div class="dropdown">
        <button class="btn btn-default btn-sm dropdown-toggle " type="button"  data-toggle="dropdown" aria-expanded="false">Pilihan</button>
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
