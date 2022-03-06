<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<?= $this->section('styles') ?>
<style>
.qrcode-wrapper img { width:65%;margin-top:5%; }
.login-box-msg h5 { text-align:center !important; }
</style>
<?= $this->endSection() ?>

<!-- Register Area Start -->

<!--div class="section-padding10">
    <div class="card ml-10 mr-10 p-3">        
        <div class="row justify-content-center">
            <img src="< ?= $dataUri ?>" >

<div class="section-padding10 text-center text-bold">
    <h2>Alhamdulillah aktivasi berhasil</h2>
    <div class="card ml-10 mr-10 p-3">        
        <div class="justify-content-center">
            <img class="img-thumbnail" src="< ?= site_url($masjid->path_image) ?>" >
            <div>< ?= $masjid->name ?></div>            
            <div class="text-uppercase">< ?= $masjid->address ?> < ?= implode(' ',array_column($full,'nama')) ?></div>
        </div>
    </div>

    <div class="card ml-10 mr-10 p-3">        
        <div class="row justify-content-center">
            <div>ID: < ?= $masjid->code ?></div>
            <img src="< ?= $dataUri ?>" >
>>>>>>> develope
        </div>
    </div>
</div-->        


<div class="card">
    <div class="card-body login-card-body rounded25">
      <p class="login-box-msg">
          <h3 style="text-align:center;">Alhamdulillah<br/>aktivasi sudah terkirim</h3>
          <div>
            <p style="text-align:center;">Akses Demasjid akan dikirim ke email aktif Anda. Silakan pantau inbox Anda untuk mendapat info aktivasinya.</p>
          </div>
      </p>
      <div class="row justify-content-center photo-wrapper">
           <img class="img-thumbnail" src="<?= site_url($masjid->path_image) ?>" />
           <br/>
           <div>Masjid <?= $masjid->name ?></div>            
           <div class="text-uppercase"><?= $masjid->address ?> <?= implode(' ',array_column($full,'nama')) ?></div>
      </div>
      <div class="row justify-content-center qrcode-wrapper">
           <br/> 
           <div>ID Masjid: <?= $masjid->code ?></div> 
           <img src="<?= $dataUri ?>" />
      </div>
    </div>
</div>

<?= $this->endSection() ?>
