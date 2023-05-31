@extends('layouts.app')

{{-- page name --}}
@section('page-name')
    Our Pizzas
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row row-cols-4">
                @foreach ($pizzas as $pizza)
                    <div class="col  mb-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <img class="card-img-top"
                                    src="https://image.spreadshirtmedia.net/image-server/v1/products/T1459A839PA4459PT28D172562359W8333H10000/views/1,width=550,height=550,appearanceId=839,backgroundColor=F2F2F2/gioco-sulla-scatola-di-pizza-vuota-umorismo-da-scherzo-del-giocatore-adesivo.jpg"
                                    alt="pizza-img">
                                <h5 class="card-title">Pizza {{ $pizza->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $pizza->formato }}</h6>
                                <a href="{{route('pizzas.show', $pizza->id)}}" class="btn btn-primary mt-auto mb-3">Dettagli Pizza</a>
                                 <a href="{{route('pizzas.edit', $pizza->id)}}" class="btn btn-warning mt-auto"><i class="fa-solid fa-wand-magic-sparkles"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
