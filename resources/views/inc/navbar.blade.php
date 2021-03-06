<nav class="navbar navbar-expand-md navbar-dark  bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="/icon/web.png" alt="Basic Website" srcset="" width="50px" height="50px"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::route()->getName() === 'about' ? 'active' : ''}}" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::route()->getName() === 'contact' ? 'active' : ''}}" href="{{route('contact')}}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::route()->getName() === 'get-messages' ? 'active' : ''}}" href="{{route('get-messages')}}">See contact messages</a>
        </li>
      </ul>
    </div>
  </div>
</nav>