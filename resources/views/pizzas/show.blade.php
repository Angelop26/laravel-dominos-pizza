@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="https://image.spreadshirtmedia.net/image-server/v1/products/T1459A839PA4459PT28D172562359W8333H10000/views/1,width=550,height=550,appearanceId=839,backgroundColor=F2F2F2/gioco-sulla-scatola-di-pizza-vuota-umorismo-da-scherzo-del-giocatore-adesivo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$pizza->name}}</h5>
              <p class="card-subtitle">&euro;{{number_format($pizza->price, 2, ',', '.')}}</p>
              <p class="card-text">
                {{$pizza->formato}} <br>
                {{$pizza->description}}
            </p>
              <a href="{{route('pizzas.index')}}" class="btn btn-primary">Torna al menù</a>
              <a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
              <a href="#" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></a>
            </div>
          </div>
    </div>
@endsection