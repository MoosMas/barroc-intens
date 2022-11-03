@extends('layouts.base')

@section('content')
    <h1>Gebruikers</h1>
    <h2>Gebruikers bewerken</h2>
    <form action=""></form>
    <form method="post" action="{{route('users.update', $user)}}">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name" class="form-label">Naam</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
        </div>

        <div class="form-group mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}">
        </div>

        <div class="form-group mb-3">
            <label for="category" class="form-label">functie</label>
            <select class="form-select" id="role" name="role_id">
                <option selected disabled>Selecteer een categorie</option>
                @foreach($roles as $role)

                    <option value="{{$role->id}}" @if($user->role_id == $role->id) selected @endif>{{$role->department}}: {{$role->function}}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex p-2 bd-highlight">
        <form action="POST" action=""{{route('users.update', $user)}}>
            @csrf
            @method('PUT')
            <input type="submit" value="Save Item" class="btn btn-primary">
        </form>

        <div class="mx-2">
        <div class="buttons d-flex">
            <form action=""></form>
            <form method="POST" action="{{route('users.destroy', $user)}}">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
        </div>
        </div>
        </div>

    </form>
@endsection
