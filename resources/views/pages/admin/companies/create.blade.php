@extends('layouts.base')

@section("content")
        <h1>Voeg zooi toe</h1>

        <form action=""></form>
        <form method="post" action="{{route('companies.store')}}">
            @csrf
            <div class="form-group">
                <label for="">Naam</label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label for="">Telefoon nummer</label>
                <input type="text" name="phone" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Straat</label>
                <input type="text" name="street" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Huis nummer</label>
                <input type="number" name="house_number" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Stad</label>
                <input type="text" name="city" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Land code</label>
                <input type="number" name="country_code" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Contact id</label>
                <input type="number" name="contact_id" class="form-control">
            </div>

            <input type="submit" value="Opslaan" class="btn btn-primary">

        </form>
@endsection        