@extends('layouts.base')

@section('content')

    @foreach( $products as $product )
        <div class="product">
            <img src="img/logo.png" alt="logo">
            <h5>{{ $product->name }} </h5>
            <p>{{ $product->description }}</p>

            <a href="{{route('products.create')}}"><button type="button" class="btn btn-dark">Aanmaken</button></a>
            <a href="{{route('products.edit', $product)}}"><button type="button" class="btn btn-info">Bewerken</button></a>
            <form method="POST" action="{{route('products.destroy', $product)}}">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Verwijderen">
            </form>
        </div>
    @endforeach
@endsection
