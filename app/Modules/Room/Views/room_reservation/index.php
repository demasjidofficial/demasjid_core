<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <div class="row">
        <div class="col">
            <a href="#" class="back" onclick="history.back()">&larr; <?= lang('crud.back') ?></a>
            <h2><?= lang('crud.reservruangan') ?></h2>
        </div>
        <div class="col-auto">
            <a href="<?php echo route_to($baseRoute . '/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> <?= lang('crud.add_new') ?></a>
        </div>
    </div>
</x-page-head>

<x-admin-box>
    <div>
        <div class="row">
            <!-- List room_reservations -->
            <div class="col table-responsive" id="room_reservation-list">
                <?php echo $this->include($viewPrefix . '\_table'); ?>
                <?php echo $pager->links() ?>
            </div>
        </div>
    </div>

</x-admin-box>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>

</script>
<?php $this->endSection(); ?>