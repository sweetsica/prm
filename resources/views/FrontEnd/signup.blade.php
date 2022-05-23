<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Đăng Ký - Doppelherz Việt Nam</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="icon" href="https://doppelherz.vn/wp-content/uploads/2020/12/favicon.ico" sizes="32x32" />
    <link rel="icon" href="https://doppelherz.vn/wp-content/uploads/2020/12/favicon.ico" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://doppelherz.vn/wp-content/uploads/2020/12/favicon.ico" />
    <meta name="msapplication-TileImage" content="https://doppelherz.vn/wp-content/uploads/2020/12/favicon.ico" />

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
                                <a class="auth-brand text-center d-block mb-20" href={{asset('/')}}>
                                    <img class="logo-in-auth" src="{{asset('src/dist/img/logo/logo.png')}}" alt="brand"/>
                                </a>
                                <form  class="border-top" method="Post" action="{{route('signUp.send')}}">
                                    @csrf
                                    <h1 class="display-4 text-center font-24 font-weight-700 mt-10 mb-10">Đăng Ký!</h1>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" name='name' placeholder="Họ Tên" value="{{old("name")}}" type="text">
                                            @error("name")
                                            <span class="text-danger mt-10">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" name='phone' min="0" placeholder="Số điện thoại" value="{{old("phone")}}" type="number">
                                            @error("phone")
                                            <span class="text-danger mt-10">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name='email' placeholder="Email" value="{{old("email")}}" type="email">
                                        @error("email")
                                        <span class="text-danger mt-10">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name='password'  placeholder="Mật khẩu" value="{{old("password")}}" type="password">
                                        @error("password")
                                        <span class="text-danger mt-10">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" name='password_confirmation' placeholder="Xác nhận mật khẩu"  type="password">

                                        </div>
                                        @error("password_confirmation")
                                        <span class="text-danger mt-10">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">Tôi đồng ý với <a class="text-red" href="https://tichdiem.doppelherz.vn/baomat"><u>điều khoản và chính sách bảo mật</u></a></label>
                                    </div>
                                    <button class="btn btn-red btn-block" type="submit">Đăng ký</button>
                                    <div class="option-sep">hoặc</div>
{{--                                    <div class="form-row">--}}
{{--                                        <div class="col-sm-6 mb-20">--}}
{{--                                            <button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6 mb-20">--}}
{{--                                            <button class="btn btn-sky btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <p class="text-center">Đã có tài khoản? <a class="text-red" href="{{asset('/dangnhap')}}">Đăng nhập</a></p>
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

    <!-- Toggles JavaScript -->
    <script src="{{asset('src/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('src/dist/js/toggle-data.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{asset('src/dist/js/init.js')}}"></script>
</body>

</html>
