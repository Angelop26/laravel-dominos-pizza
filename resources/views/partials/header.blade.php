{{-- <header class=" sticky-top shadow-lg">
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
</header> --}}


<div class="header">
  <div class="button">
    <div class="box">B</div>
    <div class="box">O</div>
    <div class="box">O</div>
    <div class="box">K</div>
    <div class="box">S</div>
</div>
{{-- LOGO --}}
  <img src="{{Vite::asset('resources/img/2.svg')}}" alt="Logo" class="logo">


  {{-- ADMIN --}}
  <button class="Btn">
  
    <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
    
    <div class="text">Admin</div>
  </button>
  
  
  
</div>


