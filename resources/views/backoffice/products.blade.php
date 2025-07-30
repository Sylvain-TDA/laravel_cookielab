<x-header/>
    <main>
        @foreach($products as $product)
            <div class = "d-flex flex-row" style = "widht : 10px">
                <img src="{{$product->url_image}}" alt = "{{$product->name}}" style = "w-10px" >
                <div class = "d-flex flex-column">
                <h2> {{$product->name}} </h2>
                    @if(!$product->is_available)
                        <h3> En stock : 👍</h3>
                        <h3> Quantity :{{$product->stock}} </h3>
                    @else
                        <h3>Produit indisponible a l'EXPLOITATION</h3>
                @endif
                </div>
            </div>
        </div>
        @endforeach

    </main>

<x-footer /> <!-- Pour injecter le footer -->
