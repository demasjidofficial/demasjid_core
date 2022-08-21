<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.masters') ?></h2>
            </div>
            <div class="col-auto">
                <!--
                <a href="< ?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  < ?= lang('crud.add_new') ?></a>
                -->
            </div>
        </div>
    </x-page-head>

    <!--x-admin-box-->

    <div style="padding: 0 15px !important;">
        <h5 class="mb-2"><?= lang('crud.administration')?></h5>
        <div class="row">
            <div class="col-2 col-sm-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.zone')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-map"></i>
                    </div>
                    <a href="<?= site_url('/admin/masjid/wilayah')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-2 col-sm-3">
                <div class="small-box bg-purple">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.job_position')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-file"></i>
                    </div>
                    <a href="<?= site_url('/admin/masjid/jabatan')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-2 col-sm-3">
                <div class="small-box bg-secondary">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.muadzin')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-file"></i>
                    </div>
                    <a href="<?= site_url('/admin/masjid/muadzin')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-2 col-sm-3">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>&nbsp;</h3>
                        <p><?= lang('crud.imam_mubaligh')?></p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-users"></i>
                        </div>
                        <a href="<?= site_url('/admin/masjid/imam')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div><!--/.row -->

        <div class="row" style="padding: 0 15px;">
            <div class="col-2 col-sm-3">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>&nbsp;</h3>
                        <p><?= lang('crud.member')?></p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-users"></i>
                        </div>
                        <a href="<?= site_url('/admin/masjid/member')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 col-sm-3">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>&nbsp;</h3>
                        <p><?= lang('crud.donatur_type')?></p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-users"></i>
                        </div>
                        <a href="<?= site_url('/admin/masjid/tipedonatur')?>" class="small-box-footer">
                            <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>


            </div>
        </div><!--/.row -->
    </div>

    <!--/x-admin-box-->
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script></script>
<?php $this->endSection(); ?>
