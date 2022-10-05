<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2>Fundraising</h2>
            </div>
            <div class="col-auto">
             
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
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.target_fundraising') ?></p>
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
                    <p> <?= lang('crud.tugas_tim') ?></p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_organisasi"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/timstaff')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p> <?= lang('crud.overview_manager') ?></p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_organisasi"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/overview_manager')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p> <?= lang('app.overview_spv') ?></p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_organisasi"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/overview_spv')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p> <?= lang('app.overview_tim') ?></p>
                    </div>
                    <div class="icon">
                    <i class="icon-icon_organisasi"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/overview_tim')?>" class="small-box-footer">
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
