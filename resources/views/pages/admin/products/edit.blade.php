@extends('layouts.base')

@section('content')

    <form action=""></form>
    <form method="post" action="{{route('products.update', $product)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Title</label>
            <input value="{{$product->name}}" type="text" name="name" class="form-control" >
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$product->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="">price</label>
            <input value="{{$product->price}}" type="number" name="price" class="form-control">
        </div>

        <input type="submit" value="Update Item" class="btn btn-primary">

    </form>
@endsection
