@extends('layouts.app')

@section('content')
<div class="container text-white">
    <form action="{{ route('pizzas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>
    
        <div class="mb-3">
            <label for="formato" class="form-label">Formato</label>
            <select id="formato" name="formato" class="form-select">
                <option></option>
                <option value="mignon">Mignon</option>
                <option value="normale">Normale</option>
                <option value="maxi">Maxi</option>
                <option value="famiglia">Famiglia</option>
                
            </select>
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            @foreach ($ingredients as $ingredient)   
            <input type="checkbox" class="btn-check" @checked(in_array($ingredient->id, old('ingredients_id', []))) value="{{$ingredient->id}}" name="ingredients[]" id="ingredient/{{$ingredient->id}}">
            <label class="btn btn-outline-primary"  for="ingredient/{{$ingredient->id}}">{{$ingredient->name}}</label>
            @endforeach
        </div>
    
        <button class="btn btn-primary" type="submit">Crea pizza</button>
    </form>
</div>
    
@endsection