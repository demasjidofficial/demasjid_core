<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.campaigns') ?></h2>
            </div>
            <div class="col-auto">
                <a href="<?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  <?= lang('crud.add_new') ?></a>
            </div>
        </div>
    </x-page-head>

    <x-admin-box>
        <div>
            <div class="row">
                <div class="col-md-3">
                    <div class="small-box bg-info">
                        <div class="inner">
                        <!-- <h3>&nbsp;</h3> -->
                        <h4><?= lang('app.total_donation')?></h4>
                            <h3>
                                <?php  
                                    echo "Rp 00.000.000";
                                ?>
                            </h3>

                            <p>
                                Total donasi yang berhasil dikumpukan
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <a href="<?= site_url('/admin/baitulmal/infaqshodaqohcategory')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h4><?= lang('app.donation_amount')?></h4>
                            <h3>00 Donasi
                                <?php if (isset($data) && count($data)) : ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="selects[]" class="form-check">
                                        </td>
                                        <?php echo esc($item->num_rows('dana_in')) ?>
                                    </tr>
                                <?php endif ?>
                            </h3>

                            <p>
                                Terkumpul 00 dari 00 Donasi
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
                        <a href="<?= site_url('/admin/baitulmal/infaqshodaqoh')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="small-box bg-warning">
                        <div class="inner">
                        <h4><?= lang('app.active_campaigns')?></h4>
                            <h3>00</h3>

                            <p>
                                Campaigns yang sedang active
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <a href="<?= site_url('/admin/baitulmal/infaqshodaqoh')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div><!--/.row -->
            <div class="row mt-4">
                <h5 class="mb-2"><?= lang('app.dt_donation')?></h5>
                
                <div class="col">
                    <div class="d-flex justify-content-end">
                        <div class="p-2">
                            <a class="btn btn-success" href="<?= site_url('/admin/baitulmal/campaigns')?>" role="button">
                                <i class="fas fa-plus"></i> <?= lang('crud.add_new') ?>
                            </a>
                            <!-- <button type="button" id="btnModal" class="btn btn-success" data-bs-toggle="modal" data-target="#addcampaigns_modal">
                                <i class="fas fa-plus"></i> add new campaign
                            </button> -->
                        </div>
                        <div class="p-2">
                            <form class="d-flex" role="search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <!-- List campaignss -->
                <div class="col table-responsive" id="campaigns-list">
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
