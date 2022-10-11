@extends('layouts.base')

@section('content')
    <div class="px-5 pt-5">
        <h1>Overzicht klanten</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti magnam facilis quasi ducimus. Exercitationem impedit unde autem, a nam voluptate inventore perspiciatis et atque est iusto nemo, officiis facilis modi!</p>
        <a href="/welcome" class="btn btn-warning  float-end mb-5">Go somewhere</a>
    </div>    
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Voornaam</th>
                <th scope="col">Achternaam</th>
                <th scope="col">Bedrijf</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Sam</td>
                <td>Brands</td>
                <td>Gratis bier LLC</td>
                <td>Afgeleverd</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Toon</td>
                <td>van der Lely</td>
                <td>Apple Inc.</td>
                <td>Afgeleverd</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Jennifer</td>
                <td>Willems</td>
                <td>Windows sucks LLC</td>
                <td>Nog niet afgeleverd</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Joey</td>
                <td>Huijben</td>
                <td>Iphone is de beste Inc.</td>
                <td>Nog niet afgeleverd</td>
            </tr>
            </tbody>
        </table>
@endsection

