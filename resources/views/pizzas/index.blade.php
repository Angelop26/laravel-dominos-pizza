@extends('layouts.app')

{{-- page name --}}
@section('page-name')
    Our Pizzas
@endsection
@section('content')
<main>
    <div class="container">

        <div class="text-end">
            <button class="cssbuttons-io-button"> <a href="{{route('pizzas.create')}}">Crea la tua pizza
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg>
                </a>
                </div>
              </button>
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
