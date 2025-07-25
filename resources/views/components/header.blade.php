<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/logo.png">
    <title>{{ $title ?? "Cookie Lab'" }}</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top navbar-light"
        style="background-color: rgba(182, 110, 0, 0.8); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);">
        <div class="container-fluid justify-content-center justify-content-md-between">
            <div class="d-flex my-2 my-sm-0">
                <a class="navbar-brand me-2 mb-1 d-flex justify-content-center" href="#">
                    <img src="/images/logo.png" height="100" alt="logo" loading="lazy" />
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
                    <a class="nav-link" href="{{ route('basket') }}">
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