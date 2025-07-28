<x-header /> <!-- Pour injecter le header -->
<x-pub />
<main class="container my-4">


    @foreach($products as $product) <!-- contenu principal de la page -->
        <div class="product">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>Prix: {{ $product->price }} €</p>
            <img src="{{ $product->url_image }}" alt="{{ $product->name }}">
        </div>
    @endforeach

</main>




<x-footer /> <!-- Pour injecter le footer -->