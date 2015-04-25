<!doctype html>
<html>
<head>
    <title>
    @section('title')
        Real Hack - Housing.
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
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '823314961083541',
              xfbml      : true,
              version    : 'v2.3'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
    @show
</html>