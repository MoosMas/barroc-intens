@extends('layouts.base')

@section('content')
<h1>Bedrijf bewerken</h1>
<form action=""></form>
<form method="post" action="{{route('companies.update', $company)}}">
    @csrf
    @method('put')
    <div class="form-group mb-3">
        <label for="name">Naam</label>
        <input value="{{$company->name}}" type="text" name="name" class="form-control" id="name">
    </div>

    <div class="form-group mb-3">
        <label for="phone">Telefoonnummer</label>
        <input value="{{$company->phone}}" type="text" name="phone" class="form-control" id="phone">
    </div>

    <div class="form-group row mb-3">
        <div class="col-8">
            <label for="street">Straat</label>
            <input value="{{$company->street}}" type="text" name="street" class="form-control" id="street">
        </div>

        <div class="col-4">
            <label for="house_number">Huisnummer</label>
            <input value="{{$company->house_number}}" type="number" name="house_number" class="form-control"
                   id="house_number">
        </div>
    </div>

    <div class="form-group mb-3">
        <label for="city">Stad</label>
        <input value="{{$company->city}}"type="text" name="city" class="form-control" id="city">
    </div>

    <div class="form-group mb-3">
        <label for="country_code">Land code</label>
        <input value="{{$company->country_code}}" type="number" name="country_code" class="form-control" id="country_code">
    </div>

    <div class="form-group mb-3">
        <label for="bkr">Heeft de klant een BKR-registratie?</label><br>
        <input type="checkbox" id="bkr" name="bkr_checked_at" @if(isset($company->bkr_checked_at)) checked @endif>
        <label for="bkr"> Ja</label><br>
    </div>

    <div class="form-group mb-3">
        <label for="contact_id">Contact id</label>
        <input value="{{$company->contact_id}}" type="number" name="contact_id" class="form-control" id="contact_id">
    </div>

    <div class="buttons d-flex">
        <input type="submit" value="Opslaan" class="btn btn-primary mt-5">
        <form method="POST" action="{{route('companies.destroy', $company)}}">
            @csrf
            @method('delete')
            <input class="btn btn-danger ms-5 mt-5" type="submit" value="Delete">
        </form>
    </div>    

</form>
@endsection