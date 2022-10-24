<?php $this->extend('master') ?>

<?php $this->section('styles') ?>
<?= asset_link('admin/theme-adminlte/plugins/chart-js/Chart.css', 'css'); ?>
<?php $this->endSection() ?>


<?php $this->section('main') ?>

<x-page-head>
    <div class="row">
        <div class="col">
            <h2><?= lang('app.dashboard')?></h2>
        </div>
        <div class="col-auto">
            <!--a href="< ?php echo route_to($baseRoute.'/new'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> < ?= lang('crud.add_new') ?></a-->
        </div>
    </div>
</x-page-head>

<section class="content" id="de_front_dashboard">
  <div class="container-fluid">
    <!-- Info boxes -->
    <?= view('App\Views\Widgets\_stats', [
				'stats'   => $widgets->widget('stats')->items(),				
			]) ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card de_chart_gradient">
          <div class="card-header">
            <h5 class="card-title">Penganggaran vs Realisasi Bulanan</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Mingguan</a>
                  <a href="#" class="dropdown-item">Bulanan</a>
                  <a href="#" class="dropdown-item">Tahunan</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <p class="text-center">
                  <strong>Periode: 1 Jan, 2014 - 30 Jul, 2014</strong>
                </p>

                <div class="chart">
                  <!-- Sales Chart Canvas -->
                  <canvas id="fundraisingChart" height="270" style="height: 270px;"></canvas>
                </div>
                <!-- /.chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <p class="text-center">
                  <strong>Target Terpenuhi</strong>
                </p>

                <div class="progress-group">
                  Pembangunan
                  <span class="float-right"><b>160</b>/200</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-info" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->

                <div class="progress-group">
                  Pendidikan
                  <span class="float-right"><b>310</b>/400</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Dakwah</span>
                  <span class="float-right"><b>480</b>/800</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  Kesehatan
                  <span class="float-right"><b>250</b>/500</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">Rp 35.210.430</h5>
                  <span class="description-text">TOTAL DONASI</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">Rp 10.390.900</h5>
                  <span class="description-text">TOTAL PENGELUARAN</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">Rp 24.813.530</h5>
                  <span class="description-text">TOTAL SALDO</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block">
                  <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                  <h5 class="description-header">1200</h5>
                  <span class="description-text">PROGRAM TERPENUHI</span>
                </div>
                <!-- /.description-block -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="col-md-8">

        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Jumlah Jamaah Kajian</h3>
              <a href="javascript:void(0);" class="de_card_btn_top_grey">
                <span class="icon-icon_external_link"></span>
                Tampilkan Detil</a>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex">
              <p class="d-flex flex-column">
                <span class="text-bold text-lg">820</span>
                <span>Jamaah Kajian Rata-Rata</span>
              </p>
              <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                  <i class="fas fa-arrow-up"></i> 12.5%
                </span>
                <span class="text-muted">Dari pekan terakhir</span>
              </p>
            </div>
            <!-- /.d-flex -->

            <div class="position-relative mb-4">
              <canvas id="visitors-chart" height="270"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end">
              <span class="mr-2 text-primary">
                <i class="fas fa-square text-primary"></i> Pekan Ini
              </span>

              <span class="text-secondary">
                <i class="fas fa-square text-secondary"></i> Pekan Terakhir
              </span>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

      <div class="col-md-4">
        <?= view('App\Views\Widgets\_zis', [
				'zis'   => $widgets->widget('zis')->items(),				
			]) ?>

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col">        
      <?= view('App\Views\Widgets\_panel', [
          'panel'   => $widgets->widget('program')->items(),
          'title'  => 'Program Terbaru'
        ]) ?>
        <!-- /.card -->
      </div>
    </div>
  </div>
  <!--/. container-fluid -->
</section>

<?php $this->endSection() ?>


<?= $this->section('scripts') ?>

<!-- OPTIONAL SCRIPTS -->
<?= asset_link('admin/theme-adminlte/plugins/chart-js/Chart.js', 'js'); ?>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?= asset_link('admin/theme-adminlte/adminlte-dashboard2.js', 'js'); ?>

<script>
  $(function () {
    'use strict'

    var ticksStyle = {
      fontColor: '#636061',
      fontStyle: 'reguler'
    }

    var mode = 'index'
    var intersect = true

    var $fundraisingChart = $('#fundraisingChart')
    // eslint-disable-next-line no-unused-vars
    var fundraisingChart = new Chart($fundraisingChart, {
      type: 'line',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
        datasets: [
          {
            type: 'line',
            data: [100, 120, 170, 20, 180, 177, 160],
            backgroundColor: '#83b86633',
            borderColor: '#FFFFFF99',
            pointBorderColor: '#FFFFFF00',
            pointBackgroundColor: '#83b86600',
            fill: true,
            pointHoverBackgroundColor: '#83b866',
            pointHoverBorderColor    : '#FFFFFF'
          },{
            type: 'line',
            data: [60, 80, 70, 67, 20, 77, 100],
            backgroundColor: '#249a8488',
            borderColor: '#FFFFFF99',
            pointBorderColor: '#FFFFFF00',
            pointBackgroundColor: '#249a8400',
            fill: true,
            pointHoverBackgroundColor: '#249a84',
            pointHoverBorderColor    : '#FFFFFF'
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect
        },
        hover: {
          mode: mode,
          intersect: intersect
        },
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            // display: false,
            gridLines: {
              display: true,
              lineWidth: '4px',
              color: 'rgba(0, 0, 0, .2)',
              zeroLineColor: 'transparent'
            },
            ticks: $.extend({
              beginAtZero: true,

              // Include a dollar sign in the ticks
              callback: function (value) {
                if (value >= 1000) {
                  value /= 1000
                  value += 'k'
                }

                return '' + value
              }
            }, ticksStyle)
          }],
          xAxes: [{
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }]
        }
      }
    })

    var $visitorsChart = $('#visitors-chart')
    // eslint-disable-next-line no-unused-vars
    var visitorsChart = new Chart($visitorsChart, {
      data: {
        labels: ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
        datasets: [{
            type: 'line',
            data: [100, 120, 170, 167, 180, 177, 160],
            backgroundColor: 'transparent',
            borderColor: '#83b86666',
            pointBorderColor: '#83b866',
            pointBackgroundColor: '#83b866',
            fill: false
            // pointHoverBackgroundColor: '#83b866',
            // pointHoverBorderColor    : '#83b866'
          },
          {
            type: 'line',
            data: [60, 80, 70, 67, 80, 77, 100],
            backgroundColor: 'tansparent',
            borderColor: '#249a8466',
            pointBorderColor: '#249a84',
            pointBackgroundColor: '#249a84',
            fill: false
            // pointHoverBackgroundColor: '#249a84',
            // pointHoverBorderColor    : '#249a84'
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect
        },
        hover: {
          mode: mode,
          intersect: intersect
        },
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            // display: false,
            gridLines: {
              display: true,
              lineWidth: '4px',
              color: 'rgba(0, 0, 0, .2)',
              zeroLineColor: 'transparent'
            },
            ticks: $.extend({
              beginAtZero: true,
              suggestedMax: 200
            }, ticksStyle)
          }],
          xAxes: [{
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }]
        }
      }
    })
  })
</script>


<?php $this->endSection() ?>
