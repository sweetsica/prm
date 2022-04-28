

@if(Session::has('notice'))
    <p class="alert alert-info"><h1 style="color: red">{{ Session::get('notice') }}</h1></p>
@endif
