<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')

    @yield('head')
</head>
<body>

@include('includes.nav')

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-8 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">SLOW ROAST COFFEE</h1>
                <p class="lead fw-normal">Barroc intens levert de lekkerste koffie aan bedrijven, horeca- en speciaalzaken. Wil jij onze kwaliteitskoffie ook in jouw assortiment opnemen en/of aan kunnen bieden aan jouw klanten of werknemers? Maak dan een keuze hieronder.</p>
            <a class="btn btn-primary" href="{{route('products')}}">Producten</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 mt-2 ms-3">
        <div class="col-sm-6 me-3">
            <div class="card" style="width: 19rem;">
                <img src="{{ asset('img/machine-bit-deluxe.png') }}" alt="koffiemachine-deluxe">
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eos facilis fugiat iusto minima nisi nobis officia perferendis quam sunt! Cumque dolores ea eos fugit quis. Est nisi rerum temporibus.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 me-3">
            <div class="card" style="width: 19rem;">
                <img src="{{ asset('img/machine-bit-light.png') }}" alt="koffiemachine-light">
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eos facilis fugiat iusto minima nisi nobis officia perferendis quam sunt! Cumque dolores ea eos fugit quis. Est nisi rerum temporibus.</p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cookieconsent.popupsmart.com/src/js/popper.js"></script><script> window.start.init({Palette:"palette1",Mode:"banner bottom",Theme:"classic",Location:"https://www.cookiepolicygenerator.com/live.php?token=jj0hNyTdFAk9fqtuhksYDvHahNxO7Lxd",Time:"1",})</script>
    <div class="row">
        @include('includes.footer')
    </div>

    
</body>
</html>

