@extends('layouts.base')

@section('content')
	<div class="pt-5 d-flex justify-content-between align-items-center">
		<h1>Facturen</h1>
		<div class="w-50 d-flex justify-content-around">
			<input class="search form-control w-50" type="search" data-column="all" placeholder="Zoeken...">
			<a href="{{route('invoices.create')}}" class="btn btn-primary">Nieuwe factuur</a>
		</div>
	</div>

	<table id="data-table" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Bedrijf</th>
				<th>Datum aangemaakt</th>
				<th>Datum betaald</th>
				<th class="sorter-false"></th>
			</tr>
		</thead>

		<tbody class="table-group-divider">
			@foreach($invoices as $invoice)
				<tr>
					<td>{{$invoice->company->name}}</td>
					<td>{{$invoice->created_at}}</td>
					<td>{{$invoice->paid_at ?? '-'}}</td>
					<td class="text-center">
						<a href="{{route('invoices.show', $invoice)}}" class="btn btn-sm btn-outline-secondary">
							<i class="bi bi-eye"></i>
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
