@extends('layouts.app')

@section('content')
<form action="{{ route('pizzas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="text" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
        <label for="formato" class="form-label">Formato</label>
        <select id="formato" name="formato" class="form-select">
            <option></option>
            <option value="mignon">mignon</option>
            <option value="normale">normale</option>
            <option value="maxi">maxi</option>
            <option value="famiglia">famiglia</option>
            
        </select>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Crea pizza</button>
</form>
    
@endsection