@extends('layouts.base')

@section('content')

<ul class="list-group">
    <li class="list-group-item">Naam: {{$company->name}}</li>
    <li class="list-group-item">Telefoon nummer: ({{$company->country_code}}){{$company->phone}}</li>
    <li class="list-group-item">Adres: {{$company->street}} {{$company->house_number}}, {{$company->city}}</li>
    <li class="list-group-item">BKR geregistreerd op: {{$company->bkr_checked_at}}</li>
    <li class="list-group-item">Aangemaakt op: {{$company->created_at}}</li>
    <li class="list-group-item">Aangepast op: {{$company->updated_at}}</li>
</ul>

    
@endsection