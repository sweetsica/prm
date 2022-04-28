<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Brunette I Login</title>
		<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('src/favicon.ico')}}">
		<link rel="icon" href="{{asset('src/favicon.ico')}}" type="image/x-icon">

		<!-- Toggles CSS -->
		<link href="{{asset('src/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('src/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

		<!-- Custom CSS -->
		<link href="{{asset('src/dist/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- Preloader -->
		<div class="preloader-it">
			<div class="loader-pendulums"></div>
		</div>
		<!-- /Preloader -->

		<!-- HK Wrapper -->
		<div class="hk-wrapper">

			<!-- Main Content -->
			<div class="hk-pg-wrapper hk-auth-wrapper">
				<header class="d-flex justify-content-end align-items-center">
					<div class="btn-group btn-group-sm">
						<a href="{{asset('src/#')}}" class="btn btn-outline-secondary">Help</a>
						<a href="{{asset('src/#')}}" class="btn btn-outline-secondary">About Us</a>
					</div>
				</header>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 pa-0">
							<div class="auth-form-wrap pt-xl-0 pt-70">
								<div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
									<a class="auth-brand text-center d-block mb-20" href="{{asset('src/#')}}">
										<img class="brand-img" src="{{asset('src/dist/img/logo-light.png')}}" alt="brand"/>
									</a>
									<form method="POST" action="{{route('login.send')}}">
                                        @csrf
										<h1 class="display-4 text-center mb-10">Xin chào!</h1>
										<p class="text-center mb-30">Đăng nhập ngay để nhận hàng ngàn phần quà từ Doppelherz VN.</p>
										<div class="form-group">
											<input class="form-control" name='phone' placeholder="Số điện thoại" type="text">
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" name='password' placeholder="Password" type="password">
												<div class="input-group-append">
													<span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
												</div>
											</div>
										</div>
										<button class="btn btn-primary btn-block" type="submit">Đăng nhập</button>
{{--										<div class="option-sep">or</div>--}}
{{--										<div class="form-row">--}}
{{--											<div class="col-sm-6 mb-20"><button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button></div>--}}
{{--											<div class="col-sm-6 mb-20"><button class="btn btn-sky btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button></div>--}}
{{--										</div>--}}
										<p class="text-center">Chưa có tài khoản? <a href="{{route('signUp')}}">Đăng ký</a></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Main Content -->

		</div>
		<!-- /HK Wrapper -->

		<!-- JavaScript -->

		<!-- jQuery -->
		<script src="{{asset('src/vendors/jquery/dist/jquery.min.js')}}"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('src/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
		<script src="{{asset('src/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

		<!-- Slimscroll JavaScript -->
		<script src="{{asset('src/dist/js/jquery.slimscroll.js')}}"></script>

		<!-- Fancy Dropdown JS -->
		<script src="{{asset('src/dist/js/dropdown-bootstrap-extended.js')}}"></script>

		<!-- FeatherIcons JavaScript -->
		<script src="{{asset('src/dist/js/feather.min.js')}}"></script>

		<!-- Init JavaScript -->
		<script src="{{asset('src/dist/js/init.js')}}"></script>
	</body>
</html>
