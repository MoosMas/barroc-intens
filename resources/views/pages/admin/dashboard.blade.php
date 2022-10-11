@extends('layouts.base')

@section('content')
    <div class="px-5 pt-5">
        <h1>Lorem ipsum</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti magnam facilis quasi ducimus. Exercitationem impedit unde autem, a nam voluptate inventore perspiciatis et atque est iusto nemo, officiis facilis modi!</p>
        <a href="/welcome" class="btn btn-warning  float-end mb-5">Go somewhere</a>
    </div>    
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
@endsection

