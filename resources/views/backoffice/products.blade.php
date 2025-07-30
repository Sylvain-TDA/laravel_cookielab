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

            <form action ="{{route('product.edit' , $product->id)}}" method="GET">

            <button class = "rounded" class="btn btn-danger" type = "submit" label = "delte"> modifier infos </button>
            </form>


            <form action="{{route('product.delete' , $product->id)}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button class = "rounded"  class="btn btn-danger" type = "submit" label = "delete"> Supprimer l'article </delete>
             </form>

                </div>
            </div>
        </div>
        @endforeach

    </main>

<x-footer /> <!-- Pour injecter le footer -->
