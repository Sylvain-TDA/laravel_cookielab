<!-- resources/views/partials/header.blade.php -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #B66E00;">
    <div class="container-fluid justify-content-center justify-content-md-between">
        <div class="d-flex my-2 my-sm-0">
            <a class="navbar-brand me-2 mb-1 d-flex justify-content-center" href="#">
                <img src="images/Cookie picture.png" height="150" alt="" loading="lazy" />
            </a>

            <!-- Search form -->
            <form class="d-flex input-group w-auto my-auto">
                <input autocomplete="off" type="search" class="form-control rounded" placeholder="Search"
                    style="min-width: 125px; background-color: #ffedd3;" />
                <span class="input-group-text border-0 d-none d-md-flex fs-4"><i class="fas fa-search"></i></span>
            </form>
        </div>

        <ul class="navbar-nav flex-row fs-4">




            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="{{ route('accueil') }}">
                    <i class="fas fa-bars me-1"></i>
                    <span>Accueil</span>
                </a>
            </li>

            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="{{ route('catalogue') }}">
                    <span class="d-none d-lg-inline-block">Catalogue</span>
                    <i class="fas fa-envelope d-inline-block d-lg-none"></i>
                </a>
            </li>

            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="{{ route('contact') }}">
                    <span class="d-none d-lg-inline-block">Contact</span>
                    <i class="fas fa-envelope d-inline-block d-lg-none"></i>
                </a>
            </li>

            <!-- cart + badge -->
            <li class="nav-item me-3 me-lg-2">
                <a class="nav-link" href="{{ route('panier') }}">
                    <span><i class="fas fa-shopping-cart"></i></span>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
            </li>


            <!-- Avatar -->
            <li class="nav-item dropdown align-self-center">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink"
                    role="button" data-mdb-dropdown-init aria-expanded="false">
                    <i class="fa-solid fa-circle-user fs-4"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">My profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
<!-- Navbar -->

<!-- Background image -->
<div id="intro" class="bg-image shadow-1-strong"
    style="background-image: url(https://www.shutterstock.com/image-illustration/lots-fresh-chocolate-chip-cookies-600nw-2162800413.jpg); height: 500px;">
    <div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.6); margin-top: 58px" data-mdb-theme="dark">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
            <div class="text-white">
                <h1 class="mb-3">🍪 Soldes 🍪</h1>
                <h4 class="mb-4">20% de réduction sur votre 1ère commande!</h4>
                <a class="btn btn-outline-light btn-lg mb-3" href="#!" role="button"> 🍪 Voir l'offre promotionnelle 🍪
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->