@extends('layouts.base')

@section('content')
<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset($product->image_path) }}" alt="..." /></div>
        <div class="col-md-6">
            <div class="small mb-1">Barroc Intens</div>
            <h1 class="display-5 fw-bolder">{{$product->name}}</h1>
            <p class="lead">{{$product->description}}</p>
            <div class="d-flex">
                <button class="btn btn-outline-dark flex-shrink-0" type="button">
                    <i class="bi-cart-fill me-1"></i>
                    <a class="text-decoration-none text-color-black" href="{{route('contact')}}"> Vraag offerte aan! </a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection