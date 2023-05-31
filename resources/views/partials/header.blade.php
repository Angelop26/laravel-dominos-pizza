<header class=" sticky-top shadow-lg">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white">
            <div class="container">
              <a class="navbar-brand d-flex align-items-center" href="{{route('welcome')}}">
                <img src="{{Vite::asset('resources/img/1.svg')}}" alt="Logo" width="40" class="d-inline-block align-text-top">
                <div class="ms-3">Pizza Pazza</div>
            </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                  <a class="nav-link {{Route::currentRouteName()=== 'welcome' ? 'active' : ''}}" aria-current="page" href="{{route('welcome')}}">Home</a>
                  <a class="nav-link {{Route::currentRouteName()=== 'pizzas.index' ? 'active' : ''}}" href="{{route('pizzas.index')}}">Prodotti</a>
                  <a class="nav-link disabled">Lavora con noi</a>
                </div>
              </div>
            </div>
          </nav>
</header>
