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
        <?php echo $this->include('_table_head') ?>
        <tbody>
            <?php if (isset($timStaff) && count($timStaff)) : ?>
                <?php foreach ($timStaff as $item) : ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="selects[]" class="form-check">
                        </td>
                        <td><?php echo esc($item->tim) ?></a></td>
                        <td><?php echo esc($item->first_name) . " " . esc($item->last_name) ?></a></td>
                        <td><?php echo esc($item->created_by) ?></a></td>
                        <td><?php echo esc($item->updated_by) ?></a></td>
                        <td><?php echo esc($item->tugas_tim) ?></a></td>
                        <td><?php echo esc($item->target_nominal_tim) ?></a></td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>




</x-admin-box>

<?php $this->endSection(); ?>