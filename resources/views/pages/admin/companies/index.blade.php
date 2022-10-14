@extends('layouts.base')

@section('content')
    <h1>test</h1>
    @if( session('message') )
        <p class="alert alert-success">{{ session('message') }}</p>
    @endif

    <ul class="list-group">
        @foreach( $companies as $company )
            <li class="list-group-item d-flex justify-content-between">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Telefoon</th>
                        <th scope="col">Straat</th>
                        <th scope="col">Huisnummer</th>
                        <th scope="col">Stad</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="{{route('companies.show', $company)}}">{{ $company->name }}</a></td>
                        <td>{{$company->country_code}}{{$company->phone}}</td>
                        <td>{{$company->street}}</td>
                        <td>{{$company->house_number}}</td>
                        <td>{{$company->city}}</td>
                    </tr>
                    </tbody>
                </table> 
                <p><a href="{{route('companies.show', $company)}}">{{ $company->title }}</a></p>
                <div class="buttons d-flex">
                    <a href="{{ route ('companies.edit', $company)}}" class="btn btn-warning">Edit</a>
                    <form action=""></form>
                    <form method="POST" action="{{route('companies.destroy', $company)}}">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
    <a href="{{route('companies.create')}}" class="btn btn-primary">Create new Item!</a>
@endsection