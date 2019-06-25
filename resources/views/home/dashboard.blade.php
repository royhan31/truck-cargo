@extends('templates.default')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<h3>Beranda</h3>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">

		<div class="teaser media after_cover color_bg_1">

			<div class="media-body">
				<h4 class="counter highlight" data-from="0" data-to="2630" data-speed="1800">0</h4>
				<p>Penimbangan / Hari</p>
			</div>

			<div class="media-right">
				<div class="teaser_icon size_small">
					<i class="fa fa-balance-scale"></i>
				</div>
			</div>
		</div>

	</div>
	<!-- .col-* -->

	<div class="col-sm-6">

		<div class="teaser media after_cover color_bg_2">

			<div class="media-body">
				<h4 class="highlight counter-wrap">
					<span class="counter" data-from="0" data-to="223" data-speed="2500">0</span>
				</h4>
				<p>Kendaraan / Hari</p>
			</div>

			<div class="media-right">
				<div class="teaser_icon size_small">
					<i class="fa fa-truck"></i>
				</div>
			</div>
		</div>
	</div>
	

@endsection
