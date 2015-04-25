 <nav class="row purple darken-4" id="submenu">

    <div class="nav-wrapper col s12 m12 l10 offset-l1">
        <a class="brand-logo" href="{{ route('pages.home') }}">Housing</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">

      @if(Auth::check())
         <li><a href="{{ route('user.logout') }}" >Log out</a></li>
      @else
          <li><a href="{{ route('user.facebook') }}" >Login with Facebook</a></li>
      @endif
      </ul>
      <ul class="side-nav" id="mobile-demo">
      <!-- Mobile Links -->
       <!--  <li><a href="sass.html">Sass</a></li> -->
      @if(Auth::check())
        <li><a href="{{ route('user.logout') }}" >Log out</a></li>
      @else
        <li><a href="#" >Sign Up</a></li>
        <li><a href="#" >Login</a></li>
      @endif
      </ul>
    </div>
  </nav>

