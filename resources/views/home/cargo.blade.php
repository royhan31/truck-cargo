@extends('templates.default')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<h3>Penimbangan</h3>
	</div>
</div>
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	<strong>{{Session::get('success')}}</strong>
</div>
@endif
@error('plat_nomor')
<div class="alert alert-danger" role="alert">
	<strong>Gagal! Plat nomor tidak benar </strong>
</div>
@enderror
@error('berat')
<div class="alert alert-danger" role="alert">
	<strong>Gagal! Berat minimal 100 kg </strong>
</div>
@enderror
@error('nama_supir')
<div class="alert alert-danger" role="alert">
	<strong>Gagal! Nama supir tidak benar </strong>
</div>
@enderror

<div class="row">
	<div class="col-xs-12 col-12">
		<div class="with_background with_padding">
			<form class="form-inline" action="{{route('cargo.store')}}" method="post">
				@csrf
				<div class="form-group">
					<input type="text" name="plat_nomor" value="{{old('plat_nomor')}}" class="form-control is" placeholder="Plat Nomor" required>
				</div>
				<div class="form-group">
					<input type="text" name="berat" id="berat" value="{{old('berat')}}" class="form-control" placeholder="Berat" required>
				</div>
				<div class="form-group">
					<input type="text" name="nama_supir" value="{{old('nama_supir')}}" class="form-control" placeholder="Nama Supir" required>
				</div>
				<button type="submit" class="theme_button color1">Simpan</button>
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
							<th>Tanggal</th>
							<th width="12%">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@php($no = 1)
						@foreach($cargos as $cargo)
						<tr>
							<td>{{$no}}</td>
							<td>{{$cargo->plat_nomor}}</td>
							<td>{{number_format($cargo->berat,0,',','.')}}</td>
							<td>{{$cargo->nama_supir}}</td>
							<td>{{date('d M Y',strtotime($cargo->tanggal))}}</td>
              <td>
                <a href="#" data-toggle="modal" data-target="#edit{{$cargo->id}}"> <i class="fa fa-pencil fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="#" data-toggle="modal" data-target="#hapus{{$cargo->id}}"> <i class="fa fa-trash fa-lg"></i></a>
              </td>
						</tr>
						@php($no++)
						<!-- Modal Edit -->
							<div id="edit{{$cargo->id}}" class="modal fade" role="dialog">
							  <div class="modal-dialog">
							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Data Edit</h4>
							      </div>
							      <div class="modal-body">
									<form action="{{route('cargo.update', $cargo)}}" method="post">
										@csrf
										@method('PATCH')
									<div class="form-group">
										<label>Plat Nomor</label>
										<input type="text" name="plat_nomor" value="{{$cargo->plat_nomor}}" class="form-control">
									</div>
									<div class="form-group">
										<label>Berat</label>
										<input type="text" name="berat" id="berat2" value="{{number_format($cargo->berat,0,',','.')}}" value="{{old('berat')}}" class="form-control" placeholder="Berat" required>
									</div>
									<div class="form-group">
										<label>Nama Supir</label>
										<input type="text" name="nama_supir" value="{{$cargo->nama_supir}}" class="form-control">
									</div>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
											<button type="submit" class="theme_button">Simpan</button>
							      </div>
										</form>
							    </div>

							  </div>
							</div>
							<div id="hapus{{$cargo->id}}" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Data Hapus</h4>
										</div>
										<div class="modal-body">
									<form action="{{route('cargo.destroy', $cargo)}}" method="post">
										@csrf
										<p> <strong>Apakah anda yakin akan menghapus data ini ?</strong></p>
									</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
											<button type="submit" class="theme_button">Hapus</button>
										</div>
										</form>
									</div>

								</div>
							</div>
						@endforeach
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
