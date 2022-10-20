<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <div class="row de_head_back_title">
        <div class="col">

            <a href="<?= site_url('admin/baitulmal/overview_manager') ?>" class="back">&larr; <?= lang('crud.back') ?></a></br>
            <h2><?= lang('crud.target_fundraising') ?></h2>
        </div>
        <div class="col-auto">
            <a href="<?php echo route_to($baseRoute . '/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> <?= lang('crud.target_fundraising_add') ?></a>

        </div>
        <a href="<?php echo route_to($baseRoute . '/new'); ?>" class="btn btn-primary de_button_add_absolute"><i class="fas fa-plus"></i> <!--<?= lang('crud.target_fundraising_add') ?>--></a>

        <div class="col-auto">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</x-page-head>

<x-admin-box>
    <div>
        <div class="row">
            <!-- List target_fundraisings -->
            <div class="col table-responsive" id="target_fundraising-list">
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