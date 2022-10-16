@extends('layouts.base')

@section('content')
	<div class="pt-5 d-flex justify-content-between align-items-center">
		<h1>Storingsaanvragen</h1>
		<div class="w-50 d-flex justify-content-end">
			<input class="search form-control w-50" type="search" data-column="all" placeholder="Zoeken...">
		</div>
	</div>

	<table id="data-table" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Bedrijf</th>
				<th>Beschrijving</th>
				<th>Datum aangemaakt</th>
				<th class="sorter-false"></th>
			</tr>
		</thead>

		<tbody class="table-group-divider">
			@foreach($requests as $request)
				<tr>
					<td>{{$request->id}}</td>
					<td>{{$request->company->name}}</td>
					<td class="table-longtext-column">{{Str::limit($request->remark, 50)}}</td>
					<td>{{$request->date_added}}</td>
					<td class="text-center">
						<a href="{{route('maintenance_requests.edit', $request)}}" class="btn btn-sm btn-outline-secondary">
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
