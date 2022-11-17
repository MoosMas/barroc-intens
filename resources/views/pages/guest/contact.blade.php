@extends('layouts.base')

@section('content')
    <div class="pt-5 container mt-3 mb-3">
        @include('components.flash-message')
        <form class="row g-3 w-50 mx-auto" action="{{route('contact.store')}}" method="POST">
            @csrf
            
            <h2>Neem contact met ons op voor de offerte</h2>
            <div class="col-md-6">
                <label for="name" class="form-label">Naam</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="col-md-6">
                <label for="company_name" class="form-label">Bedrijfsnaam</label>
                <input type="text" class="form-control" id="company_name" name="company_name">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@hotmail.com">
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Telefoonnummer</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="06123456789">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Bericht</label>
                <textarea class="form-control" id="message" rows="5" name="message"></textarea>
            </div>
            <div class="col-12">
                <input type="submit" class="btn btn-primary" value="Stuur offerte">
            </div>
        </form>
    </div>

@endsection
