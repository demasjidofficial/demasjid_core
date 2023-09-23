<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <h2><?= lang('app.campaign') ?></h2>
            </div>
        </div>
    </x-page-head>

    <!--x-admin-box-->
    <div style="padding: 0 15px;">
        <div class="row">
            <div class="col-md-3">
                <div class="small-box bg-info">
                    <div class="inner">
                    <!-- <h3>&nbsp;</h3> -->
                    <h4><?= lang('app.total_donation')?></h4>
                        <h3>
                            <?php
                                echo "0000";
?>
                        </h3>

                        <p>
                            Total donasi yang berhasil dikumpukan
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/infaqshodaqohcategory')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4><?= lang('app.donation_amount')?></h4>
                        <h3>00 Donasi</h3>

                        <p>
                            Terkumpul 00 dari 00 Donasi
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
                    <a href="<?= site_url('/admin/baitulmal/infaqshodaqoh')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                    <h4><?= lang('app.active_campaigns')?></h4>
                        <h3>00</h3>

                        <p>
                            Campaigns yang sedang active
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <a href="<?= site_url('/admin/baitulmal/infaqshodaqoh')?>" class="small-box-footer">
                        <?= lang('app.more_info')?> <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div><!--/.row -->
        <div class="row mt-4">
            <h5 class="mb-2"><?= lang('app.dt_donation')?></h5>
            
            <div class="col">
                <div class="d-flex justify-content-end">
                    <div class="p-2">
                        <a class="btn btn-success" href="<?= site_url('/admin/baitulmal/campaigns')?>" role="button">
                            <i class="fas fa-plus"></i> <?= lang('crud.add_new') ?>
                        </a>
                        <!-- <button type="button" id="btnModal" class="btn btn-success" data-bs-toggle="modal" data-target="#addcampaigns_modal">
                            <i class="fas fa-plus"></i> add new campaign
                        </button> -->
                    </div>
                    <div class="p-2">
                        <form class="d-flex" role="search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
            
            <table class="table table-striped mt-2">
                <thead class="table-success text-center">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Campaigns</th>
                    <th scope="col">Target</th>
                    <th scope="col">Terkumpul</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Campaigner</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            img
                        </td>
                        <td>Pemabangunan Menara Masjid</td>
                        <td>Rp 10.000.000</td>
                        <td>Rp 5.000.000</td>
                        <td>21/06/2022</td>
                        <td>Demasjid</td>
                        <td>
                            <select class="form-select" aria-label="shortcode">
                                <option selected>Shortcode</option>
                                <option value="1">Card Campaign</option>
                                <option value="2">List Campaign</option>
                                <option value="3">Total Terkumpul</option>
                                <option value="4">Jumlah Donasi</option>
                                <option value="5">Progres Donasi</option>
                                <option value="6">Info Campaign</option>
                                <option value="7">Info Update</option>
                                <option value="8">List Donatur</option>
                            </select>

                            <select class="form-select" aria-label="option">
                                <option selected>Option</option>
                                <option value="1">Edit Campaign</option>
                                <option value="2">Add Info Update</option>
                                <option value="3">Data Donasi</option>
                                <option value="4">Delete</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    <!--/x-admin-box-->
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
    var myBtn = document.getElementById('btnmModal');
    var myModal = document.getElementById('addcampaigns_modal');

    myBtn.onclick = function() {
        modal.style.display = "block";
    }
    window.onclick = function(event) {
        if (event.target == myBtn) {
            modal.style.display = "none";
        }
    }
</script>
<?php $this->endSection(); ?>
