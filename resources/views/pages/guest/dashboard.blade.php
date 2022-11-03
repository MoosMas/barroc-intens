@extends('layouts.base')

@section('content')
    <div class="px-5 pt-5">
        <h1>Overzicht</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti magnam facilis quasi ducimus. Exercitationem impedit unde autem, a nam voluptate inventore perspiciatis et atque est iusto nemo, officiis facilis modi!</p>
        <a href="/welcome" class="btn btn-warning  float-end mb-5">Go somewhere</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Storingsaanvragen</th>
            <th scope="col">Facturen</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="">Test</a></td>
            <td><a href="">Test</a></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
@endsection

