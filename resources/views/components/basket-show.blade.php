@extends('Layout.basket')

@section('basket-content')

    @if(session('added'))
        <div class="alert alert-success">
            {{ session('added') }}
        </div>
    @endif


    @vite('resources/js/app.js')

    <section class="h-100">

        <div class="card h-100">
            <div class="card-body">
                <div> @if(!empty($temporary_basket))
                    <ul>
                        @foreach($temporary_basket as $cookie)
                            <div class="card h-100 m-3 w-25">
                                <img src="{{ $cookie['url_image'] }}" class="card-img-top" alt="{{ $cookie['name'] }}"
                                    style="height: 100px; width:auto ;object-fit: cover;">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $cookie['name'] }}</h5>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="text-muted">Quantité:
                                            <strong>{{ $cookie['quantity'] }}</strong></span>
                                        <span class="text-muted">Prix unitaire:
                                            <strong>{{ $cookie['price'] }}</strong></span>
                                        <span class="fw-bold fs-5">{{ $cookie['sum'] }} €</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="card-footer">
                            <button class="btn text-light" style="background-color: #B66E00cc;">Valider le paiement</button>
                        </div>
                    </ul>
                @endif
                </div>
            </div>
    </section>

@endsection