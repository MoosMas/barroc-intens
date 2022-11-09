@extends('layouts.base')

@section('content')
	<div class="pt-5 d-flex justify-content-between align-items-center fc-header">
		<h1>Storingsaanvragen</h1>

		<div class="w-50 d-flex justify-content-end align-items-center fc-header">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="tabs-table-tab" data-bs-toggle="tab" data-bs-target="#tabs-table"
					        type="button" role="tab" aria-controls="tabs-table" aria-selected="true">
						Nog in te plannen <span class="badge rounded-pill text-bg-danger">{{count($incompleteRequests)}}</span>
					</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="tabs-calendar-tab" data-bs-toggle="tab"
					        data-bs-target="#tabs-calendar" type="button" role="tab" aria-controls="tabs-calendar"
					        aria-selected="false">Kalender
					</button>
				</li>
			</ul>

			<input class="search form-control w-50" type="search" data-column="all" placeholder="Zoeken...">
		</div>
	</div>

	<div class="pt-3 tab-content" id="tabs-tabContent">
		<div class="tab-pane fade" id="tabs-table" role="tabpanel" aria-labelledby="tabs-table-tab" tabindex="0">
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
					@foreach($incompleteRequests as $request)
						<tr>
							<td>{{$requests[$request-1]->id}}</td>
							<td>{{$requests[$request-1]->company->name}}</td>
							<td class="table-longtext-column">{{Str::limit($requests[$request-1]->remark, 50)}}</td>
							<td>{{$requests[$request-1]->created_at}}</td>
							<td class="text-center">
								<a href="{{route('maintenance.edit', $requests[$request-1])}}"
								   class="btn btn-sm btn-outline-secondary">
									<i class="bi bi-pencil-fill"></i>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="tab-pane fade show active" id="tabs-calendar" role="tabpanel" aria-labelledby="tabs-calendar-tab"
		     tabindex="0">
			<div id="calendar">

			</div>
		</div>
	</div>

	<script type="module">
		document.addEventListener( 'DOMContentLoaded', function () {
			let events = {!! json_encode($requests) ?? [] !!};
			let calendarEl = document.getElementById( 'calendar' );
			let initialView = localStorage.getItem('fullcalendar-initialview') || 'dayGridMonth';

			let calendar = new FullCalendar.Calendar( calendarEl, {
				initialView: initialView,
				themeSystem: 'bootstrap5',
				locale: 'nl',
				aspectRatio: 1.8,
				slotMinTime: '08:00:00',
				slotMaxTime: '19:00:00',
				nowIndicator: true,
				height: 700,
				datesSet: () => {
					localStorage.setItem('fullcalendar-initialview', calendar.view.type);
				},
				eventTimeFormat: {
					hour: '2-digit',
					hour12: false,
					minute: '2-digit',
				},
				headerToolbar: {
					start: 'title',
					end: 'timeGridDay timeGridWeek dayGridMonth today prev next'
				},
				eventClick: ( info ) => {
					window.open( '{{url('admin/maintenance')}}' + `/${ info.event.id }` );
				},
				events: events
			} );
			calendar.render();

			$( '#pills-calendar-tab' ).click( () => {
				calendar.render();
			} );
		} );


		$( function () {
			$( '#data-table' ).tablesorter( {
				theme: '',
				widgets: [ "filter", "saveSort" ],
				widgetOptions: {
					filter_external: '.search',
					filter_defaultFilter: { 1: '~{query}' },
					filter_columnFilters: false,
					filter_saveFilters: true,
					saveSort: true,
				}
			} )
		} );
	</script>
@endsection
