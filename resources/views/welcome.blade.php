<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />

<body>
    <x-header /> <!-- Pour injecter le header -->
    <x-pub />
    <main class="container my-4">
        blblblblblb <!-- contenu principal de la page -->
    </main>

    <x-footer /> <!-- Pour injecter le footer -->


    <x-script />
</body>

</html>