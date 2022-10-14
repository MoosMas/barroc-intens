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
        <label for="">Contact id</label>
        <input value="{{$company->contact_id}}"type="number" name="contact_id" class="form-control">
    </div>

    <input type="submit" value="Opslaan" class="btn btn-primary">

</form>
@endsection