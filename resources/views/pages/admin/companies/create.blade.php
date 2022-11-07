@extends('layouts.base')

@section("content")
    <div class="pt-5">
        <h1>Bedrijf aanmaken</h1>

        <form method="post" action="{{route('companies.store')}}">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Naam</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group mb-3">
                <label for="phone">Telefoonnummer</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>

            <div class="form-group row mb-3">
                <div class="col-8">
                    <label for="street">Straat</label>
                    <input type="text" name="street" class="form-control" id="street">
                </div>

                <div class="col-4">
                    <label for="house_number">Huisnummer</label>
                    <input type="number" name="house_number" class="form-control" id="house_number">
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="city">Stad</label>
                <input type="text" name="city" class="form-control" id="city">
            </div>

            <div class="form-group mb-3">
                <label for="bkr">Heeft de klant een BKR-registratie?</label><br>
                <input type="checkbox" id="bkr" name="bkr_checked_at">
                <label for="bkr"> Ja</label><br>
            </div>

            <div class="form-group mb-3">
                <label for="country_code">Land code</label>
                <input type="number" name="country_code" class="form-control" id="country_code">
            </div>

            <div class="form-group mb-3">
                <label for="contact_id">Contact id</label>
                <input type="number" name="contact_id" class="form-control" id="contact_id">
            </div>

            <input type="submit" value="Opslaan" class="btn btn-primary">

        </form>
    </div>

@endsection
