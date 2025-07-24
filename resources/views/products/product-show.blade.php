<!DOCTYPE html>
<html>

<body>
    <x-header /> <!-- Pour injecter le header -->
<main class="container my-4">
    <x-breadcrumb :items="$breadcrumbs ?? []" />
    @yield('content')
</main>

    <x-footer /> <!-- Pour injecter le footer -->


    <x-script />
</body>

</html>