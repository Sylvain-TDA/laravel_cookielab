<x-header />

<main class="container my-4">


    <div class="row">
        @foreach($products as $product)
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
</main>

<x-footer />