@extends('layouts.base')

@section('content')
	<div class="pt-5 d-flex justify-content-between align-items-center">
		<h1>Storingsaanvragen</h1>
		
		<div class="w-50 d-flex justify-content-end align-items-center">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#"><i class="bi bi-list"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="bi bi-calendar3"></i></a>
				</li>
			</ul>
			
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
						<a href="{{route('maintenance.edit', $request)}}" class="btn btn-sm btn-outline-secondary">
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
