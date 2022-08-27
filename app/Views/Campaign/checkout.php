<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<!--? About Law Start-->
<section class="about-low-area section-padding60">
    <div class="container">
        <div class="row mb-100">
            <div class="col-lg-6 col-md-12 mb-40">
                <div class="single-cases pr-5 pl-5">
                    <div class="cases-img">
                        <img src="/<?php echo $donation_campaigns["path_image"]?>" alt="">
                    </div>
                </div>
                <div class="text-center checkout-info">
                    <p><i class="fa fa-map-pin" aria-hidden="true"></i> <?php echo $masjid_profile['name']?>, <?php echo ($masjid_profile['address']) ?></p>
                    <p>Anda akan berdonasi pada program : </p>
                    <h1><?php echo $donation_campaigns["name"]?></h1>    
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 mb-15">
                                <button type="button" name="nominal_helper" value=10000 class="btn btn-primary borrad-10 btn-lg btn-pd2010 mr-15">Rp. 10 Rb</button>
                                <button type="button" name="nominal_helper" value=20000 class="btn btn-primary borrad-10 btn-lg btn-pd2010 mr-15">Rp. 20 Rb</button>
                                <button type="button" name="nominal_helper" value=50000 class="btn btn-primary borrad-10 btn-lg btn-pd2010 mr-15">Rp. 50 Rb</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-15">
                                <button type="button" name="nominal_helper" value=100000 class="btn btn-primary borrad-10 btn-lg btn-pd2010 mr-15">Rp. 100 Rb</button>
                                <button type="button" name="nominal_helper" value=0 class="btn btn-primary borrad-10 btn-lg btn-pd2010 mr-15">Nominal Lainnya</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row section-padding24  mb-100 ">
                    <div class="col-md-12">
                        <form class="row g-3 needs-validation" role="form" id="contact-form" >
                            <div class="col-md-12 mb-3">
                                <label for="dana_in" class="form-label d-none">dana_in</label>
                                <input type="text" class="form-control h-45" name="dana_in" id="dana_in" placeholder="Masukkan nominal" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="paymentmethod_id" class="form-label d-none">paymentmethod_id</label>
                                <input type="text" data-toggle="modal" data-target="#paymentMethodList" class="form-control h-45" name="paymentmethod_id" id="paymentmethod_id" placeholder="Metoda Pembayaran" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="name" class="form-label d-none">Nama</label>
                                <input type="text" class="form-control h-45" name="name" id="name" placeholder="Nama" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="no_hp" class="form-label d-none">No Hp</label>
                                <input type="text" class="form-control h-45" name="no_hp" id="no_hp" placeholder="No Hp" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="email" class="form-label d-none">email</label>
                                <input type="email" class="form-control h-45" name="email" id="email" placeholder="email" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="pesan" class="form-label d-none">pesan</label>
                                <input type="textarea" class="form-control h-45" name="pesan" id="pesan" placeholder="pesan">
                            </div>
                            <div class="col-md-12 mt-30">
                                <div class="btn-donation-wrapper" style="text-align:center;">
                                    <button type="submit" id="submitbtn" value=<?php echo $donation_campaigns["id"] ?>  class="btn btn-donation borrad-10">Donasi Sekarang</button>
                                </div>
                            </div>
                        </form>                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="paymentMethodList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-bluesky">
        <h5 class="modal-title" id="exampleModalLongTitle">METODA PEMBAYARAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body paymentlist">
        <?php 
            if (isset($paymentListBank) && count($paymentListBank)) {
            ?>
                <h5 class="paymentheader">Transfer Bank (Verifikasi Manual 1x24jam)</h5>
                <ul>
                    <?php
                        foreach ($paymentListBank as $bank) {
                        ?>
                             <li name="paymentList" data-id=<?php echo $bank['id']?>>
                                <img src="<?php echo site_url().$bank['path_logo'] ?>">
                                <span><?php echo $bank['name']?> : <?php echo $bank['rek_name']?></span>
                            </li>

                        <?php
                        }
                    ?>
                </ul>
            <?php
            }

            if (isset($paymentListPayGat) && count($paymentListPayGat)) {
            ?>
                <h5 class="paymentheader">Payment Gateway</h5>
                <ul>
                    <?php
                        foreach ($paymentListPayGat as $paygat) {
                        ?>
                             <li name="paymentList" data-id=<?php echo $paygat['id']?>>
                                <img src="<?php echo site_url().$paygat['path_logo'] ?>">
                                <span><?php echo $paygat['name']?> : <?php echo $paygat['rek_name']?></span>
                            </li>

                        <?php
                        }
                    ?>
                </ul>
            <?php
            }
        ?>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?php $this->section('scripts'); ?>

<script type="text/javascript">
    $(function () {  
        $('button[name=nominal_helper]').click(function() {
            $('input[name=dana_in]').val($(this).val());
        });

        $('li[name=paymentList]').click(function(){
            $('input[name=paymentmethod_id]')
            .data('id', $(this).data('id'))
            .val($(this).find('span').html());
            $('#paymentMethodList').modal('hide');
        });

        $('#submitbtn').click(function(){
            let form = $("#contact-form")            
            if (form[0].checkValidity() !== false) {
                event.preventDefault();
                event.stopPropagation();

                let url = "<?php echo base_url()?>" + "/api/senddonation",
                dana_in = parseInt($('input[name=dana_in]').val()) + Math.floor(Math.random() * 500),
                paymentmethod_id = $('input[name=paymentmethod_id]').data('id'),    
                name = $('input[name=name]').val(),
                no_hp = $('input[name=no_hp]').val(),
                email = $('input[name=email]').val(),
                campaign_id = $(this).val(),
                pesan = $('input[name=pesan]').val();

                if (!paymentmethod_id) {
                    return alert('Error in choose Payment Gateway');
                }

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        dana_in,
                        paymentmethod_id,
                        name,
                        no_hp,
                        email,
                        pesan,
                        campaign_id,
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
        });
    });
</script>

<?php $this->endSection(); ?>
