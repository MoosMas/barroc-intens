@extends('layouts.base')

@section('content')
    <div class="pt-5">
        <h1>Producten</h1>
        <h2>Product bewerken</h2>

        @include('components.flash-message')

        <form method="post" action="{{route('products.update', $product)}}">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="name" class="form-label">Product naam</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$product->name}}">
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label">Beschrijving</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="5">{{$product->description}}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="price" class="form-label">Prijs</label>
                <div class="input-group">
                    <span class="input-group-text">&euro;</span>
                    <input type="text" name="price" class="form-control" value="{{$product->price}}">
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="installation_costs" class="form-label">Installatie kosten</label>
                <div class="input-group">
                    <span class="input-group-text">&euro;</span>
                    <input type="text" name="installation_costs" class="form-control" value="{{$product->installation_costs}}">
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="amount_in_stock" class="form-label">Voorraad</label>
                <input type="text" name="amount_in_stock" class="form-control" id="amount_in_stock" value="{{$product->amount_in_stock}}">
            </div>

            <div class="form-group mb-3">
                <label for="ordered" class="form-label">Besteld</label>
                <input type="number" name="ordered" class="form-control" id="ordered" value="{{$product->ordered}}">
                
                <div class="form-check mt-3 d-none" id="order-permission-container">
                    <input class="form-check-input" type="checkbox" id="order-permission">
                    <label class="form-check-label" for="order-permission">
                        Het hoofd van de afdeling heeft de bestelling goedgekeurd
                    </label>
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="category" class="form-label">Categorie</label>
                <select class="form-select" id="category" name="product_category_id">
                    <option selected disabled>Selecteer een categorie</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" @if($product->category->id == $category->id) selected @endif>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex p-2 bd-highlight">
                <form action="POST" action=""{{route('products.update', $product)}}>
                    @csrf
                    @method('PUT')
                    <input type="submit" value="Save Item" class="btn btn-primary">
                </form>

                <div class="mx-2">
                    <div class="buttons d-flex">
                        <form action=""></form>
                        <form method="POST" action="{{route('products.destroy', $product)}}">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        $( '#ordered' ).on('input', ( e ) => {
            if (Number(e.target.value) > 5000) {
                console.log('> 5000');
                $('#order-permission-container').removeClass('d-none');
            }
            else {
                $('#order-permission-container').addClass('d-none');
            }
        });
    </script>

@endsection
