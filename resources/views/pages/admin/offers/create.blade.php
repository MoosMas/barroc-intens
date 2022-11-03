@extends('layouts.base')

@section("content")
	<div class="pt-5">
		<h1>Offertes</h1>
		<h2>Voeg een offerte toe</h2>

		<form method="post" action="{{route('offers.store')}}" class="w-75 mx-auto">
			@csrf

			<div class="form-group mb-3">
				<label for="contact_id" class="form-label">Aanvraag (bedrijf)</label>
				<select class="form-select" id="contact_id" name="contact_id">
					<option selected disabled>Selecteer een aanvraag</option>
					@foreach($contacts as $contact)
						<option value="{{$contact->id}}">{{$contact->company_name}}</option>
					@endforeach

				</select>
			</div>

			<div class="form-group mb-3" x-data="{}">

				<table class="table" id="products-table">
					<thead>
						<tr>
							<td class="form-label ps-0">Producten</td>
							<th class="text-center">Aantal</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<template id="products-template" x-data="{count}">

							<tr>
								<td class="products-fields-container col-8" :id="'products-fields-template-'+count">
									<select class="form-select select-product"
									        :name="'products['+ count +'][product_id]'">
										<option selected disabled>Selecteer een product</option>

										@foreach($products as $product)
											<option value="{{$product->id}}">{{$product->name}}</option>
										@endforeach

									</select>
								</td>

								<td x-data="{amount: 0}">
									<div class="input-group w-75 mx-auto">
										<button class="btn btn-outline-secondary" type="button"
										        @click="if(amount > 0) amount--">-
										</button>
										<input type="text" :name="'products['+ count +'][amount]'" x-model="amount"
										       class="form-control text-center">
										<button class="btn btn-outline-secondary" type="button" @click="amount++">+
										</button>
									</div>
								</td>

								<td>
									<button class="btn btn-outline-danger" type="button" @click="removeProduct($event)">
										<i class="bi bi-trash"></i>
									</button>
								</td>
							</tr>
						</template>
					</tbody>

				</table>

				<button @click="addProduct()" type="button" class="btn btn-outline-primary">Product toevoegen</button>

			</div>

			<input type="submit" value="Save Item" class="btn btn-primary">

		</form>
	</div>

	<script>
		let container = document.getElementById( 'products-table' );
		let template = document.getElementById( 'products-template' );
		let count = -1;

		function addProduct() {
			let clone = template.content.cloneNode( true )
			container.appendChild( clone );
			count++;
		}

		function removeProduct( e ) {
			$( e.currentTarget ).parents( 'tr' ).remove();
		}

		$( document ).ready( () => {
			addProduct();
		} );
	</script>
@endsection
