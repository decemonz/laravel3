<nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
  <a class="navbar-brand" href="{{ route('reviews.index')}}"> <img src="/images/indie.png" alt="" style="width:90px;height:50px;"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('reviews.index')}}">Reviews<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('profile')}}">User Profile<span class="sr-only">(current)</span></a>
      </li>
 @guest
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('login')}}">login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="{{ route('register')}}">singup</a>
      </li>
      @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">your name: {{ Auth::user()->name }}</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">logout</a>
          <form id="logout-form" action="{{ route('logout')}}" method="post" style="display:none;">
            @csrf
          </form>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      @endguest
    </ul>

  </div>
</nav>
