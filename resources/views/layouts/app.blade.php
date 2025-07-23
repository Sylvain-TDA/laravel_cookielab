<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel' }}</title> <!-- Titre dynamique -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Ajoute Font Awesome pour les icônes (obligatoire pour <i class="fas fa-...">) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Si tu utilises MDBootstrap, ajoute ça (sinon, supprime les data-mdb-... de ton header) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet">
</head>

<body>
    @yield('header') <!-- Pour injecter le header -->

    <main class="container my-4"> <!-- Conteneur Bootstrap pour le contenu principal -->
        @yield('content') <!-- Pour le contenu principal de la page -->
    </main>

    @yield('footer') <!-- Pour injecter le footer -->

    <!-- JS pour Bootstrap/MDB (ajoute si tu as des dropdowns, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.js"></script>
</body>

</html>