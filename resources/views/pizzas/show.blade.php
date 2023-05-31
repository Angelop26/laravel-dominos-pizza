@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-capitalize mx-auto" style="width: 300px">
            <img src="{{$pizza->image}}" class="card-img-top" alt="...">
            <div class="card-body  text-center">
              <h5 class="card-title text-capitalize">Pizza {{$pizza->name}}</h5>
              <p class="card-subtitle">&euro;{{number_format($pizza->price, 2, ',', '.')}}</p>
              <p class="card-text">
                {{$pizza->formato}} <br>
                {{$pizza->description}}
            </p>
              <a href="{{route('pizzas.index')}}" class="btn btn-primary w-100 mb-3">Torna al menù</a>
              <a href="{{route('pizzas.edit', $pizza->id)}}" class="btn btn-warning w-100 mb-3"><i class="fa-solid fa-pen-to-square"></i></a>
            </div>
          </div>
    </div>
@endsection