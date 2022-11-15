@extends('layouts.base')

@section('content')

<div class="text-center container py-5">
    <h4 class="mt-4 mb-5"><strong>Producten</strong></h4>

    <div class="row">
      @foreach($products as $product)
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="{{ asset($product->image_path) }}" class="w-100" />
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
          </div>
          <div class="card-body">
              <h5 class="card-title mb-3">{{ $product->name }}</h5>
              <p class="table-longtext-column">{{Str::limit($product->description, 80)}}</p>
              <a class='btn btn-primary' href="{{route('product', $product)}}">Meer info!</a>
              <button class="btn btn-outline-dark flex-shrink-0" type="button">
                  <i class="bi-cart-fill me-1"></i>
                  <a class="text-decoration-none text-color-black" href="{{route('contact')}}"> Vraag offerte aan! </a>
              </button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection

