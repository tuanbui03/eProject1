<nav class="navbar navbar-expand navbar-dark bg-primary " style="margin-bottom:3rem">
  <div class="container-fluid">
      <a class="navbar-brand" href="{{route('admin.homepage')}}">
          <img src="{{asset('images/logo/download.jpg')}}" alt="Logo" style="width:40px;">
      </a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item me-3">
          <div>

          </div>
      </li>
      <li class="nav-item me-3">
        <a class="nav-link" href="{{route('admin.homepage')}}">
          <i class="bi bi-house-heart-fill"></i>
          Home
        </a>
      </li>
      <li class="nav-item">
      <li class="nav-item">

      </li>
      <li class="nav-item mr-3">
        <a class="nav-link" href="#">
          <i class="bi bi-person"></i>
          {{\Illuminate\Support\Facades\Session::has('username')?
              \Illuminate\Support\Facades\Session::get('username') : ''}}
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.signout')}}">
          <i class="bi bi-box-arrow-left"></i>
          Logout
        </a>
      </li>


    </ul>
  </div>
</nav>


