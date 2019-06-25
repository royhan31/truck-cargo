@extends('templates.default')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<h3>Penimbangan</h3>
	</div>
</div>
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	<strong>Berhasil</strong>{{Session::get('success')}}
</div>
@endif

<div class="row">
	<div class="col-xs-12 col-12">
		<div class="with_background with_padding">
			<form class="form-inline">
				<div class="form-group">
					<input type="text" name="plat_nomor" value="{{old('plat_nomor')}}" class="form-control" placeholder="Plat Nomor" required>
				</div>
				<div class="form-group">
					<input type="text" id="berat" name="berat" value="{{old('berat')}}" class="form-control" placeholder="Berat" required>
				</div>
				<div class="form-group">
					<input type="text" name="nama_supir" value="{{old('nama_supir')}}" class="form-control" placeholder="Nama Supir" required>
				</div>
				<button type="submit" class="theme_button color1">Submit</button>
				</form>
			</div>
		</div>
  </div>
<div class="row">
	<div class="col-xs-12">
		<div class="with_background with_padding">
			<div class="table-responsive">
        <table id="example" class="table_template">
					<thead>
						<tr>
							<th>No</th>
							<th>No plat</th>
							<th>Berat/Kg</th>
              <th>Nama Supir</th>
							<th width="12%">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@php($no = 1)
						<tr>
							<td rowspan="2">{{$no}}</td>
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
