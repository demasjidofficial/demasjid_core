<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <div class="row">
        <div class="col">
        <a href="#" class="back" onclick="history.back()">&larr; <?= lang('crud.back') ?></a></br>
            <h2><?= lang('crud.target_fundraising') ?></h2>
        </div>
        <div class="col-auto">
            <a href="<?php echo route_to($baseRoute . '/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> <?= lang('crud.target_fundraising_add') ?></a>
        </div>
        <div class="col-auto">
            <form class="d-flex" role="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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