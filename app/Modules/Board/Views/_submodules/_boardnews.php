<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.board_news') ?></h2>
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
        <!-- <h5 class="mb-2">< ?= lang('crud.administration')?></h5> -->
        <div class="row">
            <div class="col-md-3">
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.board_newsbg')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-tv"></i>
                    </div>
                    <a href="<?= site_url('/admin/board/newsbg')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('crud.board_newsruntext')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-comment"></i>
                    </div>
                    <a href="<?= site_url('/admin/board/newsrunningtext')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-success">
                    <div class="inner">
                    <h3>&nbsp;</h3>
                    <p><?= lang('app.visit_site')?></p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-link nav-icon"></i>
                    </div>
                    <a href="<?= site_url('/board/news_viewtv')?>" target="_blank" class="small-box-footer">
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
