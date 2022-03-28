<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.member_mosque')?></h2>
            </div>
            <div class="col-auto">
                <a href="<?= route_to($baseRoute . '/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  <?= lang('crud.add_new')?></a>
            </div>
        </div>
    </x-page-head>

    <x-admin-box>
        <div>
            <div class="row">
                <!-- List members -->
                <div class="col table-responsive" id="member-list">
                    <?= $this->include($viewPrefix . '\_table'); ?>
                    <?= $pager->links() ?>
                </div>
            </div>
        </div>

    </x-admin-box>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script></script>
<?php $this->endSection(); ?>
