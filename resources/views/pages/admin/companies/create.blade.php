@extends('layouts.base')

@section("content")
        <h1>Bedrijf aanmaken</h1>
        
        <form method="post" action="{{route('companies.store')}}">
            @csrf
            <div class="form-group mb-3">
                <label for="">Naam</label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group mb-3">
                <label for="">Telefoonnummer</label>
                <input type="text" name="phone" class="form-control">
            </div>

            <div class="form-group row mb-3">
                <div class="col-8">
                    <label for="">Straat</label>
                    <input type="text" name="street" class="form-control">
                </div>

                <div class="col-4">
                    <label for="">Huisnummer</label>
                    <input type="number" name="house_number" class="form-control">
                </div>
            </div>
            
            <div class="form-group mb-3">
                <label for="">Stad</label>
                <input type="text" name="city" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="">Heeft de klant een BKR-registratie?</label><br>
                <input type="checkbox" id="ja" name="bkr_checked_at">
                <label for="Ja"> Ja</label><br>
            </div>

            <div class="form-group mb-3">
                <label for="">Land code</label>
                <input type="number" name="country_code" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="">Contact id</label>
                <input type="number" name="contact_id" class="form-control">
            </div>

            <input type="submit" value="Opslaan" class="btn btn-primary">

        </form>
@endsection        