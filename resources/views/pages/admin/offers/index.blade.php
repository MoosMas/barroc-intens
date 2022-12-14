@extends('layouts.base')

@section('content')
<div class="pt-5 d-flex justify-content-between align-items-center">
    <h1>Offertes</h1>
    <div class="w-50 d-flex justify-content-around">
        <input class="search form-control w-50" type="search" data-column="all" placeholder="Zoeken...">
        <a href="{{route('offers.create')}}" class="btn btn-primary">Nieuwe Offerte</a>
    </div>
</div>

<table id="data-table" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Bedrijf</th>
            <th>Datum aangemaakt</th>
            <th>Totaalprijs</th>
            <th class="sorter-false"></th>
        </tr>
    </thead>

    <tbody class="table-group-divider">
        @foreach($offers as $offer)
            <tr>
                <td>{{$offer->contact->company_name}}</td>
                <td>{{$offer->created_at}}</td>
                <td>&euro;{{$offer->totalCost()}}</td>
                <td class="text-center d-flex">
                    <a href="{{route('offers.edit', $offer)}}" class="btn btn-primary">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script type="module">
    $( function () {
        $( '#data-table' ).tablesorter( {
            theme: '',
            widgets: ["filter", "saveSort" ],
            widgetOptions: {
                filter_external: '.search',
                filter_defaultFilter: { 1: '~{query}' },
                filter_columnFilters: false,
                filter_saveFilters: true,
                saveSort: true,
            }
        } );
    });
</script>
@endsection

