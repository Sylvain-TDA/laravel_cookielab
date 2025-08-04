<x-header />

<main class="container-fluid">
    <div class="row">

        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" style="color:#B66E00cc" aria-current="page"
                            href="{{ route('backoffice') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-home align-text-bottom"
                                aria-hidden="true">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" style="color:#B66E00cc" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-file align-text-bottom"
                                aria-hidden="true">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                            Commandes
                        </a>
                    </li>
                    <li class="nav-item d-flex justify-content align-items-center">
                        <a class="nav-link fw-bold" style="color:#B66E00cc" href="{{ route('storeBackOffice') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-shopping-cart align-text-bottom"
                                aria-hidden="true">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            Produits
                        </a>
                        <a class="nav-link" style="color:#B66E00cc" href="#" aria-label="Add a new report">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus-circle align-text-bottom"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" style="color:#B66E00cc" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-users align-text-bottom"
                                aria-hidden="true">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            Clients
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" style="color:#B66E00cc" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-bar-chart-2 align-text-bottom"
                                aria-hidden="true">
                                <line x1="18" y1="20" x2="18" y2="10"></line>
                                <line x1="12" y1="20" x2="12" y2="4"></line>
                                <line x1="6" y1="20" x2="6" y2="14"></line>
                            </svg>
                            Rapports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" style="color:#B66E00cc" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-percent align-text-bottom">
                                <line x1="19" y1="5" x2="5" y2="19" />
                                <circle cx="17.5" cy="17.5" r="2.5" />
                                <circle cx="6.5" cy="6.5" r="2.5" />
                            </svg>
                            Promotions
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Modifier le produit</h1>
                <div class="btn-toolbar mb-2 mb-0 gap-4">
                    <a href="{{ route('storeBackOffice') }}" class="btn btn-sm btn-outline-secondary fw-bold"
                        style="color: #B66E00; border-color: #B66E00;">
                        Retour aux produits
                    </a>
                </div>
            </div>
            <form method="POST" action="{{ route('updateProduct', $product) }}" enctype="multipart/form-data"
                novalidate>
                @csrf
                @method('PUT')

                <div class="row">

                    <!-- Colonne gauche -->
                    <div class="col-md-6">

                        <!-- Nom du produit -->
                        <div class="mb-4">
                            <label for="name" class="form-label fw-bold required">
                                <i class="fas fa-tag me-1"></i>Nom du produit
                            </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name', $product->name) }}" placeholder="Nom du produit"
                                required autofocus>
                            @error('name')
                            <div class="invalid-feedback">
                                <i class="fas fa-times-circle me-1"></i>{{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Catégorie -->
                        <div class="mb-4">
                            <label for="category_id" class="form-label fw-bold required">
                                <i class="fas fa-folder me-1"></i>Catégorie
                            </label>
                            <select class="form-select @error('category_id') is-invalid @enderror" id="category_id"
                                name="category_id" required>
                                <option value="">Sélectionnez une catégorie</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ (old('category_id', $product->category_id) ==
                                    $category->id) ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">
                                <i class="fas fa-times-circle me-1"></i>{{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Prix et Stock -->
                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="price" class="form-label fw-bold required">
                                    <i class="fas fa-euro-sign me-1"></i>Prix (€)
                                </label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror"
                                    id="price" name="price" step="0.01" min="0"
                                    value="{{ old('price', $product->price) }}" placeholder="0.00" required>
                                @error('price')
                                <div class="invalid-feedback">
                                    <i class="fas fa-times-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="stock" class="form-label fw-bold required">
                                    <i class="fas fa-boxes me-1"></i>Stock
                                </label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                    id="stock" name="stock" min="0" value="{{ old('stock', $product->stock) }}"
                                    placeholder="0" required>
                                @error('stock')
                                <div class="invalid-feedback">
                                    <i class="fas fa-times-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Poids -->
                        <div class="mb-4">
                            <label for="weight" class="form-label fw-bold">
                                <i class="fas fa-weight me-1"></i>Poids (g)
                            </label>
                            <input type="number" class="form-control @error('weight') is-invalid @enderror" id="weight"
                                name="weight" min="0" step="0.1" value="{{ old('weight', $product->weight) }}"
                                placeholder="0.0">
                            @error('weight')
                            <div class="invalid-feedback">
                                <i class="fas fa-times-circle me-1"></i>{{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>

                    <!-- Colonne droite -->
                    <div class="col-md-6">

                        <!-- Image actuelle -->
                        @if($product->url_image)
                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                <i class="fas fa-image me-1"></i>Image actuelle
                            </label>
                            <div class="text-center p-3 border rounded">
                                <img src="{{ Storage::url($product->url_image) }}" alt="Image de {{ $product->name }}"
                                    class="img-fluid rounded shadow-sm" style="max-height: 200px; object-fit: cover;">
                                <div class="mt-2">
                                    <small class="text-muted">
                                        <i class="fas fa-info-circle me-1"></i>
                                        Ajoutez une nouvelle image pour remplacer celle-ci
                                    </small>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Upload nouvelle image -->
                        <div class="mb-4">
                            <label for="url_image" class="form-label fw-bold">
                                <i class="fas fa-camera me-1"></i>
                                {{ $product->url_image ? 'Remplacer l\'image' : 'Image du produit' }}
                            </label>
                            <input type="file" class="form-control @error('url_image') is-invalid @enderror"
                                id="url_image" name="url_image" accept="image/jpeg,image/png,image/jpg,image/gif">
                            <div class="form-text">
                                <i class="fas fa-info-circle me-1"></i>
                                Formats acceptés : JPEG, PNG, JPG, GIF (max 2MB)
                            </div>
                            @error('url_image')
                            <div class="invalid-feedback">
                                <i class="fas fa-times-circle me-1"></i>{{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label for="description" class="form-label fw-bold">
                                <i class="fas fa-align-left me-1"></i>Description
                            </label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                name="description" rows="6"
                                placeholder="Décrivez votre produit en détail...">{{ old('description', $product->description) }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                <i class="fas fa-times-circle me-1"></i>{{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>
                </div>

                <!-- Options (checkboxes) -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card bg-light">
                            <div class="card-header py-2">
                                <h6 class="mb-0">
                                    <i class="fas fa-cogs me-1"></i>Options du produit
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="is_active"
                                                name="is_active" value="1" {{ old('is_active', $product->is_active) ?
                                            'checked' : '' }}>
                                            <label class="form-check-label fw-bold" for="is_active">
                                                <i class="fas fa-power-off me-1"></i>Produit actif
                                            </label>
                                            <div class="form-text">
                                                Le produit apparaît dans l'administration
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="is_available"
                                                name="is_available" value="1" {{ old('is_available',
                                                $product->is_available) ? 'checked' : '' }}>
                                            <label class="form-check-label fw-bold" for="is_available">
                                                <i class="fas fa-shopping-cart me-1"></i>Produit disponible
                                            </label>
                                            <div class="form-text">
                                                Le produit peut être acheté par les clients
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                    <div>
                        <a href="{{ route('storeBackOffice') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Retour à la liste
                        </a>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="reset" class="btn btn-outline-warning"
                            onclick="return confirm('Êtes-vous sûr de vouloir réinitialiser le formulaire ?')">
                            <i class="fas fa-undo me-2"></i>Réinitialiser
                        </button>
                        <button type="submit" class="btn btn-success fw-bold">
                            <i class="fas fa-save me-2"></i>Enregistrer les modifications
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</main>

<x-footer />

</html>