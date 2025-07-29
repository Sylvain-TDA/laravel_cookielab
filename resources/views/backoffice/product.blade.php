<x-header />
<main class="container my-4">
    <x-breadcrumb :items="$breadcrumbs ?? []" />
    @section('title', 'Nos Produits')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Nos Produits</h1>
            </div>
        </div>

        <div class="row">
            @forelse($products as $product)
                <div class="col-md-4 mb-4">

                    <div class="card h-100">
                        <div class="card-body">
                            <div> <img src="{{ $product->url_image }}" alt="cookie {{ $product->name }}"
                                    style="height:100px; width: auto;"> </div>
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                            <p class="card-text">
                                <strong class="">{{ number_format($product->price, 2) }}€</strong>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('backoffice.product-show', $product->id) }}" class="btn text-light"
                                style="background-color: #B66E00cc">
                                Voir le détail
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <h4>Aucun produit disponible</h4>
                        <p>Il n'y a pas encore de produits dans notre catalogue.</p>
                    </div>
                </div>
            @endforelse
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</main>
<x-footer />

</html>