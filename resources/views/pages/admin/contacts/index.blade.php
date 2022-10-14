@extends('layouts.base')
@section('content')
	<div class="pt-5 d-flex justify-content-between align-items-center">
		<h1>Contactaanvragen</h1>
		<div class="w-25 d-flex justify-content-end">
			<input class="search form-control w-75" type="search" data-column="all" placeholder="Zoeken...">
		</div>
	</div>
	
	<table id="data-table" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Naam</th>
				<th>Bedrijf</th>
				<th>Email</th>
				<th>Telefoonnummer</th>
				<th>Bericht</th>
				<th class="sorter-false"></th>
			</tr>
		</thead>

		<tbody class="table-group-divider">
			@foreach($contacts as $contact)
				<tr>
					<td>{{$contact->id}}</td>
					<td>{{$contact->name}}</td>
					<td>{{$contact->company_name}}</td>
					<td>{{$contact->email}}</td>
					<td>{{$contact->phone}}</td>
					<td>{{$contact->message}}</td>
					<td class="text-center">
						<a href="{{route('contacts.edit', $contact)}}" class="btn btn-sm btn-outline-secondary">
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
