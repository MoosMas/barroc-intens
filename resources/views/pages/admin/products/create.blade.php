@extends('layouts.base')

@section('content')
    <h1>Producten</h1>
    <h2>Voeg een product toe</h2>
    <form method="post" action="{{route('products.store')}}">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" >
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="">prio</label>
            <input type="number" name="prio" class="form-control">
        </div>

        <input type="submit" value="Save Item" class="btn btn-primary">

    </form>
@endsection