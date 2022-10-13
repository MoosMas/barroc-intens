@extends('layouts.base')

@section('content')
	<h1>Producten</h1>
	<h2>Voeg een product toe</h2>
	<form action=""></form>
	<form method="post" action="{{route('products.store')}}">
		@csrf
		<div class="form-group mb-3">
			<label for="name" class="form-label">Productnaam</label>
			<input type="text" name="name" class="form-control" id="name">
		</div>

		<div class="form-group mb-3">
			<label for="description" class="form-label">Beschrijving</label>
			<textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
		</div>

		<div class="form-group mb-3">
			<label for="price" class="form-label">Prijs</label>
			<div class="input-group">
				<span class="input-group-text">&euro;</span>
				<input type="text" name="price" class="form-control">
			</div>
		</div>

		<div class="form-group mb-3">
			<select class="form-select" id="category" name="product_category_id">
				<option selected disabled>Selecteer een categorie</option>
				@foreach($categories as $categorie)
					<option value="{{$categorie->id}}">{{$categorie->name}}</option>
				@endforeach
			</select>
		</div>

		<input type="submit" value="Save Item" class="btn btn-primary">

	</form>
@endsection