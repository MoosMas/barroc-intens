@extends('layouts.base')

@section('content')
<div class="pt-5">
    <form method="post" action="{{route('contacts.update', $contact)}}">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name" class="form-label">Naam</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$contact->name}}">
        </div>
        
        <div class="form-group mb-3">
            <label for="company_name" class="form-label">Bedrijfsnaam</label>
            <input type="text" name="company_name" class="form-control" id="company_name" value="{{$contact->company_name}}">
        </div>

        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{$contact->email}}">
        </div>

        <div class="form-group mb-3">
            <label for="phone" class="form-label">Telefoonnummer</label>
            <input type="text" name="phone" class="form-control" id="phone" value="{{$contact->phone}}">
        </div>

        <div class="form-group mb-3">
            <label for="message">Bericht</label>
            <textarea id="message" name="message" class="form-control" rows="4" cols="50" >{{$contact->message}}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="handled_at">Afgehandeld</label>
            <input type="date" id="handled_at" name="handled_at" class="form-control"
                   value="{{$contact->handled_at ? $contact->handled_at->toDateString() : ''}}" >
        </div>

        <input type="submit" value="Opslaan" class="btn btn-primary mb-3">


</div>

@endsection
