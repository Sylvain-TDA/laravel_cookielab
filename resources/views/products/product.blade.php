<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet">
</head>

<body>
    <x-header /> <!-- Pour injecter le header -->
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
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                        <p class="card-text">
                            <strong class="text-primary">{{ number_format($product->price, 2) }}€</strong>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">
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
    </div>
</div>
</main>

    <x-footer /> <!-- Pour injecter le footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.js"></script>
</body>

</html>