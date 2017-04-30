<nav class="navbar navbar-default">
  <div class="container-fluid">
    <a class="navbar-brand hidden-xs" href="#">Is It Quiz Day?</a>
     <ul class="nav navbar-nav">
       <li></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img width="25" height="25" src="{{ Auth::user()->avatar }}" alt="Auth::user()->name" />
            {{ Auth::user()->name }}
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            @else
                <a style="margin-left:5px; margin-right:5px;" class="btn btn-info navbar-btn" href="/socialauth/facebook">
                    <i class="fa fa-facebook fa-fw" aria-hidden="true"></i> Log in with facebook
                </a>
            @endif
          </ul>
        </li>
      </ul>
  </div><!-- /.container-fluid -->
</nav>