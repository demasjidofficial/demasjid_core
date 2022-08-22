<?php $this->extend('master_pdf'); ?>

<?php $this->section('main'); ?>
<div class="row">
            <!-- List balances -->
            <div class="col table-responsive" id="donatur-list">
                <?php echo $this->include($viewPrefix.'\_table'); ?>
            </div>
        </div><!--/.row -->
<?php $this->endSection(); ?>