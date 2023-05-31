@extends('layouts.app')

{{-- page name --}}
@section('page-name')
    Our Pizzas
@endsection
@section('content')
<main>
    <div class="container">
        <div class="text-end">
            <a href="{{route('pizzas.create')}}" class="btn btn-primary my-3">Crea la tua pizza</a>
        </div>
        <div class="row row-cols-4">
            @foreach ($pizzas as $pizza)
                <div class="col  mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column text-capitalize">
                            <img class="card-img-top mb-3 rounded-5"
                                src="{{$pizza->image}}"
                                alt="pizza-img">
                            <h5 class="card-title text-center">Pizza {{ $pizza->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center">{{ $pizza->formato }}</h6>
                            <a href="{{route('pizzas.show', $pizza->id)}}" class="btn btn-primary mt-auto mb-3">Dettagli Pizza</a>
                            <a href="{{route('pizzas.edit', $pizza->id)}}" class="btn btn-warning mt-auto mb-3"><i class="fa-solid fa-wand-magic-sparkles"></i></a>
                            
                            <form action="{{route('pizzas.destroy', $pizza->id)}}" class="w-100" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger ms_btn_cancel w-100 mb-3" data-pizza-title="{{$pizza->name}}">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @include('partials.modal_deleteform')
    </div>
</main>
@endsection
