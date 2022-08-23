<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <a href="<?php echo $backUrl ?>" class="back">&larr; <?= lang('crud.tim_staff') ?></a>
    <h4><?php echo isset($data) ? '<i class="fa fa-pencil"></i>' : '<i class="fa fa-plus"></i>' ?> <?= lang('crud.tim_staff') ?></h4>
</x-page-head>

<?php if (isset($data) && null !== $data->deleted_at) { ?>
    <div class="alert danger">
        This <?= lang('crud.tim_staff') ?> was deleted on <?php echo $data->deleted_at->humanize(); ?>.
        <a href="#">Restore <?= lang('crud.tim_staff') ?>?</a>
    </div>
<?php } ?>


<x-admin-box>

    <table class="table table-hover">
        <thead>
            <th></th>
            </th>

            <th>Nama Tim</th>
            <th>Nama Anggota</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php if (isset($timStaff) && !empty($timStaff)) { ?>
                <?php foreach ($timStaff as $index => $item) {
                    $no = 1; ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="selects[]" class="form-check">
                        </td>

                        <td><?php echo $item->tim ?></a></td>
                        <td><?php echo $item->first_name . " " . $item->last_name ?></a></td>
                        <td class="d-flex justify-content-end" hx-confirm="<?php echo lang('Bonfire.deleteMessage') ?>" hx-target="closest tr" hx-select="" hx-swap="outerHTML swap:1s">
                            <!-- Action Menu -->
                            <div class="dropdown">
                                <button class="btn btn-default btn-sm dropdown-toggle btn-3-dots" type="button" data-toggle="dropdown" aria-expanded="false"></button>
                                <ul class="dropdown-menu">
                                    <li><a href="" class="dropdown-item"><?php echo lang('Bonfire.edit') ?></a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <button class="btn" hx-delete="" hx-select="#htmx-alert" hx-swap="innerHTML" hx-indicator="#htmx-request-indicator">
                                            <?php echo lang('Bonfire.delete') ?>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </td>


                    </tr>
                <?php

                } ?>
            <?php } ?>
        </tbody>
    </table>




</x-admin-box>

<?php $this->endSection(); ?>