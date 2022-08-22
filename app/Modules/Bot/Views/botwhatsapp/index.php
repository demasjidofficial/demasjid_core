<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.bot_whatsapp') ?></h2>
            </div>
            <!--div class="col-auto">
                <a href="< ?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  < ?= lang('bmdonationtype') ?></a>
            </div-->
        </div>
    </x-page-head>

    <x-admin-box>
        <div>
            <div class="row">
                <div class="col-md-12">
                    <!--iframe src="http://easywa.demasjid.com" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe-->

                        <iframe id="iframe-wa" runat="server" scrolling="no" width="600px" height="400px" src=""></iframe>
                </div>
            </div>
        </div>

    </x-admin-box>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
    $(function(){
        $('#iframe-wa').attr('src','http://easywa.demasjid.com');
    })
</script>
<?php $this->endSection(); ?>
