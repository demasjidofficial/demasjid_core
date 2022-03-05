<?= $this->extend('master') ?>

<?= $this->section('main') ?>

<!-- Register Area Start -->
<div class="section-padding10 text-center text-bold">
    <h2>Alhamdulillah aktivasi berhasil</h2>
    <div class="card ml-10 mr-10 p-3">        
        <div class="justify-content-center">
            <img class="img-thumbnail" src="<?= site_url($masjid->path_image) ?>" >
            <div><?= $masjid->name ?></div>            
            <div class="text-uppercase"><?= $masjid->address ?> <?= implode(' ',array_column($full,'nama')) ?></div>
        </div>
    </div>

    <div class="card ml-10 mr-10 p-3">        
        <div class="row justify-content-center">
            <div>ID: <?= $masjid->code ?></div>
            <img src="<?= $dataUri ?>" >
        </div>
    </div>
</div>        

<?= $this->endSection() ?>
