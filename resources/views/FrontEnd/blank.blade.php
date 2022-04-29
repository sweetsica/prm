@if(Session::has('notice'))
    <p class="alert alert-info"><h1 style="color: red">{{ Session::get('notice') }}</h1></p>
@endif

@if(Session::has('customer_id'))
    <a href="{{route('doithuong')}}">Truy cập trang đổi thưởng</a>
@else
    <a href="{{route('nova.pages.home')}}">Trang quản lý thông tin</a>
@endif

@if(session('notice_clear'))
    <p>
        Dọn session thành công! <a href="{{route('nova.pages.home')}}"> Trang quản lý thông tin</a>'
    </p>
@endif


