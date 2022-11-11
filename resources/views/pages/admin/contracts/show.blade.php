@extends('layouts.base')

@section('content')
<div class="d-flex">
    <div class="p-2 flex-fill">
        <ul class="list-group pt-5">
            <li class="list-group-item d-flex justify-content-between align-items-start ">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Bedrijf</div>
                    {{$contract->company->name}}
                </div>
            </li>
    
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Start datum</div>
                    {{$contract->start_date}}
                </div>
            </li>
    
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Eind datum</div>
                    {{$contract->end_date}}
                </div>
            </li>
    
        </ul>
    </div>
    <div class="p-2 flex-fill pt-5">    
        <div class="ms-2 me-auto">
            <div class="fw-bold">Producten</div>
            <ul class="list-group">
                @foreach ($contract->products as $product)
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Prijs</th>
                        <th scope="col">Instalatie kosten</th>
                        <th scope="col">Aantal beschikbaar</th>
                        <th scope="col">Aantal besteld</th>
                        <th scope="col">Product catogorie</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{$product->name}}</th>
                            <td>&euro;{{$product->price}}</td>
                            <td>&euro;{{$product->installation_costs}}</td>
                            <td>{{$product->amount_in_stock}}@if($product->amount_in_stock < 20)<span class="text-danger fw-bold"><i class="px-2 bi bi-exclamation-triangle"></i></span> @endif</td>
                            <td>{{$product->ordered}}</td>
                            <td>{{$product->catagory}}</td>
                        </tr>
                    </tbody>
                </table>
                @endforeach
            </ul>
        </div>
    </div>        
</div>    
@endsection

