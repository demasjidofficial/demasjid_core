
<?php $this->extend('master'); ?>

<?php $this->section('main'); ?>
    <x-page-head>
        <div class="row">
            <div class="col">
                <a href="#" class="back" onclick="history.back()">&larr; <?= lang('crud.back') ?></a>
                <h4><?= lang('crud.report_balancesheet') ?></h4>
            </div>
            <!--
            <div class="col-auto">
                <a href="< ?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i>  < ?= lang('crud.add_new') ?></a>
            </div>
            -->
        </div>
    </x-page-head>

    <x-admin-box>

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!--
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>
            -->

            <!-- Main content --
            <div class="invoice p-3 mb-3">
              < !-- title row -- >
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> AdminLTE, Inc.
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                < !-- /.col --
              </div>
              < !-- info row -- >
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@almasaeedstudio.com
                  </address>
                </div>
                < !-- /.col -- >
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>John Doe</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (555) 539-1037<br>
                    Email: john.doe@example.com
                  </address>
                </div>
                < !-- /.col -- >
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
                </div>
                < !-- /.col -- >
              </div>
              < !-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-sm">
                    <thead>
                    <tr>
                      <th style="width:60%;"></th>
                      <th colspan="2" style="text-align:center;">31 Des 2021</th>
                      <th colspan="2" style="text-align:center;">30 Nov 2021</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- ASSET ROWS -->
                    <tr>
                      <td colspan="5" style="font-weight:bold;">ASET</b></td> 
                    </tr>
                    <tr>
                      <td colspan="5" style="font-weight:600;text-indent:1%;">ASET LANCAR</td> 
                    </tr>
                    <tr>
                      <td style="font-weight:600;text-indent:3%;">Kas dan setara Kas</td> 
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td style="font-weight:300;text-indent:3%;">&bull; Kas</td>
                      <td>Rp</td>
                      <td style="text-align:right;">90.000.000</td>
                      <td>Rp</td>
                      <td style="text-align:right;">60.000.000</td>
                    </tr>
                    <tr>
                      <td style="font-weight:300;text-indent:3%;">&bull; Bank</td>
                      <td>Rp</td>
                      <td style="text-align:right;">90.000.000</td>
                      <td>Rp</td>
                      <td style="text-align:right;">60.000.000</td>
                    </tr>
                    <tr>
                      <td style="font-weight:600;text-indent:3%;">Jumlah Kas dan setara Kas</td> 
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">180.000.000</td>
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">120.000.000</td>
                    </tr>
                    <tr>
                      <td style="font-weight:600;text-indent:3%;">Perlengkapan</td> 
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td style="font-weight:300;text-indent:3%;">&bull; -</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                    </tr>
                    <tr>
                      <td style="font-weight:600;text-indent:3%;">Jumlah Perlengkapan</td> 
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">0</td>
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">0</td>
                    </tr>
                    <tr>
                      <td style="font-weight:600;text-indent:1%;">JUMLAH ASET LANCAR</td> 
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">180.000.000</td>
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">120.000.000</td>
                    </tr>
                    <tr>
                      <td style="font-weight:600;">JUMLAH ASET</td> 
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">180.000.000</td>
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">120.000.000</td>
                    </tr>

                     <!-- LIABILITY ROWS -->
                     <tr>
                      <td colspan="5" style="font-weight:bold;">LIABILITAS</b></td> 
                    </tr>
                    <tr>
                      <td colspan="5" style="font-weight:600;text-indent:1%;">KEWAJIBAN</td> 
                    </tr>
                    <tr>
                      <td style="font-weight:300;text-indent:3%;">&bull; Utang Jangka Pendek</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                    </tr>
                    <tr>
                      <td style="font-weight:300;text-indent:3%;">&bull; Utang Jangka Panjang</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                    </tr>
                    <tr>
                      <td style="font-weight:600;text-indent:1%;">JUMLAH KEWAJIBAN</td> 
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">0</td>
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">0</td>
                    </tr>
                    <tr>
                      <td style="font-weight:600;text-indent:1%;">ASET NETO</td> 
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td style="font-weight:600;text-indent:3%;">Aset Neto Tidak Terikat</td> 
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td style="font-weight:300;text-indent:3%;">&bull; Penerimaan dari Donatur</td>
                      <td></td>
                      <td style="text-align:right;"></td>
                      <td></td>
                      <td style="text-align:right;"></td>
                    </tr>
                    <tr>
                      <td style="font-weight:300;text-indent:5%;">&bull; Donatur Tetap</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                    </tr>
                    <tr>
                      <td style="font-weight:300;text-indent:5%;">&bull; Donatur Tidak Tetap</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                    </tr>
                    <tr>
                      <td style="font-weight:300;text-indent:3%;">&bull; Penerimaan (Pengeluaran) Non Donatur</td>
                      <td></td>
                      <td style="text-align:right;"></td>
                      <td></td>
                      <td style="text-align:right;"></td>
                    </tr>
                    <tr>
                      <td style="font-weight:300;text-indent:5%;">&bull; Pengeluaran Operasional</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                    </tr>
                    <tr>
                      <td style="font-weight:300;text-indent:5%;">&bull; Penerimaan (Pengeluaran) Non Operasional</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                      <td>Rp</td>
                      <td style="text-align:right;">0</td>
                    </tr>
                    <tr>
                      <td style="font-weight:600;text-indent:1%;">JUMLAH ASET NETO</td> 
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">180.000.000</td>
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">120.000.000</td>
                    </tr>
                    <tr>
                      <td style="font-weight:600;">JUMLAH LIABILITAS</td> 
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">180.000.000</td>
                      <td style="font-weight:600;">Rp</td>
                      <td style="font-weight:600;text-align:right;">120.000.000</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!--
              <div class="row">
                < !-- accepted payments column -- >
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="../../dist/img/credit/visa.png" alt="Visa">
                  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
                </div>
                < !-- /.col -- >
                <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                      </tr>
                    </table>
                  </div>
                </div>
                < !-- /.col -- >
              </div>
              < !-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <!--button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button-->
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    
    </x-admin-box> 
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script></script>
<?php $this->endSection(); ?>
