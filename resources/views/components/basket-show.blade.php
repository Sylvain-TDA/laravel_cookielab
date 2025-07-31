@extends('Layout.basket')

@section('basket-content')

    @if(session('added'))
        <div class="alert alert-success">
            {{ session('added') }}
        </div>
    @endif


    @vite('resources/js/app.js')

    <section class="h-100">
        {{-- Formulaire de validation du panier --}}
        <form action="{{ route('basket-create') }}" method="POST">
            @csrf

            <div class="card h-100">
                <div class="card-body">
                    @if(empty($temporary_basket))
                        <div>Votre panier est vide 😢</div>
                    @else
                        <div class="d-flex flex-wrap">
                            @foreach($temporary_basket as $cookie)
                                <div class="card h-100 m-3" style="width: 250px;">
                                    <img src="{{ $cookie['url_image'] }}" class="card-img-top" alt="{{ $cookie['name'] }}"
                                        style="height: 100px; object-fit: cover;">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $cookie['name'] }}</h5>
                                        <div class="d-flex flex-column align-items-center mt-3">
                                            <span class="text-muted">Quantité: <strong>{{ $cookie['quantity'] }}</strong></span>
                                            <span class="text-muted">Prix unitaire: <strong>{{ $cookie['price'] }} €</strong></span>
                                            <span class="fw-bold fs-5">{{ $cookie['sum'] }} €</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- Bouton Valider le paiement --}}
                        <div class="card-footer text-center">
                            <button type="submit" class="btn text-light" style="background-color: #B66E00cc;">
                                Valider le paiement
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </form>

        {{-- Formulaire pour vider le panier --}}
        @if(!empty($temporary_basket))
            <form action="{{ route('empty-basket') }}" method="POST" class="text-center mt-3">
                @method('PUT')
                @csrf
                <button type="submit" class="btn text-light" style="background-color: #B66E00cc;">
                    Vider le panier
                </button>
            </form>
        @endif
    </section>

@endsection