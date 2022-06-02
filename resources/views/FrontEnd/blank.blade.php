{{--@if(Session::has('notice'))--}}
{{--    <p class="alert alert-info"><h1 style=" color: red">{{ Session::get('notice') }}</h1></p>--}}
{{--@endif--}}

{{--@if(Session::has('customer_id'))--}}
{{--    <a href="{{route('doithuong')}}">Truy cập trang đổi thưởng</a>--}}
{{--@else--}}
{{--    <a href="{{route('nova.pages.home')}}">Trang quản lý thông tin</a>--}}
{{--@endif--}}

{{--@if(session('notice_clear'))--}}
{{--    <p>--}}
{{--        Dọn session thành công! <a href="{{route('nova.pages.home')}}"> Trang quản lý thông tin</a>'--}}
{{--    </p>--}}
{{--@endif--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Thông Báo</title>
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

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 pa-0">
                    <div class="auth-form-wrap pt-xl-0 pt-70">
                        <div class="auth-form w-xl-45 w-sm-50 w-100">
                            <a class="auth-brand text-center d-block mb-30" href="#">
                                <img class="brand-img d-inline-block brand-img" src="{{asset('src/dist/img/logo/logo.png')}}" alt="brand" />
                            </a>
                            @if(Session::has('notice-success'))
                                <div class="text-center">
                                    <h1 class=" mb-10 text-center text-red">Tích Điểm Thành Công.</h1>
                                    <h3 class="font-20 mb-5">Sản Phẩm Đã Quét:  <span class="text-red">{{ Session::get('notice-success')[1]->name }}</span></h3>
                                    <p class="mb-30 text-center">Bạn đã được tích <span class="text-red">{{Session::get('notice-success')[0]}} điểm</span> vào tài khoản, Cảm ơn bạn đã tham gia chương trình</p>
                                    <a href="{{asset('/hoadon')}}" class="btn btn-red text-white">Xem Lịch Sử</a>
                                </div>
                            @elseif(Session::has('notice-fail'))
                                <div class="text-center">
                                    <h1 class=" mb-10 text-center text-red">Tích Điểm Thất Bại.</h1>
                                    <p class="mb-30 text-center">Mã số sản phẩm của bạn đã từng được kích hoạt. Yêu cầu tích điểm không thành công. Vui lòng liên hệ <span class="text-red">CSKH </span>của <a href="https://doppelherz.vn/" class="text-red">Doppelherz Việt Nam</a> qua email <a href="mailto:info@mastertran.vn" class="text-red "><u>info@mastertran.vn</u></a> để được bồi thường và hỗ trợ tốt nhất</p>
                                    <a href="{{asset('/hoadon')}}" class="btn btn-red text-white">Xem Lịch Sử</a>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Content -->

</div>
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
