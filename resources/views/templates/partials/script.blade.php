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
  $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
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
