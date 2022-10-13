@extends('layouts.base')

@section('content')
	<div class="pt-5 d-flex justify-content-between align-items-center">
		<h1>Producten</h1>
		<div class="w-50 d-flex justify-content-around">
			<input class="search form-control w-50" type="search" data-column="all" placeholder="Zoeken...">
			<a href="{{route('products.create')}}" class="btn btn-primary">Nieuw product </a>
		</div>
	</div>

	<table id="data-table" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Naam</th>
				<th>Beschrijving</th>
				<th>Prijs</th>
				<th>Categorie</th>
				<th class="sorter-false"></th>
			</tr>
		</thead>

		<tbody class="table-group-divider">
			@foreach($products as $product)
				<tr>
					<td>{{$product->id}}</td>
					<td>{{$product->name}}</td>
					<td class="table-longtext-column">{{Str::limit($product->description, 50)}}</td>
					<td>&euro;{{$product->price}}</td>
					<td>{{$product->category}}</td>
					<td class="text-center">
						<a href="{{route('products.edit', $product)}}" class="btn btn-sm btn-outline-secondary">
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
