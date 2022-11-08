@extends('layouts.base')

@section("content")
<<<<<<< Updated upstream
    <div class="pt-5">
        <h1>Facturen</h1>
        <h2>Voeg een factuur toe</h2>

        <form action=""></form>
        <form method="post" action="{{route('invoices.store')}}" class="w-75 mx-auto">
            @csrf

            <div class="form-group mb-3">
                <label for="date" class="form-label">Datum</label>
                <input type="date" name="date" class="form-control" id="date">
            </div>

            <div class="form-group mb-3" x-data="{}">

                <table class="table" id="products-table" >
                    <thead>
=======
    <h1 class="pt-5">Facturen</h1>
    <h2>Voeg een factuur toe</h2>

    <form action=""></form>
    <form method="post" action="{{route('invoices.store')}}" class="w-75 mx-auto">
        @csrf

        <div class="form-group mb-3">
            <label for="date" class="form-label">Datum</label>
            <input type="date" name="date" class="form-control" id="date">
        </div>

        <div class="form-group mb-3" x-data="{}">
            
            <table class="table" id="products-table" >
                <thead>
>>>>>>> Stashed changes
                    <tr>
                        <td class="form-label ps-0">Producten</td>
                        <th class="text-center">Aantal</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <template id="products-template" x-data="{count}">

                        <tr>
                            <td class="products-fields-container col-8" :id="'products-fields-template-'+count">
                                <select class="form-select select-product" :name="'products['+ count +'][product_id]'">
                                    <option selected disabled>Selecteer een product</option>

                                    @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach

                                </select>
                            </td>

                            <td x-data="{amount: 0}">
                                <div class="input-group w-75 mx-auto">
                                    <button class="btn btn-outline-secondary" type="button"
                                            @click="if(amount > 0) amount--">-
                                    </button>
                                    <input type="text" :name="'products['+ count +'][amount]'" x-model="amount"
                                           class="form-control text-center">
                                    <button class="btn btn-outline-secondary" type="button" @click="amount++">+
                                    </button>
                                </div>
                            </td>

                            <td>
                                <button class="btn btn-outline-danger" type="button" @click="removeProduct($event)">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </template>
                    </tbody>

                </table>

                <button @click="addProduct()" type="button" class="btn btn-outline-primary">Product toevoegen</button>

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

        <script>
            let container = document.getElementById('products-table');
            let template = document.getElementById('products-template');
            let count = -1;

            function addProduct(){
                let clone = template.content.cloneNode(true)
                container.appendChild(clone);
                count++;
            }

            function removeProduct(e){
                $(e.currentTarget).parents('tr').remove();
            }

            $( document ).ready(() => {
                addProduct();
            });
        </script>
    </div>

@endsection
