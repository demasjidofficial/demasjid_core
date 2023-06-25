<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<?= $this->section('styles') ?>
<style>
.qrcode-wrapper img { width:65%;margin-top:5%; }
.login-box-msg h5 { text-align:center !important; }
</style>
<?= $this->endSection() ?>

<div class="card">
    <div class="card-body login-card-body rounded25">
      <p class="login-box-msg">
          <h3 style="text-align:center;">Alhamdulillah<br/>permintaan aktivasi sudah terkirim</h3>
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
