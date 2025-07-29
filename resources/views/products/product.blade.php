<x-header />

<main class="container my-4">
    <x-breadcrumb :items="$breadcrumbs ?? []" />

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">@yield('title', 'Nos Produits')</h1>
            </div>
        </div>

        <div class="row">
            @forelse($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($product->url_image)
                        <img sr="{{ $product->url_image }}" class="card-img-top" alt="{{ $product->name }}"
                            style="height: 200px; object-fit: cover;">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text flex-grow-1">{{ Str::limit($product->description, 100) }}</p>

                            <div class="mt-auto">
                                <p class="card-text">
                                    <strong class="">{{ number_format($product->price, 2) }}€</strong>
                                </p>

                                <!-- Indicateur de stock -->
                                <div class="mb-2">
                                    @if($product->stock > 0)
                                        @if($product->stock < 5)
                                            <small class="text-warning">
                                                <i class="fas fa-exclamation-triangle"></i>
                                                Plus que {{ $product->stock }} en stock !
                                            </small>
                                        @else
                                            <small class="text-success">
                                                <i class="fas fa-check-circle"></i>
                                                En stock
                                            </small>
                                        @endif
                                    @else
                                        <small class="text-danger">
                                            <i class="fas fa-times-circle"></i>
                                            Rupture de stock
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="d(flex justify-content-between align-items-center">
                                <a href="{{ route('products.show', $product->id) }}" class="btn text-light" style="background-color: #B66E00cc">
                                    Voir le détail
                                </a>

                                @if($product->canBePurchased())
                                    <form action="{{ route('basket.add') }}" method="POST" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </form>
                                @else
                                    <button class="btn btn-secondary btn-sm" disabled>
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <h4>Aucun produit disponible</h4>
                        <p>Il n'y a pas encore de produits dans notre catalogue.</p>
                        <a href="{{ route('accueil') }}" class="btn btn-primary">Retour à l'accueil</a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</main>

<x-footer />

</html>