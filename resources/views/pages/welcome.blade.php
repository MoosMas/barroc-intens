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

    <script type="text/javascript" src="https://cookieconsent.popupsmart.com/src/js/popper.js"></script><script> window.start.init({Palette:"palette1",Mode:"banner bottom",Theme:"classic",Location:"https://www.cookiepolicygenerator.com/live.php?token=jj0hNyTdFAk9fqtuhksYDvHahNxO7Lxd",Time:"1",})</script>
    <div class="row">
        @include('includes.footer')
    </div>


</body>
</html>

