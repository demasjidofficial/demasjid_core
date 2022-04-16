<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.schedules') ?></h2>
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
                    <p><?= lang('crud.schedules_lessonweekly')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-clock"></i>
                    </div>
                    <a href="<?= site_url('/admin/tpq/schedulelessonweekly')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-3 col-sm-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.schedules_academiccalendar')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-clock"></i>
                    </div>
                    <a href="<?= site_url('/admin/tpq/scheduleacademiccalendar')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-3 col-sm-3">
                <div class="small-box bg-purple">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.schedules_lessontest')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-clock"></i>
                    </div>
                    <a href="<?= site_url('/admin/tpq/schedulelessontest')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-3 col-sm-3">
                <div class="small-box bg-success">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.schedules_lessontestsemester')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-clock"></i>
                    </div>
                    <a href="<?= site_url('/admin/tpq/schedulelessontestsemester')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div><!--/.row -->
        
        <!--h5 class="mb-2">< ?= lang('crud.administration')?></h5--
        <div class="row">
            
            < !--
            <div class="col-3 col-sm-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>< ?= lang('crud.schedules_academiccalendar')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-clock"></i>
                    </div>
                    <a href="< ?= site_url('/admin/tpq/scheduleacademiccalendar')?>" class="small-box-footer">
                        < ?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-3 col-sm-3">
                <div class="small-box bg-purple">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p>< ?= lang('crud.schedules_lessontest')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-clock"></i>
                    </div>
                    <a href="< ?= site_url('/admin/tpq/schedulelessontest')?>" class="small-box-footer">
                        < ?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            --
        </div>< !--/.row -->
    </div>
    <!--/x-admin-box-->
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script></script>
<?php $this->endSection(); ?>
