@extends('layouts.base')

@section('content')
	<div class="d-flex">
		<div class="p-2 flex-fill">
			<ul class="list-group pt-5">
				<li class="list-group-item d-flex justify-content-between align-items-start ">
					<div class="ms-2 me-auto">
						<div class="fw-bold">Bedrijf</div>
						{{$contract->company->name}}
					</div>
				</li>

				<li class="list-group-item d-flex justify-content-between align-items-start">
					<div class="ms-2 me-auto">
						<div class="fw-bold">Start datum</div>
						{{$contract->start_date}}
					</div>
				</li>

				<li class="list-group-item d-flex justify-content-between align-items-start">
					<div class="ms-2 me-auto">
						<div class="fw-bold">Eind datum</div>
						{{$contract->end_date}}
					</div>
				</li>

			</ul>
		</div>
		<div class="p-2 flex-fill pt-5">
			<div class="ms-2 me-auto">
				<div class="fw-bold">Producten</div>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Naam</th>
							<th scope="col">Aantal besteld</th>
							<th scope="col">Prijs/stuk</th>
							<th scope="col">Installatie kosten</th>
							<th scope="col">Totaalprijs</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($contract->products as $product)

							<tr>
								<td>{{$product->name}}</td>
								<td>{{$product->pivot->amount}}</td>
								<td>&euro;{{$product->pivot->price_per_product}}</td>
								<td>&euro;{{$product->installation_costs}}</td>
								<td>&euro;{{$product->pivot->amount * $product->pivot->price_per_product}}</td>
							</tr>
						@endforeach
					</tbody>
					<tfoot class="table-group-divider fw-bold">
						<tr>
							<td></td>
							<td>{{$contract->products->pluck('pivot.amount')->sum()}}</td>
							<td></td>
							<td></td>
							<td>&euro;{{$contract->totalCost()}}</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
@endsection

