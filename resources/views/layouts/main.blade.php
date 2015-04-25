<!doctype html>
<html>
<head>
    <title>
    @section('title')
        Edcoogle - Education made easy.
    @show
    </title>

    @section('style')
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/materialize.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.qtip.min.css') }}">
    @show
</head>
<body>
    <div >
            @include('layouts.menu')

              @if(Auth::check())
                  @include('layouts.submenu')
              @endif
            <div id="ed-content">
            @section('content')
                This is master template. Parse content into it.
            @show
            </div>
            @include('layouts.footer')

            @if(!Auth::check())
            
            @endif
    </div>
</body>
    @section('script')
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('/js/materialize.js') }}"></script>
        <script src="{{ asset('js/base.js') }}"></script>
    @show
</html>