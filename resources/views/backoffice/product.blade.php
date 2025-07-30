<x-header />

<x-breadcrumb :items="$breadcrumbs ?? []" />

<main class="container my-4">
    @if(session('delete'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('delete') }}
        </div>
    @endif

    @if(session('post'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('post') }}
        </div>
    @endif

    <div class="text-center mb-4">
        <a href="{{ route('backoffice.new-product') }}" class="btn text-light px-4 py-2 m-4"
            style="background-color: #B66E00cc;">
            ➕ Ajouter un nouveau produit
        </a>
    </div>

    <!-- Section Cookies -->
    <div class="text-center mb-5">
        <h1 class="mb-4">🍪 Cookies 🍪</h1>
        <div class="row justify-content-center">
            @foreach($productsCookie as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ $product->url_image }}" class="card-img-top" alt="{{ $product->name }}"
                            style="height: 200px; object-fit: cover;">

                        <div class="card-body d-flex flex-column text-center">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text flex-grow-1">{{ $product->description }}</p>

                            <div class="mt-auto">
                                <p class="card-text mb-3">
                                    <strong style="color: #B66E00CC; font-size: 1.2rem;">
                                        {{ $product->price }} €
                                    </strong>
                                </p>
                                <a href="{{ route('backoffice.show-product', $product->id) }}" class="btn text-light"
                                    style="background-color: #B66E00cc">
                                    Voir le détail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Section Kits -->
    <div class="text-center">
        <h1 class="mb-4">Kit à cookies</h1>
        <div class="row justify-content-center">
            @foreach($productsKit as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ $product->url_image }}" class="card-img-top" alt="{{ $product->name }}"
                            style="height: 200px; object-fit: cover;">

                        <div class="card-body d-flex flex-column text-center">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text flex-grow-1">{{ $product->description }}</p>

                            <div class="mt-auto">
                                <p class="card-text mb-3">
                                    <strong style="color: #B66E00CC; font-size: 1.2rem;">
                                        {{ $product->price }} €
                                    </strong>
                                </p>
                                <a href="{{ route('backoffice.show-product', $product->id) }}" class="btn text-light"
                                    style="background-color: #B66E00cc">
                                    Voir le détail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

<x-footer />