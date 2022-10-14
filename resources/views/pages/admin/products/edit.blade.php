@extends('layouts.base')

@section('content')

    <form action=""></form>
    <form method="post" action="{{route('products.update', $product)}}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <div class="p-3"></div>
            <label for="">Title</label>
            <input value="{{$product->name}}" type="text" name="name" class="form-control" >
        </div>
        <div class="p-3"></div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" cols="30" rows="10">{{$product->description}}</textarea>
        </div>

        <div class="p-3"></div>
        <div class="form-group">
            <label for="">price</label>
            <input value="{{$product->price}}" type="number" name="price" class="form-control">
        </div>

        <div class="form-group mb-3">
            <select class="form-select" id="category" name="product_category_id">
                <option selected disabled>Selecteer een categorie</option>
                @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->product_category_id}}</option>
            </select>
            @endforeach
        </div>

        <div class="p-3"></div>
        <input type="submit" value="Update Item" class="btn btn-primary">
        <div class="p-3"></div>

    </form>
@endsection
