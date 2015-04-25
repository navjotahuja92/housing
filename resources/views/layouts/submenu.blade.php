 <nav class="row blue-grey darken-2" id="ed-submenu">

    <div class="nav-wrapper col s12 m12 l10 offset-l1">
        <!-- Dropdown Trigger -->
      <a class='dropdown-button btn white blue-grey-text' href='#' data-activates='dropdown1'>Subject<i class="mdi-action-system-update-tv right"></i></a>

      <!-- Dropdown Structure -->
      <ul id='dropdown1' class='dropdown-content blue-grey-text' data-beloworigin="true" >
        <li><a href="{{ route('topic.view', 'physics')}}">Physics</a></li>
        <li><a href="{{ route('topic.view', 'chemistry')}}">Chemistry</a></li>
        <!-- <li class="divider"></li> -->
        <li><a href="{{ route('topic.view', 'math')}}">Math</a></li>
      </ul>
       <a class='white-text btn-flat btn-waves waves-effect' href='#'> 
              Help Others</a>
       <a class='white-text btn-flat btn-waves waves-effect' href='{{ route('topic.view') }}'>Topics</a>
      <ul class="right hide-on-med-and-down">
       <form method="GET" action="{{ route('question.search')}}">
        <li>
        <div class="input-field">
          <input id="search" type="text" name="query" required placeholder="Search">
        </div>
        <div class="input-field">

        </div>
      </li>
      <li><button type="submit" class="btn-flat white-text"><li><i class="mdi-action-search"></i></li></button></li>
      </form>
      </ul>
      <!-- <ul class="side-nav" id="mobile-demo"> -->
      <!-- Mobile Links -->
       <!--  <li><a href="sass.html">Sass</a></li> -->
      <!-- </ul> -->
    </div>
  </nav>