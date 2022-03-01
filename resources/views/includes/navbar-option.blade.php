<!-- navbar -->
    <section>
      <div class="container mt-2 ">
        <nav class="row navbar navbar-expand-lg navbar-light bg-transparent  ">
          <a href="#" class="navbar-brand">
            <img src="pesantrend-template/frontend/images/logo.png" alt="" width="150" >
          </a>
          <button 
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#test"
          >
          <span class="navbar-toggler-icon">
          </span>
          </button>

          <!-- menu -->
          <div class="collapse navbar-collapse" id="test">
            <ul class="navbar-nav h5 offset-md-7">
              <li class="nav-item mx-md-2">
                <a href="{{ route('landing') }}" class="nav-link active font-weight-bold h6">
                  Home
                </a>
              </li>
               <li class="nav-item mx-md-2">
                <a href="{{ route('cooming-soon') }}" class="nav-link font-weight-bold h6">
                  Kreatif Institut
                </a>
              </li>
               {{-- <li class="nav-item mx-md-2 ">
                <a href="{{ route('cooming-soon') }}" class="nav-link font-weight-bold h6">
                  Event
                </a>
              </li> --}}
              {{--  --}}
              <li class="nav-item dropdown mx-md-2 mx-lg-0 ">
                <a class="nav-link dropdown-toggle font-weight-bold h6" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  Event
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('checkout-alternate') }}">Forest Camp</a>
                  {{-- <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a> --}}
                </div>
              </li>
              {{--  --}}
               <li class="nav-item mx-md-2">
                <a href="{{ route('artikel') }}" class="nav-link font-weight-bold h6">
                  Artikel
                </a>
              </li>
               <li class="nav-item mx-md-2">
                <a href="{{ route('about') }}" class="nav-link font-weight-bold h6">
                  About
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>