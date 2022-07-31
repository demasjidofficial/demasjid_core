<td><img width="100px" src="/<?php echo ($item->master_bank_path_logo) ? esc($item->master_bank_path_logo) : 'uploads/images/blank.jpg' ?>"></a></td>
<td><?php echo esc($item->master_bank_name) ?></a></td>
<td><?php echo esc($item->rek_no) ?></a></td>
<td><?php echo esc($item->rek_name) ?></a></td>
<td class="text-center">
    <div class="custom-control custom-switch">
        <input onChange="updateState(<?php echo $item->id; ?>, <?php echo $item->isActived; ?>)" type="checkbox" class="custom-control-input" value="<?php echo $item->isActived; ?>" id="<?php echo $item->id; ?>" <?php echo ($item->isActived) ? 'checked' : ''; ?> disabled >
        <label class="custom-control-label" for="<?php echo $item->id; ?>"></label>
    </div>
</td>
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

<script type="text/javascript">
    function updateState(id, value) {
        let url = "<?php echo base_url()?>" + "/api/update_paymentmethod_activation/";
        console.log(url);
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: {
                'id': id,
                'value' : value
            },
            success: function(data) {
                console.log('succress');
                console.log(data);
            },
            error : function(data) {
                console.log('error');
                console.log(data);
            }
        });   
    }
</script>
