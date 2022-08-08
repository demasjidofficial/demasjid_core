<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.finances') ?></h2>
            </div>
            <div class="col-auto">
                <!--
                <a href="< ?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  < ?= lang('crud.add_new') ?></a>
                -->
            </div>
        </div>
    </x-page-head>

    <!--x-admin-box-->
    <div style="padding: 0 15px;">
        <h5 class="mb-2"><?= lang('crud.administration')?></h5>
        <div class="row">
            <div class="col-3 col-sm-3">
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.chart_of_account')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-file"></i>
                    </div>
                    <a href="<?= site_url('/admin/masjid/chartofaccount')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-3 col-sm-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.account_balance')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-file"></i>
                    </div>
                    <a href="<?= site_url('/admin/masjid/accountbalance')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-3 col-sm-3">
                <div class="small-box bg-purple">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.balance')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-calculator"></i>
                    </div>
                    <a href="<?= site_url('/admin/masjid/balance')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div><!--/.row -->
        <h5 class="mb-2"><?= lang('crud.reports')?></h5>
        <div class="row">
            <div class="col-2 col-sm-3">
                    <div class="small-box bg-primary">
                        <div class="inner">
                        <h3>&nbsp;</h3>
                        <p><?= lang('crud.report_balancesheet')?></p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-book"></i>
                        </div>
                        <a href="<?= site_url('/admin/masjid/reportbalancesheet')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-2 col-sm-3">
                    <div class="small-box bg-danger">
                        <div class="inner">
                        <h3>&nbsp;</h3>
                        <p><?= lang('crud.report_cashflow')?></p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-book"></i>
                        </div>
                        <a href="<?= site_url('/admin/masjid/reportcashflow')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-2 col-sm-3">
                    <div class="small-box bg-secondary">
                        <div class="inner">
                        <h3>&nbsp;</h3>
                        <p><?= lang('crud.report_donation')?></p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-book"></i>
                        </div>
                        <a href="<?= site_url('/admin/masjid/reportdonation')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-2 col-sm-3">
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h3>&nbsp;</h3>
                        <p><?= lang('crud.report_journal')?></p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-book"></i>
                        </div>
                        <a href="<?= site_url('/admin/masjid/reportjournal')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
        </div><!--/.row -->
        <div class="row">
            <div class="col-2 col-sm-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.report_generalledger')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-book"></i>
                    </div>
                    <a href="<?= site_url('/admin/masjid/reportgeneralledger')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-2 col-sm-3">
                <div class="small-box bg-purple">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.report_cashbankmutation')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-book"></i>
                    </div>
                    <a href="<?= site_url('/admin/masjid/reportcashbankmutation')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/x-admin-box-->
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script></script>
<?php $this->endSection(); ?>
