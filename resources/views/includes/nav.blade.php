<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mb-4">
	<!-- Container wrapper -->
	<div class="container-fluid">
		<!-- Left links -->
        <nav class="navbar bg-light fixed-top">
            <div class="container-fluid">
                    <a class="navbar-brand mt-2 mt-lg-0" href="{{route('dashboard')}}">
                        <img src="{{ asset('img/logo2.png') }}" width="50px" alt="logo">
                        Barroc <b>intens</b>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                @if(Auth::user() && Auth::user()->role->id == 12)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('products')}}">Producten</a>
                                </li>
                                @elseif(Auth::user() && Auth::user()->role->id == 13 || Auth::user() && Auth::user()->role->id == 2 || Auth::user() && Auth::user()->role->id == 4 || Auth::user() && Auth::user()->role->id == 6)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('products.index')}}">Producten</a>
                                </li>
                                @endif
                                @if( Auth::user() && Auth::user()->role->id == 12 )

                                @elseif(Auth::user() && Auth::user()->role->id == 13 || Auth::user() && Auth::user()->role->id == 2 || Auth::user() && Auth::user()->role->id == 4)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('offers.index')}}">Offertes</a>
                                </li>
                                @endif
                                @if(Auth::user() && Auth::user()->role->id == 12)

                                @elseif(Auth::user() && Auth::user()->role->id == 13 || Auth::user() && Auth::user()->role->id == 2 || Auth::user() && Auth::user()->role->id == 4)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('companies.index')}}">Bedrijven</a>
                                </li>
                                @endif
                                @if(Auth::user() && Auth::user()->role->id == 12)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Storings aanvragen</a>
                                </li>
                                @elseif(Auth::user() && Auth::user()->role->id == 13 || Auth::user() && Auth::user()->role->id == 9)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contacts.index')}}">Contactaanvragen</a>
                                </li>
                                @endif
                                @if( Auth::user() && Auth::user()->role->id == 12)

                                @elseif(Auth::user() && Auth::user()->role->id == 13 || Auth::user() && Auth::user()->role->id == 2 || Auth::user() && Auth::user()->role->id == 4 || Auth::user() && Auth::user()->role->id == 6)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('invoices.index')}}">Facturen</a>
                                </li>
                                @endif
                                @if(Auth::user() && Auth::user()->role->id == 12)

                                @elseif(Auth::user() && Auth::user()->role->id == 13 || Auth::user() && Auth::user()->role->id == 9)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('maintenance.index')}}">Storingsaanvragen</a>
                                </li>
                                @endif
                                @if(Auth::user() && Auth::user()->role->id == 12)

                                @elseif(Auth::user() && Auth::user()->role->id == 13 || Auth::user() && Auth::user()->role->id == 4) 
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('users.index')}}">Gebruiker</a>
                                </li>
                                @endif
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
                        </form>
                                    @endauth
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </nav>
		<!-- Left links -->
	</div>
	<!-- Container wrapper -->
</nav>
<!-- Navbar -->
