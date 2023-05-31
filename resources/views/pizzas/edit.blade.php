@extends('layouts.app')

@section('content')

<div class="container text-white">

        <div class="my-3">
            <a class="btn btn-primary" href="{{ route('pizzas.index') }}">Vai al menù</a>
        </div>

        <h2>Modifica la pizza: {{ $pizza->name }}</h2>

        <form action="{{ route('pizzas.update', $pizza->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" class="form-control" id="image" name="image"
                    value="{{ $pizza->image }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $pizza->name }}">
            </div>

            <div class="mb-3">
                <label for="formato" class="form-label">Formato</label>
                <select id="formato" name="formato" class="form-select">
                    <option></option>
                    <option @selected($pizza->formato === 'mignon') value="mignon">mignon</option>
                    <option @selected($pizza->formato === 'normale') value="normale">normale</option>
                    <option @selected($pizza->formato === 'maxi') value="maxi">maxi</option>
                    <option @selected($pizza->formato === 'famiglia') value="famiglia">famiglia</option>
                    
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price"
                    value="{{ $pizza->price }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $pizza->description }}</textarea>
            </div>

            <button class="btn btn-primary" type="submit">Applica cambiamenti</button>
        </form>
    </div>
    
@endsection