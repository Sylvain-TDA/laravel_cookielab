<x-header /> <!-- Pour injecter le header -->

<main class="container">

    <x-breadcrumb :items="$breadcrumbs ?? []" />

  <div class="d-flex flex-column bd-hightlight mb-3">
                <div class="">
                    <img src="/images/cookie.png" width="300vh" height="auto" alt="Responsive image" />
                    <div>
                        <h1 class="m-1 p-1 text-light" style="background-color:#B66E00cc; border-radius:10px;">
                            {{ $basket[$item->id]['name'] }}
                        </h1>
                        <br>
                        <h2>{{ $basket[$item->id]['description'] }}</h2>
                        <br>
                    </div>
                </div>
            </div>

    <form class="d-flex" action="{{ route('refreshed', ['id' => $basket[$item->id]['product_id']]) }}" method="GET">

      
        <div class="text-end" style="width:50vh">
            <div class="input-group">
                <input type="number" class="form-control" id="quantities" name="quantities"
                    value="{{  request('quantities') }}">
                <span class="input-group-text">cookie(s)</span>
            </div>
            
            @if(isset($basket))
                <p>Quantité : {{ $basket[$item->id]['quantity'] }}</p>
                <p>Prix total : {{ $basket[$item->id]['sum'] }} €</p>
            @endif

            <a href="{{ route('catalogue') }}">Retour au catalogue</a>

        </div>
    </form>


</main>
<x-footer />