<!DOCTYPE html>
<html class="no-js">
@include('templates.partials.head')
<body>
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
		</div>
	</div>
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->
			<section class="ls ms section_padding_top_100 section_padding_bottom_100 section_full_height">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
							<div class="with_background with_padding">
                @error('username')
                <div class="alert alert-danger text-center" role="alert">
									<strong>Gagal Login, Silahkan coba lagi</strong>
								</div>
                @enderror
                @error('password')
                <div class="alert alert-danger text-center" role="alert">
									<strong>Gagal Login, Silahkan coba lagi</strong>
								</div>
                @enderror
								<h4 class="text-center">
									Login Truck Cargo
								</h4>
								<hr class="bottommargin_30">
								<div class="wrap-forms">
									<form method="post" action="{{route('admin.login')}}">
                    @csrf
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="login-email">Username</label>
													<i class="grey fa fa-user"></i>
													<input type="text" name="username" value="{{old('username')}}" class="form-control" placeholder="username">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="login-password">Password</label>
													<i class="grey fa fa-lock"></i>
													<input type="password" name="password" class="form-control" placeholder="Password">
												</div>
											</div>
										</div>
										<button type="submit" class="theme_button block_button color1">Masuk</button>
									</form>
								</div>

								<div class="darklinks text-center topmargin_20">
								</div>
								<div class="collapse form-inline-button" id="signin-resend-password">
									<form class="form-inline topmargin_20">
										<div class="form-group">
											<label class="sr-only">Enter your e-mail</label>
											<input type="email" class="form-control" placeholder="Enter your e-mail">
										</div>
										<button type="submit" class="theme_button with_icon">
											<i class="fa fa-share"></i>
										</button>
									</form>
								</div>


							</div>
							<!-- .with_background -->
						</div>
						<!-- .col-* -->
					</div>
					<!-- .row -->
				</div>
				<!-- .container -->
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	@include('templates.partials.script')
</html>
