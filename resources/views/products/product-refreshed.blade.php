<x-header /> <!-- Pour injecter le header -->

<main class="container">

    <x-breadcrumb :items="$breadcrumbs ?? []" />

  <div class="d-flex flex-column bd-hightlight mb-3">
                <div class="">
                    <img src="/images/cookie.png" width="300vh" height="auto" alt="Responsive image" />
                    <div>
                        <h1 class="m-1 p-1 text-light" style="background-color:#B66E00cc; border-radius:10px;">
                            {{ $temporary_basket['name'] }}
                        </h1>
                        <br>
                        <h2>{{ $temporary_basket['description'] }}</h2>
                        <br>
                    </div>
                </div>
            </div>

    <form class="d-flex" action="{{ route('refreshed', ['id' => $temporary_basket['product_id']]) }}" method="GET">

      
        <div class="text-end" style="width:50vh">
            <div class="input-group">
                <input type="number" class="form-control" id="quantities" name="quantities"
                    value="{{  request('quantities') }}">
                <span class="input-group-text">cookie(s)</span>
            </div>
            
            @if(isset($temporary_basket))
                <p>Quantité : {{ $temporary_basket['quantity'] }}</p>
                <p>Prix total : {{ $temporary_basket['sum'] }} €</p>
            @endif

            <a href="{{ route('catalogue') }}">Retour au catalogue</a>

        </div>
    </form>


</main>
<x-footer />