<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('app.dt_donation') .' : ' . $campaignName ?></h2>
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
                        <h4><?= lang('app.total_donation')?></h4>
                            <h4>
                                <b>
                                    <?php echo $dataStats->totalDonation ?>
                                </b>
                            </h4>

                            <p>
                                Total donasi yang berhasil dikumpukan
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <a href="<?= site_url('/admin/baitulmal/donationcampaigncategory')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h4><?= lang('app.donation_amount')?></h4>
                            <h4><b><?php echo $dataStats->countDonation ?> Donasi</b>
                                <?php if (isset($data) && count($data)) : ?>
                                <?php endif ?>
                            </h4>

                            <p>
                                Terkumpul <?php echo $dataStats->countDonation ?> dari <?php echo $dataStats->totalCampaign ?> Kampanye
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
                        <a href="<?= site_url('/admin/baitulmal/donationcampaign')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                        <h4><?= lang('app.active_campaigns')?></h4>
                            <h4><b><?php echo $dataStats->totalActiveCampaign ?></b></h4>
                            <p>
                                Campaigns yang sedang active
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <a href="<?php echo route_to($baseRoute.'/new'); ?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div><!--/.row -->
            <div class="row mt-4">
                <h5 class="mb-2"><?= lang('app.dt_donation')?></h5>
            </div>
            <div class="row">
                <!-- List donasis -->
                <div class="col table-responsive" id="donasi-list">
                    <?php echo $this->include($viewPrefix.'\_table'); ?>
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
