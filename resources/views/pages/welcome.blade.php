<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')

    @yield('head')
</head>
<body>

@include('includes.nav')

    <div class="bg-dark text-white pt-5">
        <div class="mx-auto pt-2 pb-2" style="width: 600px;">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eos facilis fugiat iusto minima nisi nobis officia perferendis quam sunt! Cumque dolores ea eos fugit quis. Est nisi rerum temporibus.</p>
            <a href="guest/products" class="btn btn-warning">Koffiemachines</a>
            <a href="#" class="btn btn-warning">Koffiebonen</a>
        </div>
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

