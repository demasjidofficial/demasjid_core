<p class="text-center">
  <!-- <strong>Periode: 1 Jan, 2014 - 30 Jul, 2014</strong> -->
</p>

<?php foreach ($charts  as $elem) : ?>

<<<<<<< HEAD
  <?php foreach ($elem->items() as $index => $widget) :
    $labels[] = $widget->label();
    $data[] = $widget->data();
=======
            <div class="chart">
              <!-- Sales Chart Canvas -->
              <canvas id="fundraisingChart" height="250" style="height: 250px;"></canvas>
              <div class="d-flex flex-row justify-content-end">
              <span class="mr-2 text-primary">
                <i class="fas fa-square text-primary"></i> Pekan Ini
              </span>

              <span class="text-secondary">
                <i class="fas fa-square text-secondary"></i> Pekan Terakhir
              </span>
            </div>
            </div>
            <!-- /.chart-responsive -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <p class="text-center">
              <strong>Kategori Donatur</strong>
            </p>
>>>>>>> c54a2397676c4fb096f835eb0f0b6521533a1b26



    echo json_encode($widget->label());

   
  ?>
  <?php endforeach ?>
<?php endforeach ?>
<div class="chart">
  <!-- Sales Chart Canvas -->
  <canvas id="targetChart" height="180" style="height: 180px;"></canvas>
</div>
<!-- /.chart-responsive -->

<?php $this->section('scripts'); ?>
<script>
  var targetChartCanvas = $('#targetChart').get(0).getContext('2d')

  var targetChartData = {
    labels: <?php echo json_encode($labels); ?>,
    datasets: [{
        label: 'Digital Goods',
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: <?php echo json_encode($data); ?>
      },

    ]
  }

  var targetChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }
</script>
<?php $this->endsection() ?>
