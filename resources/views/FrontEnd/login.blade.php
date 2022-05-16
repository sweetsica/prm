<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Đăng Nhập - Doppelherz Việt Nam</title>
		<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
        <link rel="icon" href="https://doppelherz.vn/wp-content/uploads/2020/12/favicon.ico" sizes="32x32" />
        <link rel="icon" href="https://doppelherz.vn/wp-content/uploads/2020/12/favicon.ico" sizes="192x192" />
        <link rel="apple-touch-icon" href="https://doppelherz.vn/wp-content/uploads/2020/12/favicon.ico" />
        <meta name="msapplication-TileImage" content="https://doppelherz.vn/wp-content/uploads/2020/12/favicon.ico" />

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

				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 pa-0">
							<div class="auth-form-wrap pt-xl-0 pt-70">
								<div class="auth-form border pa-20 rounded-20 bg-white w-xl-30 w-lg-55 w-sm-75 w-100">
									<a class="auth-brand text-center d-block mb-20 " href="{{asset('/')}}">
										<img class="logo-in-auth" src="{{asset('src/dist/img/logo/logo.png')}}" alt="brand"/>
									</a>
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger" role="alert">
                                            Đăng nhập thất bại, vui lòng kiểm tra lại số điện thoại và mật khẩu
                                        </div>
                                    @endif
									<form class="border-top" method="POST" action="{{route('login.send')}}">
                                        @csrf
										<h1 class="display-4 text-center font-24 font-weight-700 mt-10 mb-10">Đăng Nhập!</h1>
										<div class="form-group">
											<input class="form-control" name='phone' placeholder="Số điện thoại" type="text">
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" name='password' id="password" placeholder="Password" type="password">
											</div>
										</div>
										<button class="btn btn-red btn-block" type="submit">Đăng nhập</button>
{{--										<div class="option-sep">or</div>--}}
{{--										<div class="form-row">--}}
{{--											<div class="col-sm-6 mb-20"><button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button></div>--}}
{{--											<div class="col-sm-6 mb-20"><button class="btn btn-sky btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button></div>--}}
{{--										</div>--}}
                                        <div class="option-sep">hoặc</div>
										<p class="text-center">Chưa có tài khoản? <a class="text-red" href="{{route('signUp')}}">Đăng ký</a></p>
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
        <script>
            const togglePassword = document.querySelector("#togglePassword");
            const password = document.querySelector("#password");

            togglePassword.addEventListener("click", function () {
                // toggle the type attribute
                const type = password.getAttribute("type") === "password" ? "text" : "password";
                password.setAttribute("type", type);

                // toggle the icon
                this.classList.toggle("bi-eye");
            });

            // prevent form submit
            const form = document.querySelector("form");
            form.addEventListener('submit', function (e) {
                e.preventDefault();
            });
        </script>
	</body>
</html>
