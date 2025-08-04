<x-header />

<main class="container-fluid">
    <div class="row">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active fw-bold" style="color:#B66E00cc" aria-current="page" href="{{ route('backoffice') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-text-bottom" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Accueil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color:#B66E00cc" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file align-text-bottom" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Commandes
            </a>
          </li>
          <li class="nav-item d-flex justify-content align-items-center">
            <a class="nav-link fw-bold" style="color:#B66E00cc" href="{{ route('storeBackOffice') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart align-text-bottom" aria-hidden="true"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              Produits
            </a>
            <a class="nav-link" style="color:#B66E00cc" href="#" aria-label="Add a new report">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-text-bottom" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color:#B66E00cc" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-text-bottom" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              Clients
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color:#B66E00cc" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 align-text-bottom" aria-hidden="true"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
              Rapports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" style="color:#B66E00cc" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-percent align-text-bottom"><line x1="19" y1="5" x2="5" y2="19"/><circle cx="17.5" cy="17.5" r="2.5"/><circle cx="6.5" cy="6.5" r="2.5"/></svg>
              Promotions
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produits</h1>
        <div class="btn-toolbar mb-2 mb-0 gap-4">
            <a href="{{ route('newProduct') }}" 
            class="btn btn-sm btn-outline-secondary fw-bold text-white text-decoration-none" 
            style="background-color: #B66E00cc; border-color: #B66E00;">
                Ajouter un produit
            </a>
            <select class="btn btn-sm dropdown-toggle fw-bold" style="border-color: #B66E00; color: #B66E00" data-bs-toggle="dropdown" >
                <option value="1" selected>Tous</option> {{--faire un foreach categories--}}
                <option value="2">Les cookies </option>
                <option value="3">Les coffrets</option>
                <option value="4">Les kits</option>
                <option value="5">Les offres</option>
            </select>
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
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <a href="{{ route('productDetailsBackOffice', $product) }}" class="btn text-light" style="background-color: #B66E00cc">
                                Voir le détail
                            </a>
                            <a href="{{ route('editProduct', $product) }}" class="btn btn-primary">
                              <i class="fas fa-edit"></i> Modifier
                            </a>
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

</main>

<x-footer />

</html>