<x-header />
<main class="container my-4">
    <x-breadcrumb :items="$breadcrumbs ?? []" />
    @section('title', 'Nos Produits')
    <div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Bienvenu dans le backoffice</h1>
        </div>
    </div>

</main>
<x-footer />
</html>