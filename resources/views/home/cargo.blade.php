@extends('templates.default')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<h3>Penimbangan</h3>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-12">
		<div class="with_background with_padding">
			<form class="form-inline">
				<div class="form-group">
					<label for="">No Kendaraan</label>
					<input type="text" name="number_plat" value="{{old('number_plat')}}" class="form-control" required> &nbsp;&nbsp;&nbsp;
				</div>
				<div class="form-group">
					<label for="">Berat</label>
					<input type="text" name="weight" value="{{old('weight')}}" class="form-control" required> &nbsp;&nbsp;&nbsp;
				</div>
          <button type="submit" class="theme_button">Simpan</button>
			</form>
		</div>
		<!-- .with_background -->
  </div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="with_background with_padding">
			<div class="table-responsive">
        <table class="table_template">
					<thead>
						<tr>
							<th>No</th>
							<th>No plat</th>
							<th>Berat</th>
              <th>Tanggal</th>
							<th width="12%">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td rowspan="2">1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td></td>
              <td>
                <a href="#"> <i class="fa fa-pencil fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="#"> <i class="fa fa-trash fa-lg"></i></a>
              </td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- .table-responsive -->
		</div>
		<!-- .with_background -->
	</div>
	<!-- .col-* -->
</div>
<!-- .row -->
@endsection
