@extends('layouts.app')

{{-- page name --}}
@section('page-name')
    Our Pizzas
@endsection
@section('content')
<main>
    <div class="container">
        <div class="text-end">
            <a href="{{route('pizzas.create')}}" class="btn btn-link">Crea la tua pizza</a>
        </div>
        <div class="row row-cols-4">
            @foreach ($pizzas as $pizza)
                <div class="col  mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <img class="card-img-top"
                                src="{{$pizza->image}}"
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
