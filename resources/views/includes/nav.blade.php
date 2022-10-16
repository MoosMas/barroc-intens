<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
	<!-- Container wrapper -->
	<div class="container-fluid">

		<!-- Collapsible wrapper -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Navbar brand -->
			<a class="navbar-brand mt-2 mt-lg-0" href="{{route('dashboard')}}">
				<img src="{{ asset('img/logo2.png') }}" width="50px" alt="logo">
				Barroc <b>intens</b>
			</a>
		</div>
		<!-- Collapsible wrapper -->

		<!-- Left links -->
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">

			<li class="nav-item">
				<a class="nav-link" href="{{route('products.index')}}">Producten</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="">Offertes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('contacts.index')}}">Contactaanvragen</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('maintenance.index')}}">Storingsaanvragen</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
			</li>
			<li class="nav-item">
				@guest
					<a class="nav-link" href="/login">Login</a>
				@endguest
				@auth
					<form method="POST" action="{{ route('logout') }}">
						@csrf
						<x-dropdown-link class="nav-link" :href="route('logout')"
						                 onclick="event.preventDefault(); this.closest('form').submit();">
							{{ __('Log Out') }}
						</x-dropdown-link>
				@endauth
			</li>
		</ul>
		<!-- Left links -->
	</div>
	<!-- Container wrapper -->
</nav>
<!-- Navbar -->
