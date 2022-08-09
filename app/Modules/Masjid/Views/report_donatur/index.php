<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
<x-page-head>
    <div class="row">
        <div class="col">
            <a href="#" class="back" onclick="history.back()">&larr; <?= lang('crud.back') ?></a>
            <h4><?= lang('crud.report_donation') ?></h4>
        </div>        
    </div>
</x-page-head>

<x-admin-box>
    <div>
        <div class="row">
            <form action="<?php echo $actionUrl; ?>" method="get">
                <fieldset>
                    <div class="row mb-3">
                        <?= form_label(lang('crud.period'),'',['for' => 'period', 'class' => 'col-form-label col-auto']) ?>
                        <div class="col-auto">
                            <?= form_input('period', old('period', $period ?? ''), "class='form-control date' required readonly") ?>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>
                            <?= lang('app.search') ?>&nbsp;&nbsp;&nbsp;</button>
                            <button type="submit" name="download" class="btn btn-danger" value="pdf"> <i class="fas fa-file-pdf"></i>
                                <?= lang('app.download_pdf') ?>
                            </button>
                            <button type="submit" name="download" class="btn btn-success" value="xls"> <i class="fas fa-file-excel"></i>
                                <?= lang('app.download_xls') ?>
                            </button>
                        </div>
                    </div>
                </fieldset>                
            </form>
        </div><!--/.row -->
        <div class="row">
            <!-- List balances -->
            <div class="col table-responsive" id="donatur-list">
                <?php echo $this->include($viewPrefix.'\_table'); ?>
            </div>
        </div><!--/.row -->
    </div>

</x-admin-box>
<?php $this->endSection(); ?>
<?php $this->section('styles') ?>
    <?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.css', 'css') ?>
<?php $this->endSection(); ?>
<?php $this->section('scripts'); ?>
<?= asset_link('admin/theme-adminlte/plugins/daterangepicker/daterangepicker.js', 'js') ?>
<script type="text/javascript">
    $(function () {
        $('input[name=period]').daterangepicker({
            "singleDatePicker": false,
            "autoApply": true,
            "locale": {
                "format": 'YYYY-MM-DD'
            }
        });
    })
</script>
<?php $this->endSection(); ?>
