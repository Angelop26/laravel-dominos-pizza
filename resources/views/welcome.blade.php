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
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Pizza {{ $pizza->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $pizza->formato }}</h6>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary">Card link</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
