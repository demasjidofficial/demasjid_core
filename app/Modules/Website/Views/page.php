<?= $this->extend('master') ?>

<?= $this->section('main') ?>
<div class="mt-60 mb-100">
<?php 
    if (isset($sections) && count($sections)) {
        foreach ($sections as $item) : ?>
        <section class="about-low-area">
            <div class="container">
                <?php echo $item['content']; ?>
            </div>
        </section>
    <?php 
        endforeach; 
    }; 
?>

    <section class="about-low-area">
        <div class="container">
            <?php echo $page['content']; ?>
        </div>
    </section>
</div>

<?= $this->endSection() ?>
