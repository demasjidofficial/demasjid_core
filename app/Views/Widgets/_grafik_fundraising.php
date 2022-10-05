<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Grafik Fundraising</h5>

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
              <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
            </div>
            <!-- /.chart-responsive -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <p class="text-center">
              <strong>Kategori Donatur</strong>
            </p>

            <?php foreach ($stats  as $elem) : ?>

              <?php foreach ($elem->items() as $index => $widget) : ?>


                <div class="progress-group">
                  <?= $widget->title() ?>
                  <span class="float-right"><b><?= $widget->value() / 100 ?> %</b><?= $widget->value() ?></span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->

              <?php endforeach; ?>

            <?php endforeach; ?>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
 
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>