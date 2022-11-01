@extends('layouts.base')

@section('content')
<h1>Edit zooi</h1>
<form action=""></form>
<form method="post" action="{{route('companies.update', $company)}}">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">Naam</label>
        <input value="{{$company->name}}"type="text" name="name" class="form-control" >
    </div>

    <div class="form-group">
        <label for="">Telefoon nummer</label>
        <input value="{{$company->phone}}" type="text" name="phone" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Straat</label>
        <input value="{{$company->street}}" type="text" name="street" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Huis nummer</label>
        <input value="{{$company->house_number}}"type="number" name="house_number" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Stad</label>
        <input value="{{$company->city}}"type="text" name="city" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Land code</label>
        <input value="{{$company->country_code}}" type="number" name="country_code" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Heeft de klant een bkr registratie?</label><br>
        <input type="checkbox" id="ja" name="bkr_checked_at" @if(isset($company->bkr_checked_at)) checked @endif>
        <label for="Ja"> Ja</label><br>
    </div>

    <div class="form-group">
        <label for="">Contact id</label>
        <input value="{{$company->contact_id}}"type="number" name="contact_id" class="form-control">
    </div>

    <div class="buttons d-flex">
        <input type="submit" value="Opslaan" class="btn btn-primary mt-5">
        <form action=""></form>
        <form method="POST" action="{{route('companies.destroy', $company)}}">
            @csrf
            @method('delete')
            <input class="btn btn-danger ms-5 mt-5" type="submit" value="Delete">
        </form>
    </div>    

</form>
@endsection