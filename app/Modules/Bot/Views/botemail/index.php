<?php $this->extend('master'); ?>

<?php $this->section('style'); ?>
<style>
iframe#odoo-ee-pricing #wrapwrap.o_odoo_pricing header#top {display:none !important;}
</style>
<?php $this->endSection(); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('crud.bot_email') ?></h2>
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
                    <!--iframe width="560" height="315" src="https://www.youtube.com/embed/n-f8B76Hozk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe-->
                    <iframe id="odoo-ee-pricing" style="width:100%;height:470px" src="https://www.odoo.com/id_ID/pricing" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </x-admin-box>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
    var iframe_odooeepricing = document.getElementById("odoo-ee-pricing");
    var innerDoc = iframe_odooeepricing.contentDocument || iframe_odooeepricing.contentWindow.document;

    console.log(innerDoc.body);
    
    var elmnt = innerDoc.contentWindow.document.getElementById("#top_menu")[0];
    elmnt.style.display = "none";

    /*
    $(function(){
        $('iframe .o_odoo_pricing header#top').css('display','none !important');
    })
    */
</script>
<?php $this->endSection(); ?>
