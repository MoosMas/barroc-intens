@extends('layouts.base')

@section('content')
	<div class="pt-5">
		<h1>Storingsaanvraag</h1>

		<ul class="list-group list-group-flush">
			<li class="list-group-item">{{$maintenance->title}}</li>
			<li class="list-group-item">{{$maintenance->company->name}}</li>
			<li class="list-group-item">{{$maintenance->start}}</li>
			<li class="list-group-item">{{$maintenance->duration}}</li>
{{--			<li class="list-group-item">{{$maintenance->}}</li>--}}
		</ul>
		
	</div>
@endsection
