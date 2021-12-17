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
                <a href="{{ route('landing') }}" class="nav-link active">
                  Home
                </a>
              </li>
               <li class="nav-item mx-md-2">
                <a href="{{ route('cooming-soon') }}" class="nav-link">
                  Program
                </a>
              </li>
               <li class="nav-item mx-md-2">
                <a href="{{ route('cooming-soon') }}" class="nav-link">
                  Event
                </a>
              </li>
               <li class="nav-item mx-md-2">
                <a href="{{ route('cooming-soon') }}" class="nav-link">
                  Artikel
                </a>
              </li>
               <li class="nav-item mx-md-2">
                <a href="{{ route('cooming-soon') }}" class="nav-link">
                  About
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>