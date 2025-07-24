<!DOCTYPE html>
<html>

<body>
    <x-header /> <!-- Pour injecter le header -->
<main class="container my-4">
<x-breadcrumb :items="$breadcrumbs ?? []" />
     @yield('content')
 
    <div class="d-flex">
    <img src="public/images/cookie.png" class="img-fluid" alt="Responsive image">
    <div>
        <h1 style = "background-color: #E5AB69">Super dupper cookie</h1>
        <h2>Dark chocolate</h2>
            <h3 style = "background-color: #E5AB69">
                A wonderfull baked cookie full of melty chocolate, Made with the best 
                selection of floor and chocolate.  
                This crunchy cookie with light taste of vanilla and darker chocolate than Trump policy 
                will make you forget about those of your grand-mother.   Enjoy, folks !
            </h3>
    </div>


</main>

    <x-footer /> <!-- Pour injecter le footer -->



</body>

</html>