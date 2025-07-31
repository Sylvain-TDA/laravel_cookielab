<x-header/>
    <main>
        @foreach($products as $product)
            <div class = "d-flex flex-row" style = "width: 50%; height: 175px; border: 1px solid black; margin: 10px;">
                <img src="{{$product->url_image}}" alt = "{{$product->name}}" >
                <div class = "d-flex flex-column">
                <h2> {{$product->name}} </h2>
                    @if($product->is_available)
                        <h3> En stock : 👍</h3>
                        <h3> Price: {{ number_format($product->price, 2, ',', ' ') }} €</h3>
                        <h3> Quantity : {{ number_format($product->stock, 2, ',', ' ') }}  </h3>
                    @else
                        <h3>Produit indisponible a l'EXPLOITATION</h3>
                @endif
                </div>

                <div class = "d-flex flex-column-reverse">

                <form action="{{route('backoffice.delete' , $product->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class = "rounded btn btn-danger" type = "submit"> Supprimer l'article de la BDD </delete>
                </form>


                <form action ="{{route('backoffice.edit' , $product->id)}}" method="GET">

                <button class = "rounded btn btn-danger" type = "submit"> modifier infos </button>
                </form>


            
            </div>

            </div>
       
        </div>
        @endforeach
        <form action="{{route('backoffice.create')}}" method="POST">
        
        @csrf
        @method('PUT')
        
        <button class = "rounded btn btn-primary" type = "submit"> Add product </button>
        </form>
    </main>

<x-footer /> <!-- Pour injecter le footer -->
