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
        <h5 class="mb-2"><?= lang('crud.transactions')?></h5>
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
                    <a href="<?= site_url('/admin/pesantren/chartofaccount')?>" class="small-box-footer">
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
                    <a href="<?= site_url('/admin/pesantren/accountbalance')?>" class="small-box-footer">
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
                    <a href="<?= site_url('/admin/pesantren/balance')?>" class="small-box-footer">
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
                        <a href="<?= site_url('/admin/pesantren/reportbalancesheet')?>" class="small-box-footer">
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
                        <a href="<?= site_url('/admin/pesantren/reportcashflow')?>" class="small-box-footer">
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
                        <a href="<?= site_url('/admin/pesantren/reportdonation')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-2 col-sm-3">
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h3>&nbsp;</h3>
                        <p><?= lang('crud.report_generalledger')?></p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-book"></i>
                        </div>
                        <a href="<?= site_url('/admin/pesantren/reportgeneralledger')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div><!--/.row -->
    </div>
    <!--/x-admin-box-->
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script></script>
<?php $this->endSection(); ?>
