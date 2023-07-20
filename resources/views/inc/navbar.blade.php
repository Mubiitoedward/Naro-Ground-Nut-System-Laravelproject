<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<nav class="navbar navbar-expand-lg navbar-light bg-success shadow sm-auto">
  <div class="container">
      <a class="text-light" href="{{ url('/') }}">
          {{ config('app.name', 'Naro GroundNut System') }}
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class=" nav navbar-nav navbar-right ms-auto">
              <!-- Authentication Links -->
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->UserName }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>






{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              Dashboard
            </a>
          </li>
          <li   aria-labelledby="ordersDropdown">
            <a class="nav-link dropdown-toggle" href="#">
              Registration
            </a>
            <div class="dropdown-menu" aria-labelledby="Registration">
              <a class="dropdown-item" href="{{('farmerRecords.farmerRecords') }}">Farmers</a>
              <a class="dropdown-item" href="#">Multipliers</a>
              <a class="dropdown-item" href="#">ServiceProviders</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Farm Management
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Paste And Disease
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
               Market Place
            </a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
             Ask The Expert
          </a>
        </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-10 ml-sm-auto">

    </main>
  </div>
  
</div> 



  --}}
