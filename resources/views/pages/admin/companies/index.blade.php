@extends('layouts.base')

@section('content')
    @if( session('message') )
        <p class="alert alert-success">{{ session('message') }}</p>
    @endif

    <div class="pt-5 d-flex justify-content-between align-items-center">
		<h1>Companies</h1>
		<div class="w-50 d-flex justify-content-around">
			<input class="search form-control w-50" type="search" data-column="all" placeholder="Zoeken...">
			<a href="{{route('companies.create')}}" class="btn btn-primary">Nieuw company </a>
		</div>
	</div>

	<table id="data-table" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Voornaam</th>
				<th>Telefoon</th>
				<th>Straat</th>
				<th>Huisnummer</th>
				<th>Stad</th>
                <th>Bkr check</th>
				<th class="sorter-false"></th>
			</tr>
		</thead>

		<tbody class="table-group-divider">
			@foreach($companies as $company)
				<tr>
					<td><a href="{{route('companies.show', $company)}}">{{$company->name}}</a></td>
					<td>({{$company->country_code}}){{$company->phone}}</td>
					<td>{{$company->street}}</td>
                    <td>{{$company->house_number}}</td>
					<td>{{$company->city}}</td>
					<td>{{$company->bkr_checked_at}}</td>
					<td class="text-center">
						<a href="{{route('companies.show', $company)}}" class="btn btn-sm btn-outline-secondary">
							<i class="bi bi-eye"></i>
						</a>
						<a href="{{route('companies.edit', $company)}}" class="btn btn-sm btn-outline-secondary">
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
