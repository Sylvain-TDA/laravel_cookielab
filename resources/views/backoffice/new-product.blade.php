<x-header />

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0">
                <div class="card-header text-center" style="background-color: #B66E00CC; color: white;">
                    <h4 class="mb-0">✏️ Ajouter le produit</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('backoffice.post-product') }}" method="POST">
                        @csrf


                        <!-- Nom du produit -->
                        <div class="mb-4">
                            <label for="name" class="form-label fw-bold">📦 Nom du produit</label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name"
                                value="{{ request('name') }}">
                        </div>

                        <!-- Catégorie -->
                        <div class="mb-4">
                            <label for="category_id" class="form-label fw-bold">🏷️ Catégorie</label>
                            <select class="form-select form-select-lg" id="category_id" name="category_id">
                                <option value="">Choisir une catégorie</option>
                                <option value="1" {{ request('category_id')}}>
                                    🍪 Cookies
                                </option>
                                <option value="2" {{ request('category_id')}}>
                                    🧰 Kits à cookies
                                </option>
                            </select>
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label for="description" class="form-label fw-bold">📝 Description</label>
                            <textarea class="form-control" id="description" name="description"
                                rows="4">{{ request('description') }}</textarea>
                        </div>

                        <!-- Prix et Stock -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="price" class="form-label fw-bold">💰 Prix (€)</label>
                                <div class="input-group input-group-lg">
                                    <input type="number" class="form-control" id="price" name="price" step="0.01"
                                        min="0" value="{{ request('price') }}">
                                    <span class="input-group-text">€</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="stock" class="form-label fw-bold">📦 Stock</label>
                                <input type="number" class="form-control form-control-lg" id="stock" name="stock"
                                    min="0" value="{{ request('stock') }}">
                            </div>
                        </div>

                        <!-- Image -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">🖼️ Image du produit</label>

                            <div id="url_input" class="mb-3">
                                <input type="url" class="form-control" name="url_image"
                                    placeholder="https://exemple.com/image.jpg" value="{{ request('url_image') }}">
                            </div>
                        </div>

                        <!-- Poids et Disponibilité -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="weight" class="form-label fw-bold">⚖️ Poids (grammes)</label>
                                <div class="input-group input-group-lg">
                                    <input type="number" class="form-control" id="weight" name="weight" min="0"
                                        step="0.1" value="{{ request('weight') }}">
                                    <span class="input-group-text">g</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="available" class="form-label fw-bold">✅ Disponibilité</label>
                                <select class="form-select form-select-lg" id="available" name="available">
                                    <option value="1" {{ request('available') == 1 ? 'selected' : '' }}>✅ Disponible
                                    </option>
                                    <option value="0" {{ request('available') == 0 ? 'selected' : '' }}>❌ Non disponible
                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('backoffice.product')}}" class="btn btn-secondary btn-lg">
                                ⬅️ Retour
                            </a>
                            <div>
                                <button type="submit" class="btn btn-success btn-lg ">
                                    💾 Sauvegarder
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<x-footer />