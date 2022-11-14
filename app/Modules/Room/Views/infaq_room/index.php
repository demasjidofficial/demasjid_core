<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <div class="row">
        <div class="col">
            <h2><?= lang('crud.infaq_room') ?></h2>
        </div>
        <div class="col-auto">
            <a href="<?php echo route_to($baseRoute . '/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> <?= lang('crud.infaq_room') ?></a>
        </div>
    </div>
</x-page-head>

<x-admin-box>
    <div>
        <div class="row">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <!-- <h3>&nbsp;</h3> -->
                        <h4><?= lang('app.total_infaq') ?></h4>
                        <h4>
                            <b id="totalInfaq">
                                <?php echo print_r($dataStats) ?> Donasi
                                <?php if (isset($data) && count($data)) : ?>
                                <?php endif ?>
                            </b>
                        </h4>

                        <p>
                            Total infaq yang berhasil dikumpulkan <?php echo $dataStats->jumlahInfaq ?> donasi
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <!-- <a href="<= site_url('/admin/room/infaqroomcategory')?>" class="small-box-footer">
                            <= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a> -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4><?= lang('app.jumlah_infaq') ?></h4>
                        <h4><b id="jumlahInfaq"><?php echo $dataStats->totalInfaq ?> Donasi</b>
                            <?php if (isset($data) && count($data)) : ?>
                            <?php endif ?>
                        </h4>

                        <p>
                            Terverifikasi dari <?php echo $dataStats->totalInfaq ?> donasi
                        </p>

                        <?php if (isset($data->logo)) { ?>
                            <div class="justify-content-center photo-wrapper">
                                <img src="<?php echo site_url($data->logo); ?>" alt="" class="img-thumbnail" style="height:150px">
                            </div>
                        <?php } ?>
                    </div>
                    <div class="icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <!-- <a href="<= site_url('/admin/room/infaqroomcategory')?>" class="small-box-footer">
                            <= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a> -->
                </div>
            </div>
            <div>
                <div class="row">
                    <!-- List infaq_rooms -->
                    <div class="col table-responsive" id="infaq_room-list">
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