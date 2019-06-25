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
	<!-- .col-* -->

	<!-- <div class="col-sm-6 col-lg-3">
		<div class="teaser media after_cover color_bg_3">
			<div class="media-body">
				<h4 class="counter highlight" data-from="0" data-to="325" data-speed="2100">0</h4>
				<p>Penimbangan / Bulan</p>
			</div>
			<div class="media-right">
				<div class="teaser_icon size_small">
					<i class="fa fa-balance-scale"></i>
				</div>
			</div>
		</div>

	</div>
	<!-- .col-* -->

	<!-- <div class="col-sm-6 col-lg-3">

		<div class="teaser media after_cover color_bg_1">

			<div class="media-body">
				<h4 class="highlight counter-wrap">
					<span class="counter" data-from="0" data-to="121" data-speed="2500">0</span>
					<!-- <span class="counter-add">K</span> -->
				<!-- </h4>
				<p>Total Profit</p>
			</div>
			<div class="media-right">
				<div class="teaser_icon size_small">
					<i class="fa fa-truck"></i>
				</div>
			</div>
		</div>
	</div> -->
	<!-- .col-* -->
</div>
<!-- .row -->
<!-- <div class="row">
	<!-- Yearly Visitors -->
	<div class="col-xs-12 col-md-12">
		<div class="with_background with_padding">
			<canvas class="canvas-chart-line-yearly-visitors"></canvas>
		</div>
	</div>
	<!-- .col-* -->
	<!-- Monthly Visitors -->

	<!-- .col-* -->
</div> -->

<!-- .row -->


@endsection
