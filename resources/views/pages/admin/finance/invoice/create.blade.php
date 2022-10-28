@extends('layouts.base')

@section("content")
    <h1>Facturen</h1>
    <h2>Voeg een factuur toe</h2>

    <form action=""></form>
    <form method="post" action="{{route('invoices.store')}}" class="w-75 mx-auto">
        @csrf

        <div class="form-group mb-3">
            <label for="date" class="form-label">Datum</label>
            <input type="date" name="date" class="form-control" id="date">
        </div>

        <div class="form-group mb-3">
            <label for="product" class="form-label">Product</label>
            <select class="form-select" id="product" name="product_id">
                <option selected disabled>Selecteer een product</option>
                @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group mb-3">
            <label for="company" class="form-label">Bedrijf</label>
            <select class="form-select" id="company" name="company_id">
                <option selected disabled>Selecteer een bedrijf</option>
                @foreach($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach

            </select>
        </div>

        <input type="submit" value="Save Item" class="btn btn-primary">

    </form>
@endsection
