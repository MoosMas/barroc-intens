 @extends('layouts.base')

    @section('content')
        <div class="mx-auto mt-3" style="width: 200px;">
            <div class="card" style="width: 19rem;">
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eos facilis fugiat iusto minima nisi nobis officia perferendis quam sunt! Cumque dolores ea eos fugit quis. Est nisi rerum temporibus.</p>
                    <a href="#" class="btn btn-primary">Koffiemachines</a>
                    <a href="#" class="btn btn-primary">Koffiebonen</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width: 19rem;">
                    <img src="{{ asset('img/machine-bit-deluxe.png') }}" alt="koffiemachine-deluxe">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eos facilis fugiat iusto minima nisi nobis officia perferendis quam sunt! Cumque dolores ea eos fugit quis. Est nisi rerum temporibus.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width: 19rem;">
                    <img src="{{ asset('img/machine-bit-light.png') }}" alt="koffiemachine-light">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eos facilis fugiat iusto minima nisi nobis officia perferendis quam sunt! Cumque dolores ea eos fugit quis. Est nisi rerum temporibus.</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection

