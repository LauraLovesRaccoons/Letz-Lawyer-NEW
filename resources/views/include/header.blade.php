<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">


      {{-- the name of the nav bar --}}
      <a class="navbar-brand" href="#">{{config('app.name')}}</a>


      {{-- the first button  --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarText">


        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Home</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('registration')}}">Login</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="#">Registration</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout">Logout</a>
          </li>
        </ul>


        <span class="navbar-text">
          About us
        </span>


      </div>
    </div>
  </nav>