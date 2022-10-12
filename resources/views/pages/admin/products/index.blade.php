@extends('layouts.base')

@section('content')

    @foreach( $products as $product )
        <div class="product">
            <img src="img/logo.png" alt="logo">
            <h5>{{ $product->name }} </h5>
            <p>{{ $product->description }}</p>

            <button type="button" class="btn btn-dark">Dark</button>
        </div>
    @endforeach
@endsection
