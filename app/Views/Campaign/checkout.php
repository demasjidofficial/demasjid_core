<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<!--? About Law Start-->
<section class="about-low-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10">
                <div class="single-cases mb-40">
                    <div class="cases-img">
                        <img style="width:80%" src="/<?php echo $donation_campaigns["path_image"]?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        Donasi Terbaik Anda :
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <button type="button" name="nominal_helper" value=10000 class="btn btn-primary">Rp. 10 Rb</button>
                        <button type="button" name="nominal_helper" value=100000 class="btn btn-primary">Rp. 100 Rb</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" name="nominal_helper" value=20000 class="btn btn-primary">Rp. 20 Rb</button>
                        <button type="button" name="nominal_helper" value=0 class="btn btn-primary">Nominal Lainnya</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" name="nominal_helper" value=50000 class="btn btn-primary">Rp. 50 Rb</button>
                    </div>
                </div>
                <div class="row">
                    <div class="md-12" style="width:100%">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="dana_in" id="nomimal" placeholder="Masukkan nominal">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="paymentmethod_id" id="metoda" placeholder="Metoda Pembayaran">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="no_hp" id="no_telp" placeholder="No Wa / Handphone">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="textarea" class="form-control" name="pesan" id="pesan" placeholder="Tuliskan Pesan    ">
                                </div>

                            <div class="text-end py-3">
                                <button type="submit" id="submitbtn" value=<?php echo $donation_campaigns["id"] ?> class="btn btn-primary btn-lg"><i class="fas fa-save"></i> <?= lang('crud.donasi') ?></button>
                            </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?php $this->section('scripts'); ?>

<script type="text/javascript">
    $(function () {  
        $('button[name=nominal_helper]').click(function() {
            $('input[name=dana_in]').val($(this).val());
        });

        $('#submitbtn').click(function(){
            let url = "<?php echo base_url()?>" + "/api/senddonation",
                dana_in = parseInt($('input[name=dana_in]').val()) + Math.floor(Math.random() * 500),
                paymentmethod_id = $('input[name=paymentmethod_id]').val(),
                name = $('input[name=name]').val(),
                no_hp = $('input[name=no_hp]').val(),
                email = $('input[name=email]').val(),
                campaign_id = $(this).val(),
                pesan = $('input[name=pesan]').val();


            if (dana_in && name && name && no_hp && email) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        'dana_in': dana_in,
                        'paymentmethod_id' : paymentmethod_id,
                        'name' : name,
                        'no_hp' : no_hp,
                        'email' : email,
                        'pesan' : pesan,
                        'campaign_id' : campaign_id,
                        'date' : new Date().toISOString().slice(0, 10)
                    },
                    success: function(res) {
                        let data = JSON.parse(res);
                        return window.location = '/id/instructionofpayment/'+data.id;
                    },
                    error : function(res) {
                        return console.log(res);
                    }
                });   
            }
            else {
                return alert('Silahkan isi form seluruhnya');
            }


            
        })
    });
</script>

<?php $this->endSection(); ?>
