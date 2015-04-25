<!doctype html>
<html>
<head>
    @include('meta.meta-general')
    @include('meta.meta-google')
    @include('meta.meta-og')
    @include('meta.meta-twitter')

    <title>
    @section('title')
        Edcoogle - Education made easy.
    @show
    </title>

    @section('style')
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{ asset('lib/materialize/dist/css/materialize.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.qtip.min.css') }}">
    @show
</head>
<body>
    <div class="container">
            @include('layouts.menu')

            <div id="ed-content">
            @section('content')
                This is master template. Parse content into it.
            @show
            </div>
            @include('layouts.footer')

            @if(!Auth::check())
            <!-- Register Modal -->
            <div id="signupModal" class="modal">
                <form method="POST" action="{{ route('user.post.singup')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-content white">
                        <h4>Sign Up</h4>
                        <p>You are awesome.</p>
                        <br/>

                         <div class="input-field col s6">
                            <!-- <i class="mdi-action-account-circle prefix"></i> -->
                            <input id="icon_prefix" type="email" class="validate" name="email" required>
                            <label for="icon_prefix">Email</label>
                          </div>

                          <div class="input-field col s6">
                            <!-- <i class="mdi-communication-vpn-key prefix"></i> -->
                            <input id="icon_prefix" type="password" class="validate" name="password" required>
                            <label for="icon_prefix">Password</label>
                          </div>
                    </div>
                    <div class="modal-footer white">
                        <a href="{{ route('user.login.facebook')}}" class="waves-effect waves-green btn modal-action blue lighten-1 white-text">
                        <i class="mdi-social-person-add left" id="fbLoginButton"></i>
                        LOGIN WITH FACEBOOK</a>
                        <button type="submit" href="#" class="waves-effect waves-green btn-flat modal-action">Sign Up</button>
                    </div>
                </form>
            </div>

            <!-- Login Modal -->
            <div id="loginModal" class="modal">
                <form method="POST" action="{{ route('user.post.login')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-content white">
                        <h4>Login</h4>
                        <br/>

                         <div class="input-field col s6">
                            <!-- <i class="mdi-action-account-circle prefix"></i> -->
                            <input id="icon_prefix" type="email" class="validate" name="email" required>
                            <label for="icon_prefix">Email</label>
                          </div>

                          <div class="input-field col s6">
                            <!-- <i class="mdi-communication-vpn-key prefix"></i> -->
                            <input id="icon_prefix" type="password" class="validate" name="password" required>
                            <label for="icon_prefix">Password</label>
                          </div>
                    </div>
                    <div class="modal-footer white">
                        <a href="{{ route('user.login.facebook')}}" class="waves-effect waves-green btn modal-action blue lighten-1 white-text">
                        <i class="mdi-social-person-add left" id="fbLoginButton"></i>
                        LOGIN WITH FACEBOOK</a>
                        <button type="submit" href="#" class="waves-effect waves-green btn-flat modal-action">Login</button>
                    </div>
                </form>
            </div>
            @else 

                <div id="notification-content">
                       <div class="card z-depth-0 ">
                        <div class="card-content ">
                            <div class="card-title blue-grey-text">Notifications</div>
                        </div>
                       </div>
                </div>

                <div id="profile-content" class="card">
                        <div class="card-content">
                            <img  class="" src="{{ Auth::user()->image_path ? Auth::user()->image_path: asset('images/user.png') }}">
                            <a href="{{ "#" }}" class="waves-effect waves-red btn-flat"> Your Saved Question </a>
                            <a href="{{ "#" }}" class="waves-effect waves-red btn-flat"> My Profile </a>
                            <a href="{{ "#" }}" class="waves-effect waves-red btn-flat"> Settings </a>
                            <a href="{{ route('user.logout') }}" class="waves-effect waves-red btn-flat"> Log Out </a>
                        </div>
                </div>

            @endif
    </div>
</body>
    @section('script')
        <script src="{{ asset('lib/jquery/dist/jquery.js') }}"></script>
        <script src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
        <script src="{{ asset('js/jquery.qtip.min.js') }}"></script>
        <script src="{{ asset('js/base.js') }}"></script>
    @show
</html>