@extends('layouts.base')

@section('content')
	<div class="pt-5">
		<h1>Contracten</h1>
		<h2>Contract aanmaken</h2>

		<form method="post" action="{{route('contracts.store')}}" class="w-75 mx-auto">
			@csrf

			<div class="form-group mb-3">
				<label for="company_id" class="form-label">Bedrijf</label>
				<select class="form-select" id="company_id" name="company_id">
					<option selected disabled>Selecteer een bedrijf</option>
					@foreach($companies as $company)
						<option value="{{$company->id}}">{{$company->name}}</option>
					@endforeach

				</select>
			</div>

			<div class="form-group row mb-3">
				<div class="col-6">
					<label for="start_date" class="form-label">Startdatum</label>
					<input type="date" name="start_date" class="form-control" id="start_date">
				</div>
				<div class="col-6">
					<label for="end_date" class="form-label">Einddatum</label>
					<input type="date" name="end_date" class="form-control" id="end_date">
				</div>
			</div>
			

			<div class="form-group mb-3" x-data="{products}">

				<table class="table">
					<thead>
						<tr>
							<td class="form-label ps-0">Producten</td>
							<th class="text-center">Aantal</th>
							<th></th>
						</tr>
					</thead>
					<tbody id="products-table">
						<template id="products-template" x-data="{count}" x-for="(product, index) in products" :key="index">

							<tr>
								<td class="products-fields-container col-8" :id="'products-fields-template-'+index">
									<select class="form-select select-product"
									        :name="'products['+ index +'][product_id]'" x-model.number="product.pivot.product_id">
										<option :selected="product.pivot.product_id === -1" disabled>Selecteer een product</option>

										@foreach($products as $product)
											<option value="{{$product->id}}" :selected="product.id === {{$product->id}}">{{$product->name}}</option>
										@endforeach

									</select>
								</td>

								<td>
									<div class="input-group w-75 mx-auto" x-data="{amount: 0}" x-modelable="amount" x-model="product.pivot.amount">
										<button class="btn btn-outline-secondary" type="button"
										        @click="if(amount > 0) amount--">-
										</button>
										<input type="text" :name="'products['+ index +'][amount]'" x-model.number="amount"
										       class="form-control text-center">
										<button class="btn btn-outline-secondary" type="button" @click="amount++">+
										</button>
									</div>
								</td>

								<td>
									<button class="btn btn-outline-danger" type="button"
									        @click="products.splice(index, 1)">
										<i class="bi bi-trash"></i>
									</button>
								</td>
							</tr>
						</template>
					</tbody>

				</table>

				<button @click="products.push({pivot: {product_id: -1, amount: 0}})" type="button" class="btn btn-outline-primary">Product toevoegen</button>

			</div>

			<input type="submit" value="Save Item" class="btn btn-primary">
		</form>
	</div>

	<script>
		let container = document.getElementById( 'products-table' );
		let template = document.getElementById( 'products-template' );
		let count = $('#products-table tr').length;
		let products = [];

		function getOfferProducts(){
			// products = ;
			return products;
		}

		function addProduct() {
			let clone = template.content.cloneNode( true )
			container.appendChild( clone );
			count++;
		}

		function removeProduct( e ) {
			$( e.currentTarget ).parents( 'tr' ).remove();
		}

		$( document ).ready( () => {
			if (!products) {
				addProduct();
			}
		} );
	</script>
@endsection
