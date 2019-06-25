<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="{{ asset('public/assets/js/compressed.js')}}"></script>
<script src="{{ asset('public/assets/js/vendor/Chart.bundle.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('public/assets/js/main.js')}}"></script>
<!-- <script src="{{ asset('public/assets/js/admin-charts.js')}}"></script> -->
<script>
$(document).ready(function() {
  $('#example').DataTable();
} );
</script>
<script>
window.setTimeout(function() {
  $(".alert").fadeTo(500, 0).slideUp(500, function(){
  $(this).remove();
});
}, 5000);
</script>
<script>
var tanpa_huruf = document.getElementById('berat');
tanpa_huruf.addEventListener('keyup', function(e)
{
tanpa_huruf.value = formatberat(this.value);
});


/* Fungsi */
function formatberat(angka, prefix)
{
var number_string = angka.replace(/[^,\d]/g, '').toString(),
split    = number_string.split(','),
sisa     = split[0].length % 3,
berat     = split[0].substr(0, sisa),
ribuan     = split[0].substr(sisa).match(/\d{3}/gi);

if (ribuan) {
separator = sisa ? '.' : '';
berat += separator + ribuan.join('.');
}

berat = split[1] != undefined ? berat + ',' + split[1] : berat;
return prefix == undefined ? berat : (berat ? 'Rp. ' + berat : '');
}
</script>
@if(Request::is('beranda'))
<script>
(function() {
  //Global Defaults
  Chart.defaults.global.defaultFontColor = '#444';
  Chart.defaults.global.defaultFontFamily = 'sans-serif';
  Chart.defaults.global.defaultFontSize = 11;
  //Yearly visitors
  var $canvasesYearlyVisitors = jQuery('.canvas-chart-line-yearly-visitors');
  if ($canvasesYearlyVisitors.length) {
    $canvasesYearlyVisitors.each(function(i){

      var MONTHS = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
      var config = {
        type: 'line',
        data: {
          labels: MONTHS,
          datasets: [{
            label: "Unique Visitors",
            backgroundColor: 'rgba(244, 161, 21, 0.5)',
            borderColor: 'rgba(244, 161, 21, 0.5)',
                        borderWidth: '0',
                        tension: '0',
            //visitors per month
            data: [20, 50, 80, 100, 300, 500, 800, 1000, 900, 700, 1000, 1100],
            fill: true,
          },
          //put new dataset here if needed to show multiple datasets on one graph
          ]
        },
        options: {
          responsive: true,
          title:{
            display:true,
            text:'Yearly Visitors'
          },
          tooltips: {
            mode: 'index',
            intersect: false,
          },
          hover: {
            mode: 'nearest',
            intersect: true
          },
          scales: {
            xAxes: [{
              display: true,
              scaleLabel: {
                display: true,
                labelString: 'Month'
              }
            }],
            yAxes: [{
              display: true,
              scaleLabel: {
                display: true,
                labelString: 'Visitors'
              }
            }]
          }
        }
      };


      var canvas = jQuery(this)[0].getContext("2d");;

      new Chart(canvas, config);
    });
  }
})();
</script>
@endif
