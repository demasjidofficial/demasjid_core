<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2>Fundraising</h2>
            </div>
            <div class="col-auto">
                <!--
                <a href="< ?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  < ?= lang('crud.add_new') ?></a>
                -->
            </div>
        </div>
    </x-page-head>

    <!--x-admin-box-->
    <div style="padding: 0 15px;" class="de_menu">
       
        <div class="row">
            <div class="col-md-3">
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Tipe Donasi</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_zakat"></i>
                    </div>
                    <a href="" class="small-box-footer">
                        Lihat detil <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.donaturcategory') ?></p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_donatur"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/donaturcategory')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p> <?= lang('crud.tim_fundraising') ?></p><!--<p>Overview</p>-->
                    </div>
                    <div class="icon">
                    <i class="icon-icon_zakat"></i>
                    </div>
                    <a href="" class="small-box-footer">
                    <?= lang('app.more_info')?><!--Lihat detil --><i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="small-box bg-success">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Jadwal Fundraising</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-calendar-alt"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/jadwalfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div> -->
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Target Fundraising</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p> <?= lang('crud.tim_fundraising') ?></p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_organisasi"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/timfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Menu</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Menu</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Menu</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Menu</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Menu</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Menu</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Menu</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Menu</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Menu</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Menu</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>Menu</p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_mapping"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/targetfundraising')?>" class="small-box-footer">
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
