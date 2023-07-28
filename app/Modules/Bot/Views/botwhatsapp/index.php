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
                    <iframe id="iframe-wa" runat="server" scrolling="no" width="800px" height="500px" src=""></iframe>
                </div>
            </div>
        </div>

    </x-admin-box>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
    $(function(){
        $('#iframe-wa').attr('src','https://easywa.demasjid.id/<?= $number_whatsapp  ?>/panel');
    })
</script>
<?php $this->endSection(); ?>
