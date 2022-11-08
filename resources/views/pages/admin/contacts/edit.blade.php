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
            <label for="company_name" class="form-label">Bedrijfs naam</label>
            <input type="text" name="company_name" class="form-control" id="company_name" value="{{$contact->company_name}}">
        </div>

        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{$contact->email}}">
        </div>

        <div class="form-group mb-3">
            <label for="phone" class="form-label">Telefoon nummer</label>
            <input type="text" name="phone" class="form-control" id="phone" value="{{$contact->phone}}">
        </div>

        <div class="form-group mb-3">
            <p><label for="message">uw bericht:</label></p>
            <textarea id="message" name="message" rows="4" cols="50"></textarea>
        </div>

        <div class="form-group">
            <label for="">afgehandeld</label>
            <input value="{{$contact->handled_at ?? '-'}}" type="date" name="handled_at" class="form-control">
        </div>

        <input type="submit" value="Opslaan" class="btn btn-primary mb-3">


</div>

@endsection
