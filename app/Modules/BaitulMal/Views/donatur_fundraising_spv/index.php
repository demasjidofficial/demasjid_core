<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <div class="row de_head_back_title">
        <div class="col">
            <a href="<?= site_url('admin/baitulmal/overview_tim') ?>" class="back">&larr; <?= lang('crud.back') ?></a></br>

            <h2><?= lang('crud.data_donatur') ?></h2>
        </div>
        <div class="col-auto">
            <a href="<?php echo route_to($baseRoute . '/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> <?= lang('crud.add_donatur') ?></a>
        </div>
    </div>
    
</x-page-head>

<x-admin-box>
    <div>
        <div class="row">
            <!-- List donatur_fundraisings -->
            <div class="col table-responsive" id="donatur_fundraising-list">
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