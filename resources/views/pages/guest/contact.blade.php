@extends('layouts.base')

@section('content')
    <div class="container mt-3 mb-3">
        <form class="row g-3 w-50 mx-auto">
            <h2>Neem contact met ons op voor de offerte</h2>
            <div class="col-md-6">
                <label for="inputFirstName" class="form-label">Voornaam</label>
                <input type="text" class="form-control" id="inputFirstName">
            </div>
            <div class="col-md-6">
                <label for="inputLastName" class="form-label">Achternaam</label>
                <input type="text" class="form-control" id="inputLastName">
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="example@hotmail.com">
            </div>
            <div class="col-md-6">
                <label for="inputPhonenumber" class="form-label">Telefoonnummer</label>
                <input type="tel" class="form-control" id="inputPhonenumber" placeholder="06123456789">
            </div>
            <div class="col-12">
                <label for="inputCompanyName" class="form-label">Bedrijfsnaam</label>
                <input type="text" class="form-control" id="inputCompanyName">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Opmerkingen</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Stuur offerte</button>
            </div>
        </form>
    </div>

@endsection
