@extends('layouts.base')

@section('content')
    <h1>Producten</h1>
    <h2>Product bewerken</h2>
    <form action=""></form>
    <form method="post" action="{{route('users.update', $role)}}">
        @csrf
        @method('PUT')




        <div class="form-group mb-3">
            <label for="category" class="form-label">Categorie</label>
            <select class="form-select" id="category" name="product_category_id">
                <option selected disabled>Selecteer een categorie</option>
                @foreach($roles as $role)
                    <option value="{{$role->id}}" @if($product->category->id == $category->id) selected @endif>{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="buttons d-flex">
            <a href="{{ route ('products.edit', $product)}}" class="btn btn-warning">Edit</a>
            <form action=""></form>
            <form method="POST" action="{{route('products.destroy', $product)}}">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
        </div>

        <input type="submit" value="Save Item" class="btn btn-primary">

    </form>
@endsection
