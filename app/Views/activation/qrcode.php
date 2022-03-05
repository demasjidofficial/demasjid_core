<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<?= $this->section('styles') ?>
<style>
.qrcode-wrapper img { display:block;margin:auto;width:65%;margin-top:5%; }
.login-box-msg h5 { text-align:center !important; }
</style>
<?= $this->endSection() ?>

<!-- Register Area Start -->
<!--div class="section-padding10">
    <div class="card ml-10 mr-10 p-3">        
        <div class="row justify-content-center">
            <img src="< ?= $dataUri ?>" >
        </div>
    </div>
</div-->        


<div class="card">
    <div class="card-body login-card-body rounded25">
      <p class="login-box-msg">
          <h3 style="text-align:center;">Alhamdulillah<br/>aktivasi sudah terkirim</h3>
          <br/>
          <h5 style="text-align:center;">Akses Demasjid akan dikirim ke email aktif Anda. Silakan pantau inbox Anda untuk mendapat info aktivasinya.</h5>
      </p>
      <div class="qrcode-wrapper">
           <img src="<?= $dataUri ?>" >
      </div>
    </div>
</div>

<?= $this->endSection() ?>
