<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('app.dt_donation') .' : ' . $campaignName ?></h2>
            </div>
        </div>
    </x-page-head>

    <x-admin-box>
        <div>
            <div class="row">
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                        <!-- <h3>&nbsp;</h3> -->
                        <h4><?= lang('app.total_donation')?></h4>
                            <h4>
                                <b id="totalDonation">
                                    <?php echo local_currency($dataStats->totalDonation) ?>
                                </b>
                            </h4>

                            <p>
                                Total donasi yang berhasil dikumpukan
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <!-- <a href="<= site_url('/admin/baitulmal/donationcampaigncategory')?>" class="small-box-footer">
                            <= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h4><?= lang('app.donation_amount')?></h4>
                            <h4><b id="countDonation"><?php echo $dataStats->countDonation ?> Donasi</b>
                                <?php if (isset($data) && count($data)) : ?>
                                <?php endif ?>
                            </h4>

                            <p>
                                Terverifikasi dari <?php echo $dataStats->totalInDonation ?> donasi
                            </p>
                            
                            <?php if (isset($data->logo)) { ?>
                            <div class="justify-content-center photo-wrapper">
                                <img src="<?php echo site_url($data->logo); ?>" alt="" class="img-thumbnail" style="height:150px">
                            </div>
                            <?php } ?>

                        </div>
                        <div class="icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <!-- <a href="<= site_url('/admin/baitulmal/donationcampaign')?>" class="small-box-footer">
                            <= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                        <h4><?= lang('app.active_campaigns')?></h4>
                            <h4><b><?php echo $dataStats->totalActiveCampaign ?></b></h4>
                            <p>
                                Kampanye
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <!-- <a href="<php echo route_to($baseRoute.'/new'); ?>" class="small-box-footer">
                            <= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                        </a> -->
                    </div>
                </div>
            </div><!--/.row -->
            <div class="row mt-4">
                <h5 class="mb-2"><?= lang('app.dt_donation')?></h5>
            </div>
            <div class="row">
                <!-- List donasis -->
                <div class="col table-responsive" id="donasi-list">
                    <?php echo $this->include($viewPrefix.'\_table'); ?>
                    <?php echo $pager->links() ?>
                </div>
            </div>
        </div>

    </x-admin-box>

<div class="modal fade" id="donationDetailModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-bluesky">
                <h5 class="modal-title" >Detail Donasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-sm-2">Invoice</label>
                    <div class="col-sm-10">
                        :
                       <span id="detail-no_inv" class="font-weight-bold"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Donatur</label>
                    <div class="col-sm-10">
                        :
                       <span id="detail-name"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">No Hp</label>
                    <div class="col-sm-10">
                        :
                       <span id="detail-no_hp"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Tujuan Rekening</label>
                    <div class="col-sm-10 admin-donasi-list">
                        :
                        <img id="detail-path_logo">
                        <span id="detail-payment_rek_name"></span>
                        <span> - </span>
                        <span id="detail-payment_rek_no" class="font-weight-bold"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Donasi</label>
                    <div class="col-sm-10">
                        :
                       <span id="detail-dana_in" class="font-weight-bold"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Tanggal</label>
                    <div class="col-sm-10">
                        :
                       <span id="detail-date"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Bukti Transfer</label>
                    <div class="col-sm-10">
                        :
                        <img id="detail-path_image" style="width: 100%;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Status</label>
                    <div class="col-sm-10">
                        :
                       <span id="detail-state"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>

    function local_currency(data) {
        return (parseInt(data).toLocaleString('en-US', {
            style: 'currency',
            currency: 'IDR',
            })
            .replace('IDR', 'Rp ')
            .replace('.00', '')
            .replace(',', '.'));                    
    };

    $('[data-toggle=confirmation]').confirmation({
        onConfirm: function(){
            let _this = $(this);
            let id = _this.attr('id');
            let state = (_this.attr('data-state') == 1) ? 0 : 1;
            let dana_in = _this.attr('data-danain');
            let campaign_id = _this.attr('data-campaign');
            let url = "<?php echo base_url()?>" + "/api/update_donasi_state/";
            $.ajax({
                url: url,
                type: 'POST',
                data: { id, state, dana_in, campaign_id },
                success: function(res) {
                    _this.siblings().html((res.state == 1) ? "Received" : "Waiting");
                    _this.attr('data-state', res.state);
                    $('#countDonation').html(res.donation_count);
                    $('#totalDonation').html(local_currency(res.campaign_collected))
                    return console.log(res);
                },
                error : function(res) {
                    console.log('error');
                    return alert('Error');
                }
            });   
        }
    }); 

    function sendChatTo(text) {
        let url = "https://wa.me/62" + text;
        window.open(url, '_blank').focus();
    }

    function viewDetail(id) {
        let url = "<?php echo base_url()?>" + "/api/donation/"+id;
        $.ajax({
            url: url,
            type: 'GET',
            data: { id },
            success: function(res) {
                $('#donationDetailModal').modal('show');
                $('#detail-no_inv').html(res.no_inv);
                $('#detail-name').html(res.name);
                $('#detail-no_hp').html(res.no_hp);
                $('#detail-dana_in').html(local_currency(res.dana_in));
                $('#detail-payment_rek_name').html(res.payment_rek_name);
                $('#detail-payment_rek_no').html(res.payment_rek_no);
                $('#detail-date').html(res.date.split('-').reverse().join('-'));
                $('#detail-state').html((res.state == 1)? "Received" : ((res.state == 0)? "Waiting" : "Confirmed"));
                $('#detail-path_logo').attr('src', "/" + (res.bank_path_logo || res.paymentgateway_path_logo) );
                $('#detail-path_image').attr('src', (res.path_image) ? ("/" + res.path_image ): null );

                return console.log(res);
            },
            error : function(res) {
                console.log('error');
                return alert('Error');
            }
        });  
    }

</script>
<?php $this->endSection(); ?>
