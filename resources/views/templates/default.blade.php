
<!DOCTYPE html>
<html class="no-js">
@include('templates.partials.head')
<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul>
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->
      <!-- Sidebar -->
			@include('templates.partials.sidebar')

      <!-- navbar -->
      @include('templates.partials.navbar')

			<section class="ls ms section_padding_top_50 section_padding_bottom_50 columns_padding_5">
				<div class="container-fluid">
					@yield('content')
				</div>
				<!-- .container -->
			</section>

			<section class="ls">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							&copy; Copyrights 2019
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
  @include('templates.partials.script')
</body>
</html>
