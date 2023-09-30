
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
}
)