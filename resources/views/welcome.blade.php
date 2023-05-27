@extends('layouts.app')

{{-- page name --}}
@section('page-name')
    Welcome
@endsection
@section('content')
    <main>
        <div class="jumbotron">

        </div>
        <div class="container">
            <div class="ms_container d-flex flex-column align-items-center">
                <h1 class="text-center"> Dai un occhiata alle nostre pizze</h1>
                <a class="btn btn-secondary " href="{{ route('pizza-details') }}">Mostra Pizze</a>
            </div>
        </div>
    </main>
@endsection
