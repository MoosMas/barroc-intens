@extends('layouts.base')

@section('content')
<div class="pt-5 d-flex justify-content-between align-items-center">
    <h1>Contracten</h1>
    <div class="w-50 d-flex justify-content-around">
        <input class="search form-control w-50" type="search" data-column="all" placeholder="Zoeken...">
        <a href="{{route('contracts.create')}}" class="btn btn-primary">Nieuw contract</a>
    </div>
</div>

<table id="data-table" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Bedrijf</th>
            <th>Start datum</th>
            <th>Eind datum</th>
            <th class="sorter-false"></th>
        </tr>
    </thead>

    <tbody class="table-group-divider">
        @foreach($contracts as $contract)
            <tr>
                <td>{{$contract->company->name}}</td>
                <td>{{$contract->start_date}}</td>
                <td>{{$contract->end_date}}</td>
                <td class="text-center d-flex">
                    <a href="{{route('contracts.show', $contract)}}" class="btn btn-sm btn-outline-secondary me-3">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{route('contracts.edit', $contract)}}" class="btn btn-sm btn-warning">Edit</a>
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
