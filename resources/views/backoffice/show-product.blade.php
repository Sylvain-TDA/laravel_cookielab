<x-header />

<main class="container-fluid my-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card h-100 shadow">
                <img src="{{ $product->url_image }}" class="card-img-top" alt="{{ $product->name }}"
                    style="height: 300px; object-fit: cover;">

                <div class="card-body d-flex flex-column">
                    <h3 class="card-title text-center mb-4">{{ $product->name }}</h3>

                    <!-- Description -->
                    <div class="mb-4">
                        <h6 class="text-muted mb-2">📝 Description:</h6>
                        <p class="card-text p-3 bg-light rounded border-start border-4"
                            style="border-color: #B66E00 !important;">
                            {{ $product->description }}
                        </p>
                    </div>

                    <!-- Informations produit -->
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="p-3 bg-light rounded">
                                <h6 class="text-muted mb-2">🏷️ Catégorie:</h6>
                                @php
                                    $categoryData = match ($product->category_id) {
                                        1 => ['name' => 'Cookies', 'color' => 'bg-warning text-dark'],
                                        2 => ['name' => 'Kits à cookies', 'color' => 'bg-warning-subtle text-dark'],
                                        default => ['name' => 'Non défini', 'color' => 'bg-secondary']
                                    };
                                @endphp
                                <span class="badge {{ $categoryData['color'] }} fs-6 px-3 py-2">
                                    {{ $categoryData['name'] }}
                                </span>
                            </div>

                        </div>

                        <div class="col-6">
                            <div class="p-3 bg-light rounded">
                                <h6 class="text-muted mb-2">📦 Stock:</h6>
                                <span
                                    class="badge {{ $product->stock > 10 ? 'bg-success' : ($product->stock > 0 ? 'bg-warning text-dark' : 'bg-danger') }} fs-6 px-3 py-2">
                                    {{ $product->stock }} unités
                                </span>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="p-3 bg-light rounded">
                                <h6 class="text-muted mb-2">⚖️ Poids:</h6>
                                <span class="badge bg-info text-dark fs-6 px-3 py-2">
                                    {{ $product->weight }} g
                                </span>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="p-3 bg-light rounded">
                                <h6 class="text-muted mb-2">✅ Statut:</h6>
                                <span
                                    class="badge {{ $product->is_available ? 'bg-success' : 'bg-danger' }} fs-6 px-3 py-2">
                                    {{ $product->is_available ? 'Disponible' : 'Indisponible' }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Prix et action -->
                    <div class="mt-auto border-top pt-4">
                        <div class="text-center mb-4 p-3 rounded" style="background-color: #B66E0020;">
                            <h4 class="mb-1" style="color: #B66E00;">
                                {{ number_format($product->price, 2) }} €
                            </h4>
                            <small class="text-muted">Prix unitaire TTC</small>
                        </div>

                        <div class="d-grid gap-2">
                            <a href="{{ route('backoffice.edit-product', $product->id) }}"
                                class="btn text-light py-3 fs-5 fw-bold shadow-sm"
                                style="background-color: #B66E00; transition: all 0.3s ease;">
                                ✏️ Editer ce produit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<x-footer />