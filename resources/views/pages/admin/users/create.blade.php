@extends('layouts.base')

@section('content')
    <div class="pt-5">
        <h1>Producten</h1>
        <h2>Voeg een product toe</h2>
        <form action=""></form>
        <form method="post" action="{{route('users.store')}}">

            @csrf

            <div class="form-group mb-3">
                <label for="name" class="form-label">Naam</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>

            <div class="form-group mb-3">
                <label for="department" class="form-label">Afdeling</label>
                <select class="form-select" id="role_id" name="role_id">
                    <option selected disabled>Selecteer een afdeling</option>
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->department}}: {{$role->function}}</option>
                    @endforeach
                </select>
            </div>




            <input type="submit" value="Save Item" class="btn btn-primary">

        </form>
    </div>

@endsection
