<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.bmdonationcampaign') ?></h2>
            </div>
            <!-- <div class="col-auto">
                <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> </a>
            </div> -->
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
                                <b id="totalDonation">
                                    <?php echo local_currency($dataStats->totalDonation) ?>
                                </b>
                            </h4>

                            <p>
                                Total donasi yang berhasil dikumpukan
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <!-- <a href="<= site_url('/admin/baitulmal/donationcampaigncategory')?>" class="small-box-footer">
                            <= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h4><?= lang('app.donation_amount')?></h4>
                            <h4><b id="countDonation"><?php echo $dataStats->countDonation ?> Donasi</b>
                                <?php if (isset($data) && count($data)) : ?>
                                <?php endif ?>
                            </h4>

                            <p>
                                Terverifikasi dari <?php echo $dataStats->totalInDonation ?> donasi
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
                        <!-- <a href="<= site_url('/admin/baitulmal/donationcampaign')?>" class="small-box-footer">
                            <= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                        <h4><?= lang('app.active_campaigns')?></h4>
                        <h4><b><?php echo $dataStats->totalActiveCampaign ?></b></h4>
                            <p>
                                Kampanye
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <!-- <a href="<php echo route_to($baseRoute.'/new'); ?>" class="small-box-footer">
                            <= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a> -->
                    </div>
                </div>
            </div><!--/.row -->
            <div class="row mt-4">
                <h5 class="mb-2"><?= lang('app.dt_donation')?></h5>
                
                <div class="col">
                    <div class="d-flex justify-content-end">
                        <div class="p-2">
                            <a class="btn btn-sm btn-success" href="<?php echo route_to($baseRoute.'/new'); ?>" role="button">
                                <i class="fas fa-plus"></i> <?= lang('crud.add_new') ?>
                            </a>
                            <a class="btn btn-sm btn-primary" href="/admin/baitulmal/donationtype" role="button">
                                <i class="fas fa-plus"></i> <?= lang('crud.type') ?>
                            </a>
                            <!-- <button type="button" id="btnModal" class="btn btn-success" data-bs-toggle="modal" data-target="#addcampaigns_modal">
                                <i class="fas fa-plus"></i> add new campaign
                            </button> -->
                        </div>
                        <!-- <div class="p-2">
                            <form class="d-flex" role="search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- List bmdonationcampaigns -->
                <div class="col table-responsive" id="bmdonationcampaign-list">
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
