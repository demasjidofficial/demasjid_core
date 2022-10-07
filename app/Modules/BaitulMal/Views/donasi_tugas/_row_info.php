<td>
    <div class="admin-donasi-list ">
        <div>
            <?php echo esc($item->no_inv)?>
        </div>
        <p class="name"><?php echo esc($item->name) ?></p>
    </div>
</td>
<td><a style="cursor:pointer" onClick="sendChatTo(<?php echo esc($item->no_hp) ?>)"><i class='fab fa-whatsapp'></i> <?php echo esc($item->no_hp) ?></a></td>
<td>
    <div class="admin-donasi-list d-inline-flex ">
        <div class="mr-1">
            <img src="<?php echo ($item->bank_path_logo)? site_url().$item->bank_path_logo : site_url().$item->paymentgateway_path_logo ?>">
        </div>
        <div>
            <?php echo local_currency($item->dana_in) ?>
            <p><?php echo ($item->payment_rek_name) ?></p>
        </div>
    </div>
</td>
<td><?php echo esc($item->campaign_name) ?></a></td>
<td class="text-center">
<div class="custom-control custom-switch">
        <input type="checkbox" data-toggle="confirmation" class="custom-control-input" data-campaign="<?php echo $item->campaign_id; ?>" data-state="<?php echo $item->state; ?>" data-danain="<?php echo $item->dana_in; ?>"  id="<?php echo $item->id; ?>" <?php echo ($item->state == 1) ? 'checked' : ''; ?> >
        <label class="custom-control-label" for="<?php echo $item->id; ?>"><?php echo (($item->state == 1)? "Received" : (($item->state == 0)? "Waiting" : "Confirmed")) ?></label>
    </div>
</td>
<td></td>
<td><?php echo local_date($item->date) ?></a></td>
<td class="d-flex justify-content-end"  hx-confirm="<?php echo lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
    <!-- Action Menu -->
    <div class="dropdown">
        <button class="btn btn-default btn-sm dropdown-toggle btn-3-dots" type="button"  data-toggle="dropdown" aria-expanded="false"></button>
        <ul class="dropdown-menu">
            <li><span class="dropdown-item" onclick='viewDetail(<?php echo ($item->id) ?>)'><?php echo lang('Bonfire.detail') ?></span></li>
            <!-- <li><a href="<php echo $editUrl ?>" class="dropdown-item"><php echo lang('Bonfire.detail') ?></a></li> -->
            <li><hr class="dropdown-divider"></li>
            <li>
                <button class="btn" hx-delete="<?php echo $deleteUrl ?>" hx-select="#htmx-alert" hx-swap="innerHTML" hx-indicator="#htmx-request-indicator">
                <?php echo lang('Bonfire.delete') ?>
                </button>
            </li>
        </ul>
    </div>
</td>