@extends('layouts.base')

@section('content')
    <h1>Facturen aansluitenkosten</h1>
    @if( session('message') )
        <p class="alert alert-success">{{ session('message') }}</p>
    @endif

    <ul class="list-group">

            <li class="list-group-item d-flex justify-content-between">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Betaald op</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="buttons">
                    <a href="" class="btn btn-warning">Edit</a>
                </div>
            </li>

    </ul>
    <a href="{{route('invoices.create')}}" class="btn btn-primary">Maak nieuwe factuur</a>
@endsection
