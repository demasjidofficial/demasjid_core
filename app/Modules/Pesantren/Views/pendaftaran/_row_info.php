<td><img width="100px" src="/<?php echo esc($item->path_image) ?>"></a></td>
<td><?php echo esc($item->name) ?></a></td>
<!-- <td>< ?php echo esc($item->nick_name) ?></a></td> -->
<td><?php echo esc($item->nis) ?></a></td>
<td><?php echo esc($item->kelas_name) ?></a></td>
<td><?php echo esc($item->school_origin) ?></a></td>
<td><?php echo esc($item->gender) ?></a></td>
<!-- <td>< ?php echo esc($item->birth_place) ?></a></td>
<td>< ?php echo esc($item->birth_date) ?></a></td> -->

<td><?php echo esc($item->birth_place) . ', ' . esc($item->birth_date) ?></a></td>

<!-- <td>< ?php echo esc($item->provinsi_id) ?></a></td>
<td>< ?php echo esc($item->kota_id) ?></a></td>
<td>< ?php echo esc($item->kecamatan_id) ?></a></td>
<td>< ?php echo esc($item->desa_id) ?></a></td>
<td>< ?php echo esc($item->address) ?></a></td> -->

<td><?php echo esc($item->provinsi_id).', '.esc($item->kota_id).', '.esc($item->kecamatan_id).', '.esc($item->desa_id).', '.esc($item->address) ?></a></td>
<!-- <td>< ?= ucwords(strtolower($item->desa . ', ' . $item->kecamatan . ', ' . $item->kota . ', ' . $item->provinsi)); ?></a></td> -->

<td><?php echo esc($item->father_name) ?></a></td>
<td><?php echo esc($item->father_job) ?></a></td>
<td><?php echo esc($item->father_tlpn) ?></a></td>
<td><?php echo esc($item->father_email) ?></a></td>
<td><?php echo esc($item->mother_name) ?></a></td>
<td><?php echo esc($item->mother_job) ?></a></td>
<td><?php echo esc($item->mother_tlpn) ?></a></td>
<td><?php echo esc($item->mother_email) ?></a></td>
<td><?php echo convertStateRegisterEducation($item->state) ?></a></td>
<td><?php echo esc($item->tahunAjaran_name) ?></a></td>
<td><?php echo esc($item->description) ?></a></td>

<td class="d-flex justify-content-end" hx-confirm="<?php echo lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
    <!-- Action Menu -->
    <div class="dropdown">
        <button class="btn btn-default btn-sm dropdown-toggle btn-3-dots" type="button" data-toggle="dropdown" aria-expanded="false"></button>
        <ul class="dropdown-menu">
            <li><a href="<?php echo $editUrl ?>" class="dropdown-item"><?php echo lang('Bonfire.edit') ?></a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <button class="btn" hx-delete="<?php echo $deleteUrl ?>" hx-select="#htmx-alert" hx-swap="innerHTML" hx-indicator="#htmx-request-indicator">
                    <?php echo lang('Bonfire.delete') ?>
                </button>
            </li>
        </ul>
    </div>
</td>